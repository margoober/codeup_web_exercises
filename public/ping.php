<?PHP
function pageController(){
	$data = [];
	$data['hits'] = isset($_GET['hits']) ? $_GET['hits'] : 0;
	return $data;
};
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>pingo</title>
	<style type="text/css">
		a {
			font-size: 20px;
		}
	</style>
</head>
<body>
	<h1>pingo</h1>
	<br>
	<a href="/pong.php?hits=<?= $hits + 1?>">hit</a>
	<br>
	<a href="/pong.php?hits=<?= $hits?>">miss</a>
</body>
</html>