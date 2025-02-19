#!/bin/sh

openssl req -x509 -newkey rsa:4096 -keyout /etc/nginx/key.pem -out /etc/nginx/cert.pem -days 365 -nodes -subj "/O=42/CN=seojilee.42.fr/emailAddress=seojilee@student.42seoul.kr"
chown -R www:www /var/www
nginx
