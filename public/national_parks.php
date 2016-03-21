<?php
require_once('park_seeder.php');

if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 1;
}
$limit = 4;
//determine $offset based on what page u're on
// page | offset | limit
//   1  |    0   | 4
//   2  |    4   | 4
//   3  |    8   | 4
//   4  |   12   | 4
$offset = ($page - 1) * 4;


?>
<DOCTYPE! html>
<html>
<head>
	<title>Natonal Parps</title>
	<link rel="stylesheet" type="text/css" href="/national_parks.css">
</head>
<body>
	<?php foreach ($national_parksArray as $key => $singlePark): ?>
		<h2 class="parklink">
			<a href="parks_show.php?park_id=<?= $singlePark['park_id'] ?>">
				<?= $singlePark['name'] . ' Natonal Parp'?>
			</a>
		</h2>
		<h3 class="location">
			<?= $singlePark['location']?>
		</h3>
	<?php endforeach; ?>

	<a href="?page=<?= $page + 1?>">Next Page</a>
</body>
</html>