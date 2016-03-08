<?PHP
session_start(); //always at the top!
require 'functions.php';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$realUsername = "margoober";
$realPassword = "beanbrain";

//first tells me that they are logged in already and don't need to be here
if (isset($_SESSION['LOGGED_IN_USER']) && $_SESSION['LOGGED_IN_USER'] != '') {
	header('Location: /authorized.php');
	die();	
} else if ($username == $realUsername && $password ==$realPassword) {
	//create a session key, save the value as username
	$_SESSION['LOGGED_IN_USER'] = $username;
	header('Location: /authorized.php');
	die();
} else if ($username != "" || $password != "") {
	echo "WRONG!";
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="sessions.css">
</head>
<body>
	<h2>Enter My World Wide Web Site!</h2>
	<form method="POST">
		<label for="username">Username</label>
		<input id="username" type="text" name="username">
		<br>
		<br>
		<label>Pissword</label>
		<input id="password" type="password" name="password">
		<br>
		<br>
		<input type="submit">
		<br>
		<img id="skellies" src="http://49.media.tumblr.com/a1abe0e85a5b010ab9b2d77ee785a2ae/tumblr_morqcrRb9z1swgfzvo1_400.gif">
	</form>
</body>
</html>