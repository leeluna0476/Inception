-- set root password (if not already set)
SET PASSWORD FOR 'root'@'localhost' = PASSWORD('$MYSQL_ROOT_PASSWORD');

-- remove anonymous users
DELETE FROM mysql.user WHERE User='';

-- remove test database and access to it
DROP DATABASE IF EXISTS test;

-- apply changes
FLUSH PRIVILEGES;
