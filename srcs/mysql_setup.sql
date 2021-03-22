CREATE DATABASE wordpress;

CREATE USER 'admin' IDENTIFIED BY 'admin';
GRANT USAGE ON wordpress.* TO 'admin'@'localhost' IDENTIFIED BY 'admin';
GRANT ALL PRIVILEGES ON wordpress.* TO 'admin'@'localhost';
FLUSH PRIVILEGES;