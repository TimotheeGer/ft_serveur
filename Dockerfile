FROM debian:buster
#auto-index on/off
ENV AUTOINDEX on
#install
RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install wget -y
RUN apt-get install nginx -y
RUN apt-get install openssl -y
RUN apt-get install php7.3 php-mysql php-fpm php-cli php-mbstring -y
RUN apt-get install mariadb-server mariadb-client -y
#nginx->config
COPY ./srcs/nginx.conf /etc/nginx/sites-available/localhost
RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost
RUN rm -rf /var/www/html/index.nginx-debian.html
#ssl->key
RUN mkdir /etc/nginx/certif-ssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=FR/ST=75017/L=Paris/O=42/CN=tigerber' \
 -keyout /etc/nginx/certif-ssl/localhost.key -out /etc/nginx/certif-ssl/localhost.pem
#phpmyadmin
WORKDIR /var/www/html/
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
RUN tar xf phpMyAdmin-4.9.0.1-all-languages.tar.gz
RUN rm -rf phpMyAdmin-4.9.0.1-all-languages.tar.gz
RUN mv phpMyAdmin-4.9.0.1-all-languages phpmyadmin
COPY ./srcs/config.inc.php phpmyadmin
#wordpress
WORKDIR /var/www/html/
RUN wget https://wordpress.org/latest.tar.gz
RUN tar xzvf latest.tar.gz && rm -rf latest.tar.gz
COPY ./srcs/wp-config.php wordpress
COPY ./srcs/wordpress.sql /var/
COPY ./srcs/twentyseventeen /var/www/html/wordpress/wp-content/themes/twentyseventeen
RUN chmod 755 -R wordpress
#mysql->config
COPY ./srcs/mysql_setup.sql /var/
RUN service mysql start && mysql -u root mysql < /var/mysql_setup.sql
RUN service mysql start && mysql wordpress -u root --password=admin < /var/wordpress.sql
#droit
RUN chown -R www-data:www-data *
RUN chmod 755 -R *
#start
COPY ./srcs/start.sh /var/
COPY ./srcs/change_autoindex.sh /var/
COPY ./srcs/nginx_off.conf /var/
WORKDIR /var/
CMD bash /var/start.sh
EXPOSE 80 443