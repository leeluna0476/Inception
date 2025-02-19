FROM alpine:3.20

COPY wp-config.php /tmp/wp-config.php
COPY healthcheck.php /tmp/healthcheck.php

RUN apk --update add \
  php83 php83-fpm php83-mysqli php83-json php83-session \
  php83-curl php83-gd php83-xml php83-mbstring php83-zip \
  php83-openssl php83-tokenizer php83-fileinfo php83-common \
  php-phar curl mariadb-client

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp

COPY www.conf /etc/php83/php-fpm.d/www.conf

COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh
CMD [ "/usr/local/bin/entrypoint.sh" ]
