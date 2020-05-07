#init parameter
FROM debian:buster
LABEL maintainer="ahallain@student.42.fr"

#expose port
EXPOSE 80
EXPOSE 443

#install packets
RUN apt update
RUN apt install -y nginx mariadb-server wget php7.3 php7.3-fpm php7.3-mysql php7.3-mbstring zip

#creating ssl certificate
RUN mkdir /etc/nginx/ssl
RUN openssl req -new -x509 -days 365 -nodes -out /etc/nginx/ssl/wordpress.pem -keyout /etc/nginx/ssl/wordpress.key -subj "/C=US/ST=Utah/L=Lehi/O=Your Company, Inc./OU=IT/CN=yourdomain.com"

#init wordpress
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -zxf latest.tar.gz
RUN rm latest.tar.gz
RUN rm -rf /var/www/html/*
RUN mv wordpress /var/www/html/.
ADD srcs/wp-config.php /var/www/html/wordpress/.
RUN rm /etc/nginx/sites-enabled/default
ADD srcs/wordpress /etc/nginx/sites-enabled/.

#init phpmyadmin
RUN wget $(wget https://www.phpmyadmin.net/home_page/version.txt -q -O- | tail -1)
RUN unzip -q phpMyAdmin-*-all-languages.zip
RUN rm phpMyAdmin-*-all-languages.zip
RUN mv phpMyAdmin-*-all-languages /var/www/html/phpmyadmin
RUN mkdir /var/www/html/phpmyadmin/tmp
RUN chmod 777 /var/www/html/phpmyadmin/tmp

#start nginx
RUN service php7.3-fpm start
RUN service nginx start

#start all
ADD srcs/init_db.sql .
ADD srcs/start.sh .
CMD chmod u+x start.sh && ./start.sh && tail -f /dev/null