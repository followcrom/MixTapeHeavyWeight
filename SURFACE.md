# 🖭 MixTape HeavyWeight 🤼 on Digital Ocean 🌊🪸🐚🐬

ssh into the Digital Ocean box:

`dobox`

or

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

## PHP-FPM Configuration

Run this command to list installed PHP modules:

bash
Copy code
php -m

## 📜 Certbot: SSL Certificates 👑

Use Certbot to generate an SSL certificate for your domain.

Install Certbot:

```bash
apt install python3-certbot-nginx
```

Automatically configure the SSL settings in your Nginx configuration:

```bash
certbot --nginx
```

or more verbose:

```bash
certbot --nginx -d mixtape-heavyweight.one -d www.mixtape-heavyweight.one
```

Let's Encrypt certificates are valid for 90 days, but Certbot can automate the renewal process. The command below can be used to manually test renewal:

```bash
certbot renew --dry-run
```

The `--dry-run` flag is a test to simulate the renewal process without actually renewing the certificate. It's useful to check if the renewal will work without issues. You typically run `--dry-run` after initial setup or when you're debugging a renewal issue, but not every time you get an expiry warning.

### Automated Renewal Process

Certbot, by default, installs a cron job or systemd timer that automatically checks for certificate renewals twice a day. You can check for the presence of these tasks:

```bash
systemctl list-timers | grep certbot
```

If your certificate is due to expire (within 30 days), Certbot will automatically attempt to renew it.

### What to Do When You Get an Expiry Email

Nothing, if Certbot is working properly: Certbot should automatically renew your certificate before it expires, so no action is needed.

If you're concerned: You can manually trigger the renewal by running:

```bash
sudo certbot renew
```


### Let's Encrypt Logs

```bash
cat /var/log/letsencrypt/letsencrypt.log
```

<br>

## 🌍 Configure the Nginx Server 🥪

### Nginx Logs 🪸

`cd /var/log/nginx/`

`cat /var/log/nginx/error.log`

`cat /var/log/nginx/access.log`

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

Increase PHP-FPM pool settings in /etc/php/8.1/fpm/pool.d/www.conf:

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
