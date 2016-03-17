<?php
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASSWORD', 'parks_user');
define('DB_HOST', '127.0.0.1');

require_once('db_connect.php');

/*verify connection*/
echo 'connection check for ' . DB_USER . ' to database ' . DB_NAME . PHP_EOL;
echo $connection->getAttribute(PDO::ATTR_CONNECTION_STATUS) . PHP_EOL;