FROM alpine:3.20

RUN apk --update add mariadb mariadb-client; \
	chown -R mysql:mysql /var/lib/mysql; \
	mysql_install_db --user=mysql --datadir=/var/lib/mysql; \
	mkdir /run/mysqld; \
	chown -R mysql:mysql /run/mysqld;

COPY my.cnf /etc/my.cnf
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh
CMD [ "/usr/local/bin/entrypoint.sh" ]
