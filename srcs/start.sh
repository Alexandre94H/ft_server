#mysql
service mysql start
mysql < init_db.sql
rm init_db.sql

#nginx
service php7.3-fpm start
service nginx start