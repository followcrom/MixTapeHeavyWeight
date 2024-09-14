# 🖭 MixTape HeavyWeight 🤼 on Digital Ocean 🌊🪸🐚🐬

ssh into the Digital Ocean box:

```bash
ssh -i ~/.ssh/digiocean root@188.166.155.230
```

## 🖨️ Copy the `mthw` files to the server:

```bash
rsync -avz -e "ssh -i ~/.ssh/digiocean" ftp/ root@188.166.155.230:/var/www/mthw/
```

## Subdomain Configuration 📤

Create a new subdomain for the Mixtape site. Point the A record of the subdomain (`mixtape.followcrom.online`) to the public IP address of the VM.

- Name: mixtape (or mixtape.followcrom.online depending on the interface)
- Type: A
- Value: The public IP address of your VM (188.166.155.230)
- TTL: You can leave this at the default (e.g. 5 minutes).
- Save the DNS settings.

Once you've added the A record, it might take a few minutes to propagate. Verify that the DNS record has been updated:

```bash
nslookup mixtape.followcrom.online
```

This should return the public IP address of your VM (188.166.155.230).

## 📜 Obtain an SSL Certificate for the New Subdomain 👑

Use Certbot to generate an SSL certificate for your new subdomain. This command will automatically configure the SSL settings in your Nginx configuration for the new subdomain.

```bash
sudo certbot --nginx -d mixtape.followcrom.online
```

The output will be similar to the following:

```bash
Requesting a certificate for mixtape.followcrom.online

Successfully received certificate.
Certificate is saved at: /etc/letsencrypt/live/mixtape.followcrom.online/fullchain.pem
Key is saved at:         /etc/letsencrypt/live/mixtape.followcrom.online/privkey.pem
This certificate expires on 2024-11-18.
These files will be updated when the certificate renews.
Certbot has set up a scheduled task to automatically renew this certificate in the background.

Deploying certificate
Successfully deployed certificate for mixtape.followcrom.online to /etc/nginx/sites-enabled/ttt
Congratulations! You have successfully enabled HTTPS on https://mixtape.followcrom.online
```

<br>

## 🌍 Configure the Nginx Server 🥪

Add a new server block for the **Mixtape site** in the Nginx configuration file:

```bash
nano /etc/nginx/sites-available/ttt
```

```nginx
server {
    # Define the domain names this server block will respond to
    server_name www.mixtape.followcrom.online mixtape.followcrom.online;

    # Set the root directory for serving static files
    root /var/www/mthw;
    # Specify the default file to serve if no file is specified
    index index.php index.html;

    # Location block for handling general requests
    location / {
        # Try to serve the file requested by the user, fall back to /index.html if not found
        try_files $uri $uri/ /index.html?$query_string;
        # Custom error page for 404 errors
        error_page 404 /404.html;
    }

    # Location block handles all PHP files in the entire web root directory (/var/www/mthw). This includes the PHP files in the gf and db directories.
    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }

    # Enable SSL for this server block
    listen 443 ssl; # managed by Certbot

    # Path to the SSL certificate and key
    ssl_certificate /etc/letsencrypt/live/mixtape.followcrom.online/fullchain.pem; # managed by Certbot
    ssl_certificate_key /etc/letsencrypt/live/mixtape.followcrom.online/privkey.pem; # managed by Certbot

    # Include SSL settings provided by Certbot
    include /etc/letsencrypt/options-ssl-nginx.conf; # managed by Certbot
    # Include Diffie-Hellman parameter file for improved security
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem; # managed by Certbot
}

# Redirect HTTP to HTTPS
server {
    # Redirect HTTP requests to HTTPS
    if ($host = mixtape.followcrom.online) {
        return 301 https://$host$request_uri;
    } # managed by Certbot

    # Define the domain name for this server block
    server_name mixtape.followcrom.online;
    # Listen on port 80 for HTTP requests
    listen 80;
    # Return a 404 error for unmatched requests
    return 404; # managed by Certbot
}
```

