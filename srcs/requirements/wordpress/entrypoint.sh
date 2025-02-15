#!/bin/sh

if [ ! -f /var/lib/www/wordpress/ ]; then
#	cd /var/lib/www
	curl https://wordpress.org/latest.tar.gz -o /var/lib/www/latest.tar.gz && \
	tar -xzf /var/lib/www/latest.tar.gz -C /var/lib/www && \
	rm /var/lib/www/latest.tar.gz &&
	mv /tmp/wp-config.php /var/lib/www/wordpress/
fi

php-fpm83 -F
