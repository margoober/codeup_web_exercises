<?php
$adjectives = ["wet", "hell", "damp", "so sad", "wretched", "unfortunate", "hell-bound", "disastrous", "regrettable", "God-no", "miserable", "triumphant", "torpid"];
$nouns = ["mess", "fiasco", "acquaintenceship", "betrayal", "festivity", "merry-making", "regret", "lesson", "dinner", "first kiss", "lecture", "scolding", "chastisement"];
function randomSelector($array) {
	return $array[rand(0, count($array) - 1)];
}
$adjResult = randomSelector($adjectives);
$nounResult = randomSelector($nouns);
?>
<!DOCTYPE html>
<html>
<head>
	<title>True Events</title>
	<style>
	h1 {color: #008AB3;
		text-align: center}
	h2 {color: #D213C7;
		text-align: center}
	body {background-color: #91DFB8;}
</style>
</head>
<body>
	<h1>True Events</h1>
	<h2><?php echo "{$adjResult} {$nounResult}" . PHP_EOL; ?></h2>
</body>
</html>