```bash
sudo nginx -t
nginx -s reload # or
systemctl reload nginx # same as above
```

📌 For the full **ttt configuration**, see the [Nginx Configuration](#full-nginx-configuration) section.

<br>

# 🛢️ MySQL 🐘

## Install MySQL on the Server

Since the MTHW reviews use MySQL, install it on the server:

```bash
sudo apt update
sudo apt install mysql-server
```

After installation, start the MySQL service and enable it to start on boot:

```bash
sudo systemctl start mysql
sudo systemctl enable mysql
```

### 🔐 Secure the MySQL Installation

Run the following command to secure your MySQL installation:

```bash
sudo mysql_secure_installation

# the output will be similar to the following:

Securing the MySQL server deployment.

Connecting to MySQL using a blank password. # I created a password later

VALIDATE PASSWORD COMPONENT can be used to test passwords and improve security. It checks the strength of password
and allows the users to set only those passwords which are secure enough. Would you like to setup VALIDATE PASSWORD component?

Press y|Y for Yes, any other key for No: n

Skipping password set for root as authentication with auth_socket is used by default.
If you would like to use password authentication instead, this can be done with the "ALTER_USER" command.
See https://dev.mysql.com/doc/refman/8.0/en/alter-user.html#alter-user-password-management for more information.

By default, a MySQL installation has an anonymous user, allowing anyone to log into MySQL without having to have
a user account created for them. This is intended only for testing, and to make the installation go a bit smoother.
You should remove them before moving into a production environment.

Remove anonymous users? (Press y|Y for Yes, any other key for No) : y
Success.

Normally, root should only be allowed to connect from 'localhost'. This ensures that someone cannot guess at the root password from the network.

Disallow root login remotely? (Press y|Y for Yes, any other key for No) : y
Success.

By default, MySQL comes with a database named 'test' that anyone can access. This is also intended only for testing,
and should be removed before moving into a production environment.


Remove test database and access to it? (Press y|Y for Yes, any other key for No) : y
 - Dropping test database...
Success.

 - Removing privileges on test database...
Success.

Reloading the privilege tables will ensure that all changes made so far will take effect immediately.

Reload privilege tables now? (Press y|Y for Yes, any other key for No) : y
Success.

All done!
```

### Create a New Database and User 🙋‍♂️

Log in to MySQL as the root user:

```bash
sudo mysql -u root -p
```

I did not set a root password during the `mysql_secure_installation` process, so can **just hit enter** when prompted for the root user password.

```sql
-- Create a new database:
CREATE DATABASE mixtape_reviews;

-- Create a new MySQL user:
CREATE USER 'heavyweight'@'localhost' IDENTIFIED BY ''; --  I created a password later

-- Grant privileges to the new user:
GRANT ALL PRIVILEGES ON mixtape_reviews.* TO 'heavyweight'@'localhost';

-- Flush the privileges to apply changes:
FLUSH PRIVILEGES;

-- Exit MySQL:
EXIT;
```

### Create the Reviews Table 🖥

```bash
# Log in to MySQL using the new user:
mysql -u heavyweight -p mixtape_reviews
```

Now in MySQL:

```sql
-- Create the Necessary Tables:
CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    stars INT NOT NULL,
    comments TEXT NOT NULL,
    date DATETIME DEFAULT CURRENT_TIMESTAMP
);
```

### 🔄 Change the MySQL User Password 🔑

Log in to MySQL as the root user:

```bash
sudo mysql -u root -p
# There is no root password, so just hit enter when prompted for the password.
```

```sql
-- Change the password for an heavyweight user:
ALTER USER 'heavyweight'@'localhost' IDENTIFIED BY 'digiocean_db';

-- Flush privileges to ensure changes take effect:
FLUSH PRIVILEGES;

EXIT;
```

### 🛡️ Securely Handle Database Credentials 🔏

Create a `config.php` file in the web directory - `/var/www/mthw/config.php`. (I was advised to create the file outside the web directory, but did not do that.)

```php
<?php
return [
    'host_name' => 'localhost',
    'database' => 'mixtape_reviews',
    'user_name' => 'heavyweight',
    'password' => 'password'
];
?>
```

Ensure that your configuration files have appropriate file permissions so that only the web server user (or application user) can read them:

```bash
chmod 600 config.php
```

🌐 In the PHP code in the site, include the configuration file and use the values as below:

```php
    $config = include('../config.php');

    $host_name = $config['host_name'];
    $database = $config['database'];
    $user_name = $config['user_name'];
    $password = $config['password'];
```

## 🧐📖 Reading the Database

(A better method is to run an SQL script. See below. 🏃‍♀️)

`mysql -u heavyweight -p`

Enter the password when prompted (in `config.php`).

```sql
SHOW DATABASES;
USE mixtape_reviews;
SHOW TABLES;
SELECT * FROM reviews;
```

### 📦 Storing Credentials in a MySQL Configuration File 🪪

You can store credentials in a MySQL configuration file (`~/.my.cnf`) to avoid passing the password directly:

```bash
# Create `~/.my.cnf`:
nano ~/.my.cnf

# Add the Following Content:
[client]
user = heavyweight
password = password # (in `config.php`)

# Set the permissions of the file:
chmod 600 ~/.my.cnf
```

### 🏃 Running SQL Scripts

If you have a SQL file with a series of commands, you can execute it from the command line:

```bash
mysql mixtape_reviews < read_db.sql
```

You should not need to enter the password when running the script.

### 🧾 Logs 🪵

```bash
tail -f /var/log/mysql/error.log
```

<br>

### 🖥️ Full Nginx Configuration for the TTT, Mixtape, and FollowCrom Sites

```nginx
server {
    server_name www.ttt.followcrom.online ttt.followcrom.online;

    # Root location block for your Django app
    location / {
        include proxy_params;
        proxy_pass http://unix:/var/www/ttt/tttracker.sock;
    }

    # Static files location for the static site
    location /fc/ {
        alias /var/www/fc_online/;
        index index.html;
        try_files $uri $uri/ =404;
    }

    # Handle PHP files specifically in the /fc/contact/ directory
    location ~ ^/fc/contact/(.+\.php)$ {
        alias /var/www/fc_online/contact/$1;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_index contact.php;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $request_filename;
    }

        # Handle subscribe.php in /fc/wotd/ directory
    location = /fc/wotd/subscribe.php {
        alias /var/www/fc_online/wotd/subscribe.php;
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $request_filename;
        # Debug logging
        error_log /var/log/nginx/php_debug.log debug;
        # PHP error logging
        fastcgi_param PHP_VALUE "error_log=/var/log/nginx/php_errors.log";
    }

    # SSL configuration (already handled by Certbot)
    listen 443 ssl; # managed by Certbot
    ssl_certificate /etc/letsencrypt/live/ttt.followcrom.online/fullchain.pem; # managed by Certbot
    ssl_certificate_key /etc/letsencrypt/live/ttt.followcrom.online/privkey.pem; # managed by Certbot
    include /etc/letsencrypt/options-ssl-nginx.conf; # managed by Certbot
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem; # managed by Certbot
}

# Redirect HTTP to HTTPS
server {
    if ($host = ttt.followcrom.online) {
        return 301 https://$host$request_uri;
    } # managed by Certbot

    listen 80;
    server_name ttt.followcrom.online;
    return 404; # managed by Certbot
}


server {
    # Define the domain names this server block will respond to
    server_name www.mixtape.followcrom.online mixtape.followcrom.online;

    # Set the root directory for serving static files
    root /var/www/mthw;
    # Specify the default file to serve if no file is specified
    index index.php index.html;

    # Location block for handling general requests
    location / {
        # Try to serve the file requested by the user, fall back to /index.html if not found
        try_files $uri $uri/ /index.html?$query_string;
        # Custom error page for 404 errors
        error_page 404 /404.html;
    }

    # Location block handles all PHP files in the entire web root directory (/var/www/mthw). This includes the PHP files in the gf and db directories.
    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }

    # Enable SSL for this server block
    listen 443 ssl; # managed by Certbot

    # Path to the SSL certificate and key
    ssl_certificate /etc/letsencrypt/live/mixtape.followcrom.online/fullchain.pem; # managed by Certbot
    ssl_certificate_key /etc/letsencrypt/live/mixtape.followcrom.online/privkey.pem; # managed by Certbot

    # Include SSL settings provided by Certbot
    include /etc/letsencrypt/options-ssl-nginx.conf; # managed by Certbot
    # Include Diffie-Hellman parameter file for improved security
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem; # managed by Certbot
}

# Redirect HTTP to HTTPS
server {
    # Redirect HTTP requests to HTTPS
    if ($host = mixtape.followcrom.online) {
        return 301 https://$host$request_uri;
    } # managed by Certbot

    # Define the domain name for this server block
    server_name mixtape.followcrom.online;
    # Listen on port 80 for HTTP requests
    listen 80;
    # Return a 404 error for unmatched requests
    return 404; # managed by Certbot
}
```


## 👀 To Do

- Need a custom error page for 404 errors.

- Upload db directory to the server.

- Upload audio files to the server.

<br>

# Audio Files on AWS S3 🎵

## Configure the S3 bucket to serve audio files publicly

Step 1: Unblock Public Access

- Select your S3 bucket.
- Go to the Permissions tab.
- Edit the "Block Public Access" settings:
- Uncheck "Block all public access".
- Confirm the change by clicking Save.

Step 2: Add a Bucket Policy

```json
{
    "Version": "2012-10-17",
    "Statement": [
        {
            "Sid": "PublicReadGetObject",
            "Effect": "Allow",
            "Principal": "*",
            "Action": "s3:GetObject",
            "Resource": "arn:aws:s3:::followcrom-online/*"
        }
    ]
}
```

Step 3: Add or Modify the CORS Configuration
    
```json
[
    {
        "AllowedHeaders": [
            "*"
        ],
        "AllowedMethods": [
            "GET",
            "HEAD"
        ],
        "AllowedOrigins": [
            "https://mixtape.followcrom.online"
        ],
        "ExposeHeaders": [
            "Content-Length",
            "Content-Type",
            "ETag",
            "Content-Range"
        ],
        "MaxAgeSeconds": 3000
    }
]
```


## Update the HTML

Ensure your audio tag looks like this:

```html
<audio id="audio" preload="none" crossorigin="anonymous">
    <source src="https://followcrom-online.s3.eu-west-2.amazonaws.com/audio/supafly.mp3" type="audio/mpeg">
    Your browser does not support the audio tag.
</audio>
```

- The `crossorigin attribute` ensures consistent behavior across different browsers and scenarios. It explicitly tells the browser to make a CORS request, which can prevent certain types of attacks and unintended behavior.

- Use the Object URL as the source for the audio file (`https://your-bucket-name.s3.amazonaws.com/path/to/your-file.mp3`). This is a publicly accessible HTTP(S) URL that you can use directly in web browsers or embed in web pages, and is ideal for streaming or linking to files from websites.

- The S3 URI (e.g. `s3://your-bucket-name/path/to/your-file.mp3`) is mainly used within AWS services, SDKs, and CLI for referencing objects in S3 and is not directly usable in a web browser or for embedding in web pages.

## Debugging

**Use curl** to test your S3 endpoint directly. This can help determine if it's a server-side or client-side issue:

```bash
curl -I -H "Origin: https://mixtape.followcrom.online" https://followcrom-online.s3.eu-west-2.amazonaws.com/audio/supafly.mp3
```

This should return headers including Access-Control-Allow-Origin if CORS is correctly configured.

**Network Tab:** In the browser's developer tools, go to the Network tab, filter for your MP3 file, and examine the request and response headers in detail. Look for any discrepancies with the curl results.

**Browser Cache:** Perform a hard refresh (Ctrl+F5 on Windows) to ensure you're not seeing cached results.