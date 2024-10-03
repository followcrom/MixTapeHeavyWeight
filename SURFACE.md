# 🖭 MixTape HeavyWeight 🤼 on Digital Ocean 🌊🪸🐚🐬

git push origin SURFACE:main --force

ssh into the Digital Ocean box:

```bash
ssh -i ~/.ssh/digiocean root@139.59.161.31
```

## Update Files

```bash
rsync -avz -e "ssh -i ~/.ssh/digiocean" ftp/ root@139.59.161.31:/var/www/mthw
```

**rsync** is an efficient tool for synchronizing files between your local machine and the VM. It’s particularly useful if you regularly update files, as it only copies the differences, making the process faster.

- a: Archive mode (preserves permissions, symlinks, etc.)
- v: Verbose (shows the transfer process)
- z: Compresses files during transfer for faster copying

## 👀 Point Your Domain to the Droplet’s IP Address

- On the Namecheap dashboard, click on Domain List from the left-hand menu.
- Find the domain and click Manage next to it.
- In the Domain tab, click on the Advanced DNS tab.
- Scroll to the Host Records section.
- Add or update the following records:

1. **A Record for the root domain (@)**:

- Host: @
- Value: Your Droplet's IP address
- TTL: Leave it as Automatic or set it to a low value like 300 seconds for faster propagation.

2. **A Record for www**:

- Host: www
- Value: Your Droplet's IP address
- TTL: Leave it as Automatic or set it to a low value like 300 seconds for faster propagation.

Click the green checkmark or Save All Changes.

It might take anywhere from a few minutes to a few hours for the DNS changes to propagate worldwide, but it's often quite fast. You can use a tool like [DNS Checker](https://dnschecker.org/#A/mixtape-heavyweight.one) to see if the domain is resolving to the correct IP address, or verify that the DNS record has been updated by running the following command:

```bash
nslookup mixtape-heavyweight.one
```

This should return the public IP address of your VM.

## 📜 SSL Certificate 👑

Use Certbot to generate an SSL certificate for your domain.

```bash
sudo apt install python3-certbot-nginx
```

This command will automatically configure the SSL settings in your Nginx configuration.

```bash
sudo certbot --nginx
```

or more specifically:

```bash
certbot --nginx -d mixtape-heavyweight.one -d www.mixtape-heavyweight.one
```

Let's Encrypt certificates are valid for 90 days, but Certbot can automate the renewal process. The command below can be used to manually test renewal:

```bash
sudo certbot renew --dry-run
```

The `--dry-run` flag is a test to simulate the renewal process without actually renewing the certificate. It's useful to check if the renewal will work without issues. You typically run `--dry-run` after initial setup or when you're debugging a renewal issue, but not every time you get an expiry warning.

### Automated Renewal Process

Certbot, by default, installs a cron job or systemd timer that automatically checks for certificate renewals twice a day. You can check for the presence of these tasks:

```bash
sudo systemctl list-timers | grep certbot
```

If your certificate is due to expire (within 30 days), Certbot will automatically attempt to renew it.

### What to Do When You Get an Expiry Email

Nothing, if Certbot is working properly: Certbot should automatically renew your certificate before it expires, so no action is needed.

If you're concerned: You can manually trigger the renewal by running:

```bash
sudo certbot renew
```

### Transfer Your SSL Certificate to Another VM

You do not need to delete the old certificate before generating a new one on the new VM. Using the same domain name for a new certificate is perfectly fine; Let's Encrypt allows this. Simply reissue the certificate by installing Certbot and running it again on the new server.

If you really want to, you can copy the following files from your existing server:

- Certificate file (e.g., /etc/letsencrypt/live/yourdomain.com/fullchain.pem)
- Private key (e.g., /etc/letsencrypt/live/yourdomain.com/privkey.pem)
- Certificate chain (e.g., /etc/letsencrypt/live/yourdomain.com/chain.pem)

You can use scp or another secure file transfer method to copy them to your new server. Example:

```bash
scp -r /etc/letsencrypt/live/yourdomain.com user@new_vm_ip:/path/to/destination/
```

### Install the Certificate on the New Server

Move the certificates to the appropriate location on the new server, like `/etc/letsencrypt/live/yourdomain.com/`.

Update your web server configuration to point to the certificate and private key on the new VM. In Nginx:

```nginx
server {
    listen 443 ssl;
    server_name yourdomain.com;

    ssl_certificate /etc/letsencrypt/live/yourdomain.com/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/yourdomain.com/privkey.pem;

    # Other configurations...
}
```

### Install Certbot on the New VM (Optional):

If you plan to continue using Let's Encrypt for automatic renewals, you'll need to install Certbot on the new server.

### Let's Encrypt Logs

```bash
sudo cat /var/log/letsencrypt/letsencrypt.log
```

<br>

## 🌍 Configure the Nginx Server 🥪

Add a new server block for the **Mixtape site** in the Nginx configuration file:

```bash
nano /etc/nginx/sites-available/mthw
```

