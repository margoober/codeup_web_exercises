USE codeup_test_db;

DROP TABLE IF EXISTS albums;

CREATE TABLE users (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	first_name CHAR (100) NOT NULL,
	last_name CHAR (100) NOT NULL,
	email CHAR (100) NOT NULL,
	password CHAR (100) NOT NULL,
	PRIMARY KEY (id)
);