CREATE DATABASE wordpress;
CREATE USER 'wordpress'@'localhost' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON 'wordpress'.* TO 'wordpress'@'localhost';
FLUSH PRIVILEGES;
