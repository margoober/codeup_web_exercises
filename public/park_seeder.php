<?php

define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASSWORD', 'parks_user');
define('DB_HOST', '127.0.0.1');

require_once('db_connect.php');

<<<QUERY
TRUNCATE national_parks;
QUERY;

$insertion = <<<QUERY
INSERT INTO national_parks
(name, location, date_est, acreage)
VALUES
(
	'Big Bend',
	'Texas',
	'1944',
	801163.21
),
(
	'Joshua Tree',
	'California',
	'1994',
	789745.47
),
(
	'Black Canyon of the Gunnison',
	'Colorado',
	'1999',
	32950.03
),
(
	'Crater Lake',
	'Oregon',
	'1902',
	183224.05
),
(
	'Great Sand Dunes',
	'Colorado',
	'2004',
	42983.74
),
(
	'Olympic',
	'Washington',
	'1938',
	3243872
),
(
	'Isle Royale',
	'Michigan',
	'1940',
	571790
),
(
	'Denali',
	'Alaska',
	'1917',
	4740911.72
),
(
	'Dry Tortugas',
	'Florida',
	'1992',
	64701
),
(
	'Guadelupe Mountains',
	'Texas',
	'1966',
	166868
)
QUERY;
echo "before exec insertion" . PHP_EOL;
$connection->exec($insertion);
echo "after exec insertion" . PHP_EOL;
