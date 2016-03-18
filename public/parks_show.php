<?php
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASSWORD', 'parks_user');
define('DB_HOST', '127.0.0.1');

require_once('db_connect.php');

if (isset($_GET['park_id'])) {
	
	$id = $_GET['park_id'];
	
	$stmt = $connection->query("SELECT * FROM national_parks WHERE park_id = $id");

	$park = $stmt->fetch(PDO::FETCH_ASSOC);

}

?>

<DOCTYPE! HTML>
<html>
<head>
	<title>National Parp Info</title>
	<link rel="stylesheet" type="text/css" href="/national_parks.css">
</head>
<body>
	<h2>
		Have a Visit of Natural Parp Called <?= $park['name']?>
	</h2>
	<h3>
		This Parp is <?= $park['acreage']?> of ACRES!
	</h3>

	<table style="">
		<tr>
			<td>
				<div class="parkImage" id="<?= str_replace(' ', '-', $park['name']) ?>Image">
				</div>
			</td>
		</tr>
	</table>
	<h2>
		About <?= $park['name'] ?> Napinal Praps
	</h2>
	<h3>
	</h3>

</body>
</html>