#!/bin/sh

apk --update add mariadb #mariadb-client
chown -R mysql:mysql /var/lib/mysql
mysql_install_db --user=mysql #--datadir=/var/lib/mysql
mkdir /run/mysqld
chown -R mysql:mysql /run/mysqld
mysqld --user=mysql --datadir=/var/lib/mysql --socket=/run/mysqld/mysqld.sock
