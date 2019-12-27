FROM debian:buster
RUN apt update && apt upgrade -y
RUN apt install -y supervisor nginx php-fpm php-mysql mariadb-server
RUN mkdir -p /var/log/supervisor /run/php /run/mysqld
RUN chown mysql:mysql /run/mysqld
COPY srcs/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

COPY srcs/nginx-site.conf /etc/nginx/sites-available/localhost
RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost

RUN mkdir -p /var/www/localhost
COPY srcs/wp.tgz /tmp/wp.tgz
RUN tar -xzvf /tmp/wp.tgz -C /var/www/localhost
COPY srcs/wp-config.php /var/www/localhost/wp-config.php
RUN chown -R www-data:www-data /var/www/localhost

COPY srcs/wordpress.sql /tmp/wordpress.sql
COPY srcs/setup_sql.sh /tmp/setup_sql.sh
RUN sh /tmp/setup_sql.sh

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
