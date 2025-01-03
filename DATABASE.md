# MTHW Database

## Local testing

Start the PHP server:
bash
Copy code
php -S localhost:8000


The task was to repalce the memory-hungry mysql db with a lightweight sqlite3 db.

### Useful Commands

```bash
tail -f /var/log/nginx/error.log
systemctl reload nginx
systemctl restart php8.1-fpm
```

### sqlite3 cmds from the terminal

```bash
sqlite3 /var/www/mthw/database.db "SELECT * FROM reviews;"
sqlite3 /var/www/mthw/database.db "INSERT INTO reviews (mixtape, stars, comments) VALUES ('Noodles', 2, 'Fire 50');"
sqlite3 /var/www/mthw/database.db "INSERT INTO reviews (stars, comments) VALUES (5, 'Done Mguuy');"
```

A big issue was that I could write INSERT statements to the new sqlitedb from the terminal (as root user), but not from the web form on mthw.

### www-data user

The www-data user is commonly used by web servers like Nginx. To switch to the www-data user:

```sh
sudo -u www-data -s
```

(I think) it was necessary to chown the mthw directory to the www-data user, as well as the database.

```bash
chmod 666 /var/www/mthw/database.db
chmod 775 /var/www/mthw
chown www-data:www-data /var/www/mthw

# Results in:
drwxr-xr-x 10 www-data www-data 12288 Jan  2 16:15 mthw/
-rw-rw-rw-  1 www-data www-data  12288 Jan  2 16:15 database.db
```

# sqlite3

Suitable for small to medium-sized applications with limited concurrent access and smaller datasets. Some advanced database features found in MySQL, such as stored procedures, advanced indexing, and user permissions, are not available in SQLite.

## Install SQLite

```bash
sudo apt-get install sqlite3
```

### Create the Database and Tables

Open a terminal and run the following commands:

```bash
sqlite3 /var/www/mthw/database.db
```

