<?php
define('DB_PASSWORD', 'vagrant');
define('DB_USER', 'vagrant');
/*the IP address constant*/
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'employees');

/*define constants BEFORE requiring a .php file that can't run without these constants!!!!!*/

require_once('db_connect.php');

echo 'connection check from pdo_test.php:' . PHP_EOL;
echo $connection->getAttribute(PDO::ATTR_CONNECTION_STATUS) . PHP_EOL;

$sql = <<<QUERY
	CREATE TABLE IF NOT EXISTS teams(
		team_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		name VARCHAR(100) NOT NULL,
		PRIMARY KEY(team_id)
	)
QUERY;
$connection->exec($sql);

echo "Table teams created" . PHP_EOL;

$insert = 'INSERT INTO teams (name) VALUES ("The Bubs")';
$connection->exec($insert);
$id = $connection->lastInsertId();
echo "\n1 row inserted with ID $id\n";