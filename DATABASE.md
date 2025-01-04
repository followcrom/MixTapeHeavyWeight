# 🥊👊 MTHW Database 🛢️🥷🥋

<img src="imgs/belt_tape.png" alt="Image Description" width="200" height="200">

## 🏠 Local testing

```bash
# Start the PHP server:
php -S localhost:8000
```

# 📦 On the Box ˚˖𓍢ִִ໋🌊🦈˚˖𓍢ִ✧˚.

The task was to replace the memory-hungry **mysql-server** db with a lightweight **sqlite3** db.

### Useful Commands

```bash
tail -f /var/log/nginx/error.log
systemctl reload nginx
systemctl restart php8.1-fpm
```

### 📟 sqlite3 cmds from the terminal

```bash
sqlite3 /var/www/mthw/mthw_reviews.db "SELECT * FROM reviews_table;"
sqlite3 /var/www/mthw/mthw_reviews.db "INSERT INTO reviews_table (mixtape, stars, comments) VALUES ('Noodles', 2, 'Fire oh');"
sqlite3 mthw_reviews.db "INSERT INTO reviews_table (mixtape, stars, comments) VALUES ('Noodles', 2, 'A BB King number');"
```

A big issue was that I could write INSERT statements to the new sqlitedb from the terminal (as root user), but not from the website.

### 🧑🏻‍💻 www-data user

The www-data user is commonly used by web servers like Nginx. To switch to the www-data user:

```sh
sudo -u www-data -s
```

(I think) it was necessary to `chown` the **mthw** dir to the _www-data user_, as well as the database.

```bash
chown www-data:www-data /var/www/mthw/mthw_reviews.db

chmod 775 /var/www/mthw
chown www-data:www-data /var/www/mthw

# Results in:
-rw-r--r--  1 www-data www-data  12288 Jan  4 00:22 mthw_reviews.db
drwxr-xr-x 10 www-data www-data 12288 Jan  2 16:15 mthw/
```

# 🗃️ SQLite3 🌠

Suitable for small to medium-sized applications with limited concurrent access and smaller datasets. Some advanced database features found in MySQL, such as stored procedures, advanced indexing, and user permissions, are not available in SQLite.

## 🏗 Install SQLite3 📥

```bash
sudo apt-get install sqlite3
```

### Create the Database and Tables 🏗️

Open a terminal and run the following commands:

```bash
sqlite3 /var/www/mthw/mthw_reviews.db
```

