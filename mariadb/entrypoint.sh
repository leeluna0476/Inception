#!/bin/sh

mysqld --user=mysql --datadir=/var/lib/mysql --socket=/run/mysqld/mysqld.sock &

while ! mysqladmin ping -h localhost --silent; do
    sleep 1
done

mysql -u root <<EOF
SET PASSWORD FOR 'root'@'localhost' = PASSWORD('$MYSQL_ROOT_PASSWORD');
DELETE FROM mysql.user WHERE User='';
DROP DATABASE IF EXISTS test;
EOF

mysql -u root -p"$MYSQL_ROOT_PASSWORD" <<EOF
CREATE USER IF NOT EXISTS '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';
CREATE DATABASE $MYSQL_DATABASE;
GRANT ALL PRIVILEGES ON $MYSQL_DATABASE.* TO '$MYSQL_USER'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;
EOF

wait
