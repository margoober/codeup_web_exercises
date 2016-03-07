<?php

define("MY_NAME", "Morgort");
echo "My name is " . MY_NAME . PHP_EOL;
define ("MY_OTHER_NAME", "Snowplow");
echo "Mein nombre ist " . MY_OTHER_NAME . PHP_EOL;
echo "PHP is SKELETONS FOR BUBS";
$languages = ["Grobo tobo don", "Hell talk", "lormo snop snop", "Potato tongue", "Why Me Questions"];
print_r($languages);

//Associative Array
$person1 = [
"first_name" 		=> "Gorpon",
"last_name" 		=> "Hellbones",
"biggest_regret"	=> "Karen"
];
$person1['first_name'] = 'Lofe';
print_r($person1);
$gum = ["Winter Mints"];
echo "Bad Tastes";
$badTastes = array(
	"taste1" => "dirt",
	"taste2" => "despair",
	"taste3" => "cringes",
	"taste4" => "Oh God No",
	"taste5" => $gum,
	"taste6" => Array
	(
		"pie" => "badberry",
		"pot" => "glut"
		),
	"taste7" => "salmon slaps"
	);

print_r($badTastes);
var_dump($badTastes);