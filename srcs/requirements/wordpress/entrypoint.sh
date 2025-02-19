#!/bin/sh

if [ ! -f /var/www/wordpress/*.php ]; then
	mkdir /var/www
	sed -i 's/^memory_limit = .*/memory_limit = 256M/' /etc/php83/php.ini
	wp core download --path=/var/www/wordpress
	cd /var/www/wordpress

	wp config create --dbname=$MYSQL_DATABASE --dbuser=$MYSQL_USER --dbpass=$MYSQL_PASSWORD --dbhost=$MYSQL_HOSTNAME

	wp core install --url=seojilee.42.fr --title="inception" --admin_user=$WP_ADMIN --admin_password=$WP_ADMIN_PASSWORD --admin_email=$WP_ADMIN_EMAIL
	wp user create $WP_USER $WP_EMAIL --role=author --user_pass=$WP_PASSWORD
fi

cp /tmp/healthcheck.php /var/www/wordpress/healthcheck.php

sed -i 's/^variables_order = .*/variables_order = "EGPCS"/' /etc/php83/php.ini

php-fpm83 -F
