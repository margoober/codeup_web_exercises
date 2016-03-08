<?php
session_start();
var_dump($_SESSION);
$_SESSION['isLoggedIn'] = true;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sessions</title>
</head>
<body>
</body>
</html>