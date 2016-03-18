<?php
require_once('park_seeder.php');
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
</body>
</html>