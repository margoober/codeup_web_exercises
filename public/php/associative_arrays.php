<?PHP
define("PRIMARY_SLIME", "Slime");
$iceFingers = "Hey, " . PRIMARY_SLIME . "-face. You have the coldest fingers on the planet." . PHP_EOL;
echo "$iceFingers";
$rand = rand(0,8);
$adj = array("mucky", "horrid", "godforsaken", "hell-bound", "wretched", "debasèd", "worst worst", "hell-no", "never ever", array(
	"snow" => "snowfluhhs",
	"ice" => "cryxxxtals"
	)
);
$insult = "Don't touch me with your " . $adj[$rand] . " fingers." . PHP_EOL;
echo $insult;

var_dump($insult);
var_dump($adj);



$number = 10;
echo $number * 3;