This command will create a new SQLite database file (if it doesn't already exist) and open the SQLite command-line interface. You can name your SQLite database file anything you like, as long as it has the .sqlite or .db extension.

### Inside the SQLite command-line interface

- Create the reviews table:

```sql
CREATE TABLE reviews_table (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    mixtape TEXT NOT NULL,
    stars INTEGER NOT NULL,
    comments TEXT NOT NULL,
    date DATETIME DEFAULT CURRENT_TIMESTAMP
);
```

- List all the tables:

```sql
SELECT name FROM sqlite_master WHERE type='table';
```

- Insert data:

```sql
INSERT INTO reviews (mixtape, stars, comments) VALUES ('Noodles', 2, 'Fire 50');
```

- Retrieve data:

```sql
SELECT * FROM reviews;
```

- List the information about the table:

```sql
PRAGMA table_info(reviews_table);
```

- Exit the SQLite command-line interface:

```sql
.exit
```

## 📚 SQLite Modules 📦

Run the following command to list all PHP modules currently installed:

```bash
php -m | grep sqlite

# If the SQLite modules are installed, you should see this output:
pdo_sqlite
sqlite3
```

If you don’t see pdo_sqlite or sqlite3, install them using:

```bash
sudo apt-get install php-pdo
```

## ⚙️ Config.php
Update `config.php` to include the path to the SQLite database file:

```php
<?php
return [
    'reviews' => '/var/www/mthw/mthw_reviews.db'
];
?>
```

Old mysql server config.php:

```php
<?php
return [
    'host_name' => 'localhost',
    'database' => 'mixtape_reviews',
    'user_name' => 'heavyweight',
    'password' => 'mthw_password'
];
?>
```

<br><br>

# ⛁ MySQL 🍃

Originally I installed `mysql-server` on linux.

```bash
mysql -V
mysql  Ver 8.0.40-0ubuntu0.22.04.1 for Linux on x86_64 ((Ubuntu))
```

`top` revealed the mysqld process was using approximately 312 MB of memory, which accounts for about 31.9% of the system's memory.

There were suggestions on how to change the memory limit in the config file. Of all the files called `mysqld.cnf, my.cnf, my.cnf.fallback, mysql.cnf, mysql.conf.d/` or similar, the one that contained the configuration was `/etc/mysql/mysql.conf.d/mysql.cnf`.

```bash
cat /etc/mysql/mysql.conf.d/mysqld.cnf

# The MySQL database client configuration file
#
# Ref to https://dev.mysql.com/doc/refman/en/mysql-command-options.html

#
# The MySQL database server configuration file.
#
# One can use all long options that the program supports.
# Run program with --help to get a list of available options and with
# --print-defaults to see which it would actually understand and use.
#
# For explanations see
# http://dev.mysql.com/doc/mysql/en/server-system-variables.html

# Here is entries for some specific programs
# The following values assume you have at least 32M ram
#
# * Basic Settings
#
user            = mysql
# pid-file      = /var/run/mysqld/mysqld.pid
# socket        = /var/run/mysqld/mysqld.sock
# port          = 3306
# datadir       = /var/lib/mysql


# If MySQL is running as a replication slave, this should be
# changed. Ref https://dev.mysql.com/doc/refman/8.0/en/server-system-variables.html#sysvar_tmpdir
# tmpdir                = /tmp
#
# Instead of skip-networking the default is now to listen only on
# localhost which is more compatible and is not less secure.
bind-address            = 127.0.0.1
mysqlx-bind-address     = 127.0.0.1
#
# * Fine Tuning
#
key_buffer_size         = 16M
# max_allowed_packet    = 64M
# thread_stack          = 256K

# thread_cache_size       = -1

# This replaces the startup script and checks MyISAM tables if needed
# the first time they are touched
myisam-recover-options  = BACKUP

max_connections        = 15

table_open_cache       = 100

#
# * Logging and Replication
#
# Both location gets rotated by the cronjob.
#
# Log all queries
# Be aware that this log type is a performance killer.
# general_log_file        = /var/log/mysql/query.log
# general_log             = 1
#
# Error log - should be very few entries.
#
log_error = /var/log/mysql/error.log
#
# Here you can see queries with especially long duration
# slow_query_log                = 1
# slow_query_log_file   = /var/log/mysql/mysql-slow.log
# long_query_time = 2
# log-queries-not-using-indexes
#
# The following can be used as easy to replay backup logs or for replication.
# note: if you are setting up a replication slave, see README.Debian about
#       other settings you may need to change.
# server-id             = 1
# log_bin                       = /var/log/mysql/mysql-bin.log
# binlog_expire_logs_seconds    = 2592000
max_binlog_size   = 100M
# binlog_do_db          = include_database_name
# binlog_ignore_db      = include_database_name
```

```bash
root@followCrom:~# cat .my.cnf

[client]
user = heavyweight
password = mthw_password
```

```bash
root@followCrom:~# cat .mysql_history

# ... mysql history ...
```

## 📥 Backup MySQL reviews

**Step 1**: Log in to MySQL as the root user:

```bash
sudo mysql -u root -p
```

```sql
SHOW DATABASES;

USE your_database_name;
```

**Step 2**: Export Tables as CSV

```sql
SELECT * FROM reviews
INTO OUTFILE '/var/lib/mysql-files/old_reviews.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n';
```

### Make sure the MySQL server has write permissions to the directory

Initially, I got the **ERROR 1290 (HY000)** which indicates the MySQL server is running with the `--secure-file-priv` option enabled, which restricts the location where files can be read or written by MySQL.

To resolve this issue:

**Step 1**: Check the current `secure-file-priv` setting

To see the directory where MySQL is allowed to write files:

```sql
SHOW VARIABLES LIKE 'secure_file_priv';
```

This will return something like:

```diff
+------------------+------------------------+
| Variable_name    | Value                  |
+------------------+------------------------+
| secure_file_priv | /var/lib/mysql-files/  |
+------------------+------------------------+
```

(If the value is NULL, it means file import/export is disabled.)

**Step 2**: Use the allowed directory

If the secure_file_priv variable specifies a directory (e.g., /var/lib/mysql-files/), modify your query to save the CSV file there:

```sql
SELECT * FROM reviews
INTO OUTFILE '/var/lib/mysql-files/old_reviews.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n';
```

**Step 3**: Exit MySQL

```sql
EXIT;
```

**Step 4**: Move the file to your desired location:

```bash
mv /var/lib/mysql-files/old_reviews.csv /var/www/mthw/old_reviews/
```

<br><br>

# 🗑️ Remove MySQL 🧹

**Step 1**: Stop MySQL Service

```bash
systemctl stop mysql
```

**Step 2**: Uninstall MySQL Packages

```bash
sudo apt purge mysql-server mysql-client
sudo apt autoremove
sudo apt autoclean
```

After this operation, 195 MB disk space will be freed.


**Step 3**: Remove MySQL Configuration and Data Files

```bash
rm -rf /etc/mysql
rm -rf /var/lib/mysql

# To remove any MySQL logs:
rm -rf /var/log/mysql*
```


**Step 4**: Verify Removal

This command will list any remaining MySQL packages. If there are none, MySQL has been successfully removed.

```bash
dpkg -l | grep -i mysql
```

If any packages still show up, remove them manually with `sudo apt remove _package-name_`. In my case, these remained;

#### php-mysql

This is a metapackage that installs the default PHP MySQL module for your PHP version (in this case, PHP 8.1).

#### php8.1-mysql

This is the actual MySQL module for PHP 8.1, allowing PHP scripts to connect to and interact with MySQL databases.


Since I was moving to SQLite and no longer using MySQL, i could safely remove these packages to clean up my system:

```bash
sudo apt-get purge php-mysql php8.1-mysql
sudo apt-get autoremove --purge
```

## Logs 🪵🪵

SQLite itself does not have built-in logging like MySQL, but `tail -f /var/log/nginx/error.log` may show some relevant logs.

## 🧮 Filesystem 🔰

Before uninstall:

| Filesystem      | Size  | Used | Avail | Use% | Mounted on   |
|-----------------|-------|------|-------|------|--------------|
| tmpfs            | 96M   | 1.1M | 95M   | 2%   | /run          |
| /dev/vda1       | 25G   | 11G  | 14G   | 43%  | /             |
| tmpfs          | 479M  | 0    | 479M  | 0%   | /dev/shm      |
| tmpfs           | 5.0M  | 0    | 5.0M  | 0%   | /run/lock      |
| /dev/vda15      | 105M  | 6.1M | 99M   | 6%   | /boot/efi      |
| tmpfs           | 96M   | 4.0K | 96M   | 1%   | /run/user/0    |


After uninstall:

| Filesystem     | Size  | Used | Avail | Use% | Mounted on |
|----------------|-------|------|-------|------|-------------|
| tmpfs           | 96M   | 1.1M | 95M   | 2%   | /run         |
| /dev/vda1       | 25G   | 9.8G | 15G   | 41%  | /            |
| tmpfs          | 479M  | 0    | 479M  | 0%   | /dev/shm     |
| tmpfs           | 5.0M  | 0    | 5.0M  | 0%   | /run/lock     |
| /dev/vda15      | 105M  | 6.1M | 99M   | 6%   | /boot/efi     |
| tmpfs           | 96M   | 4.0K | 96M   | 1%   | /run/user/0   |

<br><br>

# 🛢️ Installing MySQL 🐘

### 🔐 Manually Install MySQL

Manually install MySQL using the following commands:

```bash
sudo apt update
sudo apt install mysql-server
```

After installation, start the MySQL service and enable it to start on boot:

```bash
sudo systemctl start mysql
sudo systemctl enable mysql
```

`mysql_secure_installation` will be run automatically during the installation process.

or:

### 🔐 Run the MySQL Installation as a Script 

Run the following as a script, e.g `setup_mysql.sh`:

```bash
#!/bin/bash

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
# add a col for which mixtape was reviewed
sudo mysql -u heavyweight -pdigiocean_db -D mixtape_reviews -e "
CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mixtape VARCHAR(100) NOT NULL,
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
sudo chmod 600 /var/www/mthw/config.php
sudo chown www-data:www-data /var/www/mthw/config.php

# Restart PHP and Nginx services to apply changes
sudo systemctl restart php8.1-fpm
sudo systemctl restart nginx

echo "MySQL and PHP configuration complete."
```


### Create a New Database and User 🙋‍♂️

Log in to MySQL as the root user:

```bash
sudo mysql -u root -p
```

I did not set a root password during the `mysql_secure_installation` process, so can **just hit enter** when prompted for the root user password. (Password can be found in `ftp/config.php`)

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

UPDATE reviews SET comments = 'Not quite my tempo 🥁' WHERE id = 14;
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