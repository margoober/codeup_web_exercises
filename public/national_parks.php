<?php
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASSWORD', 'parks_user');
define('DB_HOST', '127.0.0.1');

var_dump($_POST);

require_once('db_connect.php');
require_once 'Input.php';
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

//prepare statements for user submissions

//A NOTE FROM THURSDAY: right now, the specific getDate/String/Number methods from Input class are only being applied at the user submission level. to update this, (remove these?? maybe not) add these to your PDO, or whatever it is called)

//note FROM THURSDAY CATCH LESSON: Push your errors onto an $errors[] array.
if (
	(Input::has('nameSubmit'))
	&& (Input::getString('nameSubmit') != "")
	&& (Input::has('acreageSubmit'))
	&& (Input::getNumber('acreageSubmit') != "")
	&& (Input::getString('stateSubmit'))
	&& (Input::has('stateSubmit') != "")
	&& (Input::getDate('date_estSubmit'))
	&& (Input::has('date_estSubmit') != "")
	&& (Input::getString('descriptionSubmit'))
	&& (Input::has('descriptionSubmit') != "")
	) {
	echo "THANK YOU FOR YOUR INPUT." . PHP_EOL;

	$nameSubmit = $_POST['nameSubmit'];
	$stateSubmit = $_POST['stateSubmit'];
	$date_estSubmit = $_POST['date_estSubmit'];
	$acreageSubmit = $_POST['acreageSubmit'];
	$descriptionSubmit = $_POST['descriptionSubmit'];
	$stmt = $connection->prepare("INSERT INTO national_parks (name, location, date_est, acreage, description) VALUES (:nameSubmit, :stateSubmit, :date_estSubmit, :acreageSubmit, :descriptionSubmit)");
	$stmt->bindValue(':nameSubmit', $nameSubmit, PDO::PARAM_STR);
	$stmt->bindValue(':stateSubmit', $stateSubmit, PDO::PARAM_STR);
	$stmt->bindValue(':date_estSubmit', $date_estSubmit, PDO::PARAM_STR);
	$stmt->bindValue(':acreageSubmit', $acreageSubmit, PDO::PARAM_STR);
	$stmt->bindValue(':descriptionSubmit', $descriptionSubmit, PDO::PARAM_STR);
	$stmt->execute();
}

//to convert a query statement to a prepare statement, change query to prepare and change $variable to :variable
$stmt = $connection->prepare("SELECT * FROM national_parks LIMIT :limit OFFSET :offset");

$stmt = ($connection->prepare("SELECT * FROM national_parks LIMIT :limit OFFSET :offset"));
//now bind the placeholders to their corresponding variables!
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

$national_parksArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

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


	<h2><?= $page?></h2>
	<a class="paginator" href="?page=<?= $page - 1?>">&#8606</a>

	<a class="paginator" href="?page=<?= $page + 1?>">&#8608</a>
</body>
</html>