<?php
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASSWORD', 'parks_user');
define('DB_HOST', '127.0.0.1');

require_once('db_connect.php');
if (isset($_GET['page'])) {
	$page = $_GET['page'];
	if ($page < 1) {
		$page = 1;
	}
} else {
	$page = 1;
}
$limit = 4;
$offset = ($page - 1) * 4;
$stmt = $connection->prepare("SELECT * FROM national_parks LIMIT :limit OFFSET :offset");

$national_parksArray = ($connection->query("SELECT * FROM national_parks LIMIT $limit OFFSET $offset")->fetchAll(PDO::FETCH_ASSOC));

?>
<DOCTYPE! html>
<html>
<head>
	<title>Natonal Parps</title>
	<link rel="stylesheet" type="text/css" href="/parks_stylesheet.css">
</head>
<body>
	<div id="navvie">
		<ul class="navclass">
			<li><a class="active" href="#home">Parps</a></li>
			<li><a href="#news">News3</a></li>
			<li><a href="#contact">Visit!</a></li>
			<li><a href="#about">About</a></li>
		</ul>
	</div>
	<h1>Browse Our Parnks!
	</h1>

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

	<a class="paginator" href="?page=<?= $page - 1?>">&#8606</a>

	<h2><?= $page?></h2>

	<a class="paginator" href="?page=<?= $page + 1?>">&#8608</a>
</body>
</html>