FROM debian:buster
RUN apt update && apt upgrade -y && \
	apt install -y supervisor nginx php-fpm php-mysql mariadb-server && \
	mkdir -p /var/log/supervisor /run/php /run/mysqld && \
	chown mysql:mysql /run/mysqld
COPY srcs/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

COPY srcs/nginx-site.conf /etc/nginx/sites-available/localhost
COPY srcs/autoindex.conf /etc/nginx/snippets/autoindex.conf
RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost

COPY srcs/wp.tgz /tmp/wp.tgz
COPY srcs/pma.tgz /tmp/pma.tgz
RUN mkdir -p /var/www/localhost /var/www/localhost/pma && \
	tar -xzvf /tmp/wp.tgz -C /var/www/localhost && \
	tar -xzvf /tmp/pma.tgz -C /var/www/localhost/pma
COPY srcs/wp-config.php /var/www/localhost/wp-config.php
RUN chown -R www-data:www-data /var/www/localhost

COPY srcs/wordpress.sql /tmp/wordpress.sql
COPY srcs/setup_sql.sh /tmp/setup_sql.sh
COPY srcs/localhost.key /etc/nginx/localhost.key
COPY srcs/localhost.crt /etc/nginx/localhost.crt
RUN sh /tmp/setup_sql.sh

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
