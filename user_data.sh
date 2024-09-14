#!/bin/bash

# Set up logging
LOGFILE="/var/log/mthw_setup.log"
mkdir -p /var/log
exec > >(tee -a "$LOGFILE") 2>&1

echo "Starting setup script at $(date)"

# Update package lists
sudo apt update -y

# Upgrade packages non-interactively
sudo DEBIAN_FRONTEND=noninteractive apt-get upgrade -y

# Install required packages (Nginx, MySQL, PHP)
sudo apt install -y mysql-server nginx php-fpm php-mysql git curl

# Restart and enable Nginx to run on startup
sudo systemctl restart nginx
sudo systemctl enable nginx

# Variables
APP_DIR="/var/www/mthw"

# Set ownership of app directory
sudo mkdir -p "$APP_DIR"
sudo chown www-data:www-data "$APP_DIR"
sudo chmod 755 "$APP_DIR"

# Initialize the Git repository
git init "$APP_DIR"
cd "$APP_DIR"

# Set the remote URL
git remote add origin https://github.com/followcrom/MixTapeHeavyWeight.git

# Enable sparse checkout
git config core.sparseCheckout true

# Specify the 'ftp' directory in the sparse-checkout configuration
echo "ftp/" >> .git/info/sparse-checkout

# Pull the specified directory
git pull origin main

# Dynamically find the PHP version
PHP_VERSION=$(php -r "echo PHP_MAJOR_VERSION.'.'.PHP_MINOR_VERSION;")

# Create Nginx configuration for the app
sudo bash -c "cat > /etc/nginx/sites-available/mthw" <<EOF
server {
    listen 80;
    server_name 139.59.161.31;

    # Set the root directory for serving static files
    root /var/www/mthw;
    # Specify the default file to serve if no file is specified
    index index.php index.html;

    # Location block for handling general requests
    location / {
        try_files \$uri \$uri/ /index.html?\$query_string;
        error_page 404 /404.html;
    }

    # Location block for PHP files
    location ~ \.php\$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php${PHP_VERSION}-fpm.sock;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi_params;
    }
}
EOF

# Enable the Nginx site and restart the service
sudo ln -sf /etc/nginx/sites-available/mthw /etc/nginx/sites-enabled

# Test Nginx configuration for syntax errors
if sudo nginx -t; then
    echo "Nginx configuration syntax is okay."
    sudo systemctl restart nginx
    echo "Nginx restarted successfully."
else
    echo "Error in Nginx configuration." >&2
    exit 1
fi

# Start and enable MySQL service
sudo systemctl start mysql
sudo systemctl enable mysql

# Secure the MySQL installation automatically
sudo mysql -e "DELETE FROM mysql.user WHERE User='';"
sudo mysql -e "DROP DATABASE IF EXISTS test;"
sudo mysql -e "DELETE FROM mysql.db WHERE Db='test' OR Db='test\\_%';"
sudo mysql -e "FLUSH PRIVILEGES;"
sudo mysql -e "UPDATE mysql.user SET host='localhost' WHERE user='root';"
sudo mysql -e "DELETE FROM mysql.user WHERE User='';"
sudo mysql -e "FLUSH PRIVILEGES;"

# Create a new database and user
sudo mysql -e "CREATE DATABASE mixtape_reviews;"
sudo mysql -e "CREATE USER 'heavyweight'@'localhost' IDENTIFIED BY 'digiocean_db';"
sudo mysql -e "GRANT ALL PRIVILEGES ON mixtape_reviews.* TO 'heavyweight'@'localhost';"
sudo mysql -e "FLUSH PRIVILEGES;"

# Create the reviews table
sudo mysql -u heavyweight -pdigiocean_db -D mixtape_reviews -e "
CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    stars INT NOT NULL,
    comments TEXT NOT NULL,
    date DATETIME DEFAULT CURRENT_TIMESTAMP
);"

echo "MySQL setup and configuration complete."

# Save PHP database connection details to config.php
sudo bash -c 'cat <<EOF > /var/www/mthw/config.php
<?php
return [
    "host_name" => "localhost",
    "database" => "mixtape_reviews",
    "user_name" => "heavyweight",
    "password" => "digiocean_db"
];
EOF'

# Set proper permissions for the config.php file
sudo chmod 644 /var/www/mthw/config.php
sudo chown www-data:www-data /var/www/mthw/config.php

# Restart PHP and Nginx services to apply changes
sudo systemctl restart php${PHP_VERSION}-fpm
sudo systemctl restart nginx

echo "MySQL and PHP configuration complete."
