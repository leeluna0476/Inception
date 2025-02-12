#!/bin/sh

apk update
apk add nginx

# -D: do not assign password
# -g: GECOS field
## adduser -g "Full Name" username
adduser -D -g 'www' www

# -R: Recursively
## chown -R user:group file
chown -R www:www /var/lib/nginx
