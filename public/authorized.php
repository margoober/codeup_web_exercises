<?PHP
session_start();
$margoober = "margoober";
$username = (isset($_SESSION['LOGGED_IN_USER'])) ? $_SESSION['LOGGED_IN_USER'] : '';

if (! isset($_SESSION['LOGGED_IN_USER']) || $_SESSION['LOGGED_IN_USER'] == '') {
	header('Location: /login.php');
	die();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
	<link rel="stylesheet" type="text/css" href="sessions.css">
</head>
<body>
	<h1>AUTHORZIZED</h1>
	<h2>Welcome, <?= $username ?>! We're are so glad, you logged in!</h2>
	<a href="/logout.php">Log Gout</a>
	<br>
	<img src="http://38.media.tumblr.com/02f803f1c9bf9e685877500ef6e8f2a4/tumblr_nx42hiBThV1tk4cpdo1_250.gif">
	<img src="http://38.media.tumblr.com/02f803f1c9bf9e685877500ef6e8f2a4/tumblr_nx42hiBThV1tk4cpdo1_250.gif">
		<img src="http://38.media.tumblr.com/02f803f1c9bf9e685877500ef6e8f2a4/tumblr_nx42hiBThV1tk4cpdo1_250.gif">
</body>
</html>