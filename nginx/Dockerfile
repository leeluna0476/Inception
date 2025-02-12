FROM alpine:3.20

RUN apk --update add nginx; \
	adduser -D -g 'www' www; \
	chown -R www:www /var/lib/nginx \

COPY nginx.conf /etc/nginx

RUN mkdir /www
COPY index.html /www
RUN chown -R www:www /www

CMD [ "nginx", "-g", "daemon off;" ]
