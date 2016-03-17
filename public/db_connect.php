<?php
/*MUST CONNECT TO MySQL FROM VAGRANT SSH*/

$connection = new PDO(
	'mysql:host=' . DB_HOST . ';dbname=' .DB_NAME,
	DB_USER,
	DB_PASSWORD
);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


/*tells you status of connection*/
echo 'connection check from db_connect.php' . PHP_EOL;
echo $connection->getAttribute(PDO::ATTR_CONNECTION_STATUS) . PHP_EOL;