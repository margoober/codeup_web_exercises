<?php

function randomSelector($array) {
	$key = array_rand($array);
	$value = $array[$key];
	return $value;
}
function combinedResult($adjectives, $nouns) {
	return randomSelector($adjectives) . " " . randomSelector($nouns);
};
function pageController() {

	$adjectives = ["wet", "hell", "damp", "so sad", "wretched", "unfortunate", "hell-bound", "disastrous", "regrettable", "God-no", "miserable", "triumphant", "torpid"];
	$nouns = ["mess", "fiasco", "acquaintenceship", "betrayal", "festivity", "merry-making", "regret", "lesson", "dinner", "first kiss", "lecture", "scolding", "chastisement"];

	$data = [];
	$data["messName"] = combinedResult($adjectives, $nouns);
	return $data;
}
extract(pageController());
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
	<h2><?= $messName . PHP_EOL; ?></h2>
</body>
</html>