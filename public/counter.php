<?PHP
require_once 'functions.php';
function pageController(){
	$data = [];
	//$data['counter'] = isset($_GET["counter"]) ? $_GET["counter"] : 0;
	$data['counter'] = inputHas('counter') ? escape(inputGet('counter')) : 0;
	return $data;
};
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Counter</title>
</head>
<body>
	<h1>You Stand At <span><?= $counter ?></span></h1>
	<a href="/counter.php?counter=<?= $counter + 1?>">Up</a>
	<br>
	<a href="/counter.php?counter=<?= $counter - 1?>">Down</a>
	<br>
</body>
</html>