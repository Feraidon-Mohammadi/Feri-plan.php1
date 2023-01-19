# Privileges for ``@`%`


# Privileges for `feri@gmail.com`@`localhost`

GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, FILE, INDEX, ALTER, CREATE TEMPORARY TABLES, EXECUTE, CREATE VIEW, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, EVENT, TRIGGER ON *.* TO `feri@gmail.com`@`localhost`;

GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER, CREATE TEMPORARY TABLES, EXECUTE, CREATE VIEW, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, EVENT, TRIGGER ON `blog`.* TO `feri@gmail.com`@`localhost`;

GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER, CREATE TEMPORARY TABLES, EXECUTE, CREATE VIEW, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, EVENT, TRIGGER ON `hotel`.* TO `feri@gmail.com`@`localhost`;


# Privileges for `php-user`@`localhost`

GRANT ALL PRIVILEGES ON *.* TO `php-user`@`localhost` IDENTIFIED BY PASSWORD '*7BFDC3E2F923C427C6FB8DA96CC3E74DBC024D64' WITH GRANT OPTION;


# Privileges for `pma`@`localhost`

GRANT USAGE ON *.* TO `pma`@`localhost`;

GRANT SELECT, INSERT, UPDATE, DELETE ON `phpmyadmin`.* TO `pma`@`localhost`;

GRANT ALL PRIVILEGES ON `blog`.* TO `pma`@`localhost` WITH GRANT OPTION;


# Privileges for `root`@`127.0.0.1`

GRANT ALL PRIVILEGES ON *.* TO `root`@`127.0.0.1` WITH GRANT OPTION;


# Privileges for `root`@`::1`

GRANT ALL PRIVILEGES ON *.* TO `root`@`::1` WITH GRANT OPTION;


# Privileges for `root`@`localhost`

GRANT ALL PRIVILEGES ON *.* TO `root`@`localhost` WITH GRANT OPTION;

GRANT PROXY ON ''@'%' TO 'root'@'localhost' WITH GRANT OPTION;