This command will create a new SQLite database file (if it doesn't already exist) and open the SQLite command-line interface. You can name your SQLite database file anything you like, as long as it has the .sqlite or .db extension.

Inside the SQLite command-line interface, create the reviews table with the following SQL commands:

```sql
CREATE TABLE reviews_table (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    mixtape TEXT NOT NULL,
    stars INTEGER NOT NULL,
    comments TEXT NOT NULL,
    date DATETIME DEFAULT CURRENT_TIMESTAMP
);
```

- Within a single SQLite database file, you can list all the tables:

```sql
SELECT name FROM sqlite_master WHERE type='table';
```

- To insert data into the reviews table, you can use the following SQL command:

```sql
INSERT INTO reviews (mixtape, stars, comments) VALUES ('Noodles', 2, 'Fire 50');
```

- To retrieve data from the reviews table, you can use the following SQL command:

```sql
SELECT * FROM reviews;
```

- To list the information about the reviews table, you can use the following command:

```sql
PRAGMA table_info(reviews);
```

- To exit the SQLite command-line interface, you can use the following command:

```sql
.exit
```

## SQLite Modules

Run the following command to list all PHP modules currently installed:

```bash
php -m | grep sqlite

# If the SQLite modules are installed, you should see output like:
pdo_sqlite
sqlite3
```

If you don’t see pdo_sqlite or sqlite3, install them using:

```bash
sudo apt-get install php-pdo
```

## Config.php
Update your config.php to include the path to your SQLite database file. For example:

```php
<?php
return [
    'reviews' => '/var/www/mthw/database.db'
];
?>
```

#### old mysql Config.php

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

# mysql

Originally I installed mysql-server on linux.

```bash
mysql -V
mysql  Ver 8.0.40-0ubuntu0.22.04.1 for Linux on x86_64 ((Ubuntu))
```


```bash
df -h
```



`top` revealed the mysqld process was using approximately 312,276 KB (or about 312 MB) of memory, which accounts for about 31.9% of the system's memory.

There were suggestions on how to change the memory limit in the config file. Of all the files called `mysqld.cnf, my.cnf, my.cnf.fallback, mysql.cnf, mysql.conf.d/` or similar, the one that contained the configuration was `/etc/mysql/mysql.conf.d/mysql.cnf`. Here it is:

```bash
#
# The MySQL database client configuration file
#
# Ref to https://dev.mysql.com/doc/refman/en/mysql-command-options.html

[mysql]
root@followCrom:/etc/mysql/mysql.conf.d# cat mysqld.cnf
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

[mysqld]
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


root@followCrom:~# cat .my.cnf
[client]
user = heavyweight
password = mthw_password

root@followCrom:~# cat .mysql_history
_HiStOrY_V2_
SHOW\040DATABASES;
USE\040mixtape_reviews;
SHOW\040TABLES;
SELECT\040*\040FROM\040reviews;
EXIT;
USE\040mixtape_reviews;
SELECT\040*\040FROM\040reviews;
DELETE\040FROM\040reviews\040WHERE\040id\040IN\040(2,\0403,\0404);
SELECT\040*\040FROM\040reviews;
FLUSH\040PRIVILEGES;
EXIT;
SHOW\040DATABASES;
USE\040mixtape_reviews;
SHOW\040TABLES;
SELECT\040*\040FROM\040reviews;
FLUSH\040PRIVILEGES;
GRANT\040RELOAD\040ON\040*.*\040TO\040'heavyweight'@'localhost';
exit;
GRANT\040RELOAD\040ON\040*.*\040TO\040'heavyweight'@'localhost';
FLUSH\040PRIVILEGES;
SHOW\040GRANTS\040FOR\040'heavyweight'@'localhost';
EXIT;
USE\040mixtape_reviews;
SELECT\040*\040FROM\040reviews;
exit;
USE\040mixtape_reviews;
SELECT\040*\040FROM\040reviews;
EXIT;
USE\040mixtape_reviews;
SELECT\040*\040FROM\040reviews;
UPDATE\040reviews\040SET\040comments\040=\040'Not\040quite\040my\040tempo\040🥁'\040WHERE\040id\040=\04014;
SELECT\040*\040FROM\040reviews;
EXIT;
exit;
SHOW\040DATABASES;
USE\040mixtape_reviews;
SELECT\040*\040FROM\040reviews;
OPTIMIZE\040TABLE\040reviews;
exit;
root@followCrom:~#
```

## Backup mysql reviews table

Log in to MySQL as the root user:

```bash
sudo mysql -u root -p
```

```sql
SHOW DATABASES;

USE your_database_name;
```

Export Tables as CSV

```sql
SELECT * FROM reviews
INTO OUTFILE '/var/lib/mysql-files/old_reviews.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n';
```

### Make sure the MySQL server has write permissions to the directory

The ERROR 1290 (HY000) indicates that your MySQL server is running with the --secure-file-priv option enabled, which restricts the location where files can be read or written by MySQL.

Here’s how you can resolve this issue:

Step 1: Check the Current secure-file-priv Setting

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

If the value is NULL, it means file import/export is disabled.

Step 2: Use the Allowed Directory

If the secure_file_priv variable specifies a directory (e.g., /var/lib/mysql-files/), modify your query to save the CSV file there:

```sql
SELECT * FROM reviews
INTO OUTFILE '/var/lib/mysql-files/old_reviews.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n';
```

Step 4: Exit MySQL

```sql
EXIT;
```

Then, move the file to your desired location using sudo:

```bash
sudo mv /var/lib/mysql-files/old_reviews.csv /var/www/mthw/old_reviews/
```


# Remove MySQL

To remove MySQL 8.0.40-0ubuntu0.22.04.1 from your Ubuntu system, follow these steps:

Stop MySQL Service:

```bash
systemctl stop mysql
```

Uninstall MySQL Packages:

```bash
sudo apt purge mysql-server mysql-client
sudo apt autoremove
sudo apt autoclean
```

After this operation, 195 MB disk space will be freed.


Remove MySQL Configuration and Data Files:

```bash
rm -rf /etc/mysql
rm -rf /var/lib/mysql

# To remove any MySQL logs:
rm -rf /var/log/mysql*
```


Verify Removal

This command will list any remaining MySQL packages. If there are none, MySQL has been successfully removed.

```bash
dpkg -l | grep -i mysql
```

If any packages still show up, remove them manually with sudo apt remove <package-name>.

In my case, the below remained. These are typically used to enable PHP to interact with MySQL databases.

Details:
php-mysql:

This is a metapackage that installs the default PHP MySQL module for your PHP version (in this case, PHP 8.1).
php8.1-mysql:

This is the actual MySQL module for PHP 8.1, allowing PHP scripts to connect to and interact with MySQL databases.


Since you are moving to SQLite and no longer using MySQL, you can safely remove these packages to clean up your system.

Uninstall Instructions:
To remove these packages, use the following commands:

```bash
sudo apt-get purge php-mysql php8.1-mysql
sudo apt-get autoremove --purge
```

#### Logs

SQLite itself does not have built-in logging like MySQL.

#### Filesystem

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