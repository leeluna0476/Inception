FROM alpine:3.20

#write .env and read it in docker compose
#ENV \
#	MYSQL_USER= \
#	MYSQL_DATABASE= \
#	MYSQL_PASSWORD= \
#	MYSQL_ROOT_PASSWORD=

RUN apk --update add mariadb mariadb-client; \
	chown -R mysql:mysql /var/lib/mysql; \
	mysql_install_db --user=mysql --datadir=/var/lib/mysql; \
	mkdir /run/mysqld; \
	chown -R mysql:mysql /run/mysqld;

COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh
CMD [ "/usr/local/bin/entrypoint.sh" ]