```nginx
server {
    server_name mixtape-heavyweight.one www.mixtape-heavyweight.one;

    # Redirect www to non-www
    if ($host = www.mixtape-heavyweight.one) {
        return 301 $scheme://mixtape-heavyweight.one$request_uri;
    }

    # Set the root directory for serving static files
    root /var/www/mthw;
    # Specify the default file to serve if no file is specified
    index index.php index.html;

    # Location block for handling general requests
    location / {
        try_files $uri $uri/ =404;
        error_page 404 /404.html;
        location = /404.html {
            root /var/www/mthw;
            internal;
        }
    }

    # Location block for PHP files
    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
        error_page 404 /404.html;  # Use custom 404 page for PHP files
    }

    listen 443 ssl; # managed by Certbot
    ssl_certificate /etc/letsencrypt/live/mixtape-heavyweight.one/fullchain.pem; # managed by Certbot
    ssl_certificate_key /etc/letsencrypt/live/mixtape-heavyweight.one/privkey.pem; # managed by Certbot
    include /etc/letsencrypt/options-ssl-nginx.conf; # managed by Certbot
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem; # managed by Certbot
}

server {
    if ($host = www.mixtape-heavyweight.one) {
        return 301 $scheme://mixtape-heavyweight.one$request_uri;
    } # managed by Certbot

    if ($host = mixtape-heavyweight.one) {
        return 301 https://$host$request_uri;
    } # managed by Certbot

    listen 80;
    server_name mixtape-heavyweight.one www.mixtape-heavyweight.one;
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
ALTER USER 'heavyweight'@'localhost' IDENTIFIED BY '********';

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
chmod 644 config.php
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

### Delete Records 🗑️

```sql
DELETE FROM reviews WHERE id IN (2, 3, 4);
```

### Update Records 📝

```sql
UPDATE reviews SET stars = 5 WHERE id = 1;
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

With this config file, you can use the `mysql` command without the password:

`mysql -u heavyweight`

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

## Speed Up Your Server

When PHP-FPM is set to spawn new workers on demand, the first request can take longer because it has to spin up workers. To address this:

Increase PHP-FPM pool settings in /etc/php/8.1/fpm/pool.d/www.conf (or your specific pool config):
ini
Copy code
pm = dynamic
pm.max_children = 10 # Increase if the server has enough resources
pm.start_servers = 3 # Start more servers to avoid cold starts
pm.min_spare_servers = 2 # Ensure a minimum number of idle workers
pm.max_spare_servers = 5
This configuration ensures that enough PHP-FPM workers are already running when the first request hits.

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
    "AllowedHeaders": ["*"],
    "AllowedMethods": ["GET", "HEAD"],
    "AllowedOrigins": ["https://mixtape.followcrom.online"],
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

Step 4: Make the audio files downloadable

You can set the `Content-Disposition` header to `attachment `in your S3 bucket settings. This header can force the browser to download the file instead of displaying it.

In an object's properties window, click the `metadata` tab. Generally, **Key** is by default set to **Content-Type** and **Value** is set to **audio/mp3**.

Click the `Add more metadata` button, and add:

`Key: Content-Disposition Value: attachment`

Save the changes.

In the HTML page, try:

```html
<a
  href="https://mthw.s3.eu-west-2.amazonaws.com/db/original.mp3"
  download="original.mp3"
  type="audio/mpeg"
>
  <button class="action-btn action-btn-big">
    <i class="fas fa-download"></i>
  </button>
</a>
```

or

```html
<a
  href="https://mthw.s3.eu-west-2.amazonaws.com/db/original.mp3?response-content-disposition=attachment; filename=original.mp3"
>
  <button class="action-btn action-btn-big">
    <i class="fas fa-download"></i>
  </button>
</a>
```

## Update the HTML

Ensure the streaming audio tag looks like this:

```html
<audio id="audio" preload="none" crossorigin="anonymous">
  <source
    src="https://mthw.s3.eu-west-2.amazonaws.com/gf/supafly.mp3"
    type="audio/mpeg"
  />
  Your browser does not support the audio tag.
</audio>
```

- The `crossorigin attribute` ensures consistent behavior across different browsers and scenarios. It explicitly tells the browser to make a CORS request, which can prevent certain types of attacks and unintended behavior.

- Use the Object URL as the source for the audio file (`https://your-bucket-name.s3.amazonaws.com/path/to/your-file.mp3`). This is a publicly accessible HTTP(S) URL that you can use directly in web browsers or embed in web pages, and is ideal for streaming or linking to files from websites.

- The S3 URI (e.g. `s3://your-bucket-name/path/to/your-file.mp3`) is mainly used within AWS services, SDKs, and CLI for referencing objects in S3 and is not directly usable in a web browser or for embedding in web pages.

## Debugging

**Use curl** to test your S3 endpoint directly. This can help determine if it's a server-side or client-side issue:

```bash
curl -I -H "Origin: https://mixtape.followcrom.online" https://mthw.s3.eu-west-2.amazonaws.com/gf/supafly.mp3
```

This should return headers including Access-Control-Allow-Origin if CORS is correctly configured.

**Network Tab:** In the browser's developer tools, go to the Network tab, filter for your MP3 file, and examine the request and response headers in detail. Look for any discrepancies with the curl results.

**Browser Cache:** Perform a hard refresh (Ctrl+F5 on Windows) to ensure you're not seeing cached results.
