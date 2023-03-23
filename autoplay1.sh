#!/bin/bash
 aeh
sudo apt update
sudo apt install php php-xml php-fpm libapache2-mod-php php-mysql php-gd php-imap php-curl php-mbstring mariadb-server -y
sudo service apache2 start
sudo sevice mysql start

cat << CD
============================================================================================
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
Please type a commands to create database and exit:
create database aeh;
exit;
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
============================================================================================
CD
sudo mysql

cd /tmp
git clone https://github.com/cyber468/injct.git
cat << setup
********************************************************************************************============================================================================================
Setup a Password and Remember
Enter Yes to All
Finally Change the password 
change the connection localhost = localhost
change the 'password' to your password
change the 'newuser' to your username
change the database name to aeh
============================================================================================********************************************************************************************
setup
sudo mysql_secure_installation
cd injct/injct
sudo mysql -u root  -p aeh < maindb.sql
cd ..
sudo mv injct /var/www/html/injct
cd /var/www/html
sudo chmod 777 injct
cd injct
sudo nano login.php
sudo nano home.php
sudo nano register.php
echo "Successfully Completed"
echo "Copy And Paste the URL: http://localhost/injct/login.php"
