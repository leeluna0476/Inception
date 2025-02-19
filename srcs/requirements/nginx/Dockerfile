FROM alpine:3.20

RUN apk --update add nginx openssl
RUN adduser -D -g 'www' www
RUN chown -R www:www /var/lib/nginx

COPY nginx.conf /etc/nginx
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh
CMD [ "/usr/local/bin/entrypoint.sh" ]
