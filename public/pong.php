<?PHP
function pageController(){
	$data = [];
	$data['hits'] = isset($_GET['hits']) ? $_GET['hits'] : 0;
	$data['miss'] = isset($_GET['miss']) ? $_GET['miss'] : 0;
	return $data;
};
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>pongo</title>
	<style type="text/css">
		a {
			font-size: 20px;
		}
	</style>
</head>
<body>
	<h1>pongo</h1>
	<br>
	<a href="/ping.php?hits=<?= $hits + 1?>">hit</a>
	<br>
	<a href="/ping.php?miss<?= $miss?>">miss</a>
</body>
</html>