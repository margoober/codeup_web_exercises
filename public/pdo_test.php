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