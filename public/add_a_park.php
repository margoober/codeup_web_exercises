<?php

//requite the inputs class file here
require_once 'Input.php';

var_dump($_POST);

//Input::has/Input::get conditionals, prepare statements to push to parks_db on:
//!!! national_parks.php !!!

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add a Park</title>
	<link rel="stylesheet" type="text/css" href="/parks_stylesheet.css">
</head>
<!DOCTYPE HTML>
<html>
<body>

<form method="POST" action="national_parks.php">
	<label for="nameSubmit">Park Name</label>
	<input type="text" name="nameSubmit" id="nameSubmit">
	<br><br>
	<label for="stateSubmit">State</label>
	<input type="text" name="stateSubmit" id="stateSubmit">
	<br><br>
	<label for="date_estSubmit">Year founded</label>
	<input type="text" name="date_estSubmit" id="date_estSubmit">
	<br><br>
	<label for="acreageSubmit">Acreage</label>
	<input type="text" name="acreageSubmit" id="acreageSubmit">
	<br><br>
	<label for="descriptionSubmit">A short description</label>
	<input type="text" name="descriptionSubmit" id="descriptionSubmit">
	<br><br>
	<button type="submit">Add Park!</button>
</form>

</body>
</html>