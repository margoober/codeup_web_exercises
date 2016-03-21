<?php
require_once('db_constants.php');

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
		description VARCHAR(500),
		PRIMARY KEY(park_id)
		)
QUERY;

$connection->exec($createTable);
