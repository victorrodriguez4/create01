#update linux box and making sure it's up to date
sudo apt-get update
sudo apt-get upgrade -y

#install usful tools
sudo apt-get install -y software-properties-common
sudo apt-get install -y python-software-properties
sudo apt-get install -y zip unzip
sudo apt-get install -y curl
sudo apt-get install -y build-essential
sudo apt-get install -y vim

#install Mysql
debconf-set-selections <<< "mysql-server mysql-server/root_password password root"
debconf-set-selections <<< "mysql-server mysql-server/root_password_again password root"
sudo apt-get install mysql-server mysql-client -y

#install Apache
sudo apt-get install apache2 -y

# setup apache to run as vagrant
sudo sed -i 's_www-data_vagrant_' /etc/apache2/envvars

#install php 5
sudo apt-get install -y php5 libapache2-mod-php5 php5-mcrypt php5-curl php5-mysql php5-xdebug php5-gd

#install mod_rewrite
sudo a2enmod rewrite

#restart apache server
sudo service apache2 restart

sudo sed -i "/VirtualHost/a <Directory /var/www/html/> \n Options Indexes FollowSymLinks MultiViews \n AllowOverride All \n Order allow,deny \n  allow from all \n </Directory>" /etc/apache2/sites-available/000-default.conf

#remove default html location and create symlink
sudo rm -rf /var/www/html
sudo ln -fs /vagrant /var/www/html

#restart
sudo service apache2 restart

#install phpMyAdmin
debconf-set-selections <<< "phpmyadmin phpmyadmin/internal/skip-preseed boolean true"
debconf-set-selections <<< "phpmyadmin phpmyadmin/reconfigure-webserver multiselect"
debconf-set-selections <<< "phpmyadmin phpmyadmin/dbconfig-install boolean false"
sudo apt-get install phpmyadmin -y

#setup access to phpmyadmin
sudo echo "Include /etc/phpmyadmin/apache.conf" >> /etc/apache2/apache2.conf

#restart apache server
sudo service apache2 restart

#download and unzip wordpress
wget http://wordpress.org/latest.tar.gz
tar xfz latest.tar.gz

#move wordpress files and delete tarball
mv wordpress/* /vagrant
rm latest.tar.gz

#setup the wordpress database
sudo mysql -u root -proot -e "create database wordpress;"
sudo mysql -u root -proot -e "grant usage on *.*  to wordpress@localhost identified by 'password';"
sudo mysql -u root -proot -e "grant all privileges on wordpress.* to wordpress@localhost;"
sudo mysql -u root -proot -e "use wordpress"

#setup apache to run as vagrant
sudo sed -i 's_www-data_vagrant_' /etc/apache2/envvars

#restart apache server
sudo service apache2 restart
