<?php

function pageController() {
	$favorites = ["bones", "skeletons", "batbones", "skeleton dances", "skull towers", "Mr. Skeleton Bones' Magic Dance Workshop", "Cutting a Rug With My Skeleton Friends", "boneboxes", "bone dust", "The Bone Parade", "Skeletons II: The Sequel", "A kiddie pool filled with human teeth"];
	$leastFavorites = ["spapageto", "spadeti", "spageto", "spabeppi"];
	shuffle($favorites);
	$data = [];
	$data = [ 
		'favoritesKey' => $favorites,
		'leastFavoritesKey' => $leastFavorites
	];
	return $data;
};
extract(pageController());
function random($array) {
	$key = array_rand($array);
	$value = $array[$key];
	return $value;
}
$worstNoodle = random($leastFavoritesKey);
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Favorites</title>
	<style>
		h1 {
			font-size: 35px;
			color: #91DFB8;
		}
		body {
			background-color: #D213C7;
		}
		td {
			font-size: 20px;
			color: #00799E;
			padding: 7px;
			border-radius: 7px;
			border: 3px solid #00799E;
		}
		tr:nth-child(even) {
			background-color: #84CDA6;
		}
		tr:nth-child(odd) {
			background-color: #35B6C8;
		}
	</style>
</head>
<body>
	<h1>My Grim Faves</h1>
	<form method="GET" action="https://duckduckgo.com/">
    <input type="text" name="q" value="" placeholder="Search DuckDuckGo">
    <button type="submit">Go!</button>
</form>
	<table>
		<?php foreach($favoritesKey as $value) : ?>
			<tr><td><?= $value;?></td></tr>		
		<?php endforeach; ?>
	</table>
	<h2>Worst Noodel of the Day:<br><?= "{$worstNoodle} nodles sux!!" ?></h2>
</body>
</html>