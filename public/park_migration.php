<?php
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASSWORD', 'parks_user');
define('DB_HOST', '127.0.0.1');

require_once('db_connect.php');

/*verify connection*/
echo 'connection check for ' . DB_USER . ' to database ' . DB_NAME . PHP_EOL;
echo $connection->getAttribute(PDO::ATTR_CONNECTION_STATUS) . PHP_EOL;

/*use exec() to DROP TABLE IF EXISTS national_parks*/
$dropTable = <<<QUERY
	DROP TABLE IF EXISTS national_parks
QUERY;
$connection->exec($dropTable);

/*use exec() to CREATE national_parks*/
$createTable = <<<QUERY
	CREATE TABLE national_parks(
		park_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		name VARCHAR(100) NOT NULL,
		location VARCHAR(100) NOT NULL,
		date_est YEAR(4) NOT NULL,
		acreage DOUBLE NOT NULL,
		PRIMARY KEY(park_id)
		)
QUERY;

$connection->exec($createTable);
