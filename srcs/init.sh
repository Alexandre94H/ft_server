#change path
cd ~/.

#install packets
apt update
apt install -y nginx mariadb-server wget php7.3 php7.3-fpm php7.3-mysql php7.3-mbstring zip

#creating ssl certificate
mkdir /etc/nginx/ssl
openssl req -new -x509 -days 365 -nodes -out /etc/nginx/ssl/wordpress.pem -keyout /etc/nginx/ssl/wordpress.key -subj "/C=US/ST=Utah/L=Lehi/O=Your Company, Inc./OU=IT/CN=yourdomain.com"

#init database
service mysql start
mysql < srcs/init_db.sql

#init wordpress
wget https://wordpress.org/latest.tar.gz
tar -zxvf latest.tar.gz
cp -r wordpress /var/www/.
cp srcs/wp-config.php /var/www/wordpress/.
rm /etc/nginx/sites-enabled/default
cp -r srcs/wordpress /etc/nginx/sites-enabled/.

#init phpmyadmin
wget $(wget https://www.phpmyadmin.net/home_page/version.txt -q -O- | tail -1)
unzip phpMyAdmin-*-all-languages.zip
cp -r phpMyAdmin-*-all-languages /var/www/wordpress/phpmyadmin
mkdir /var/www/wordpress/phpmyadmin/tmp
ls -la /var/www/wordpress/phpmyadmin/tmp
chmod 777 /var/www/wordpress/phpmyadmin/tmp

#start nginx
rm -rf srcs
service php7.3-fpm start
service nginx start
