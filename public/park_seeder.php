<?php

define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASSWORD', 'parks_user');
define('DB_HOST', '127.0.0.1');

require_once('db_connect.php');

$truncator = <<<QUERY
TRUNCATE national_parks;
QUERY;
$connection->exec($truncator);

$national_parksArray = [
[
	'name' => 'Big Bend',
	'location' => 	'Texas',
	'date_est' => '1944',
	'acreage' => 801163.21,
	'description' => 'This is the biggest wiggle in all of the rivers. Home to the big bats and the jaguar cats. Watch out for the cactuses! This is one park you will struggle to recover from emotionally.'
],
[
	'name' => 'Joshua Tree',
	'location' => 'California',
	'date_est' => '1994',
	'acreage' => 789745.47,
	'description' => 'Joshua laid an egg that hatched into these horrible trees, which you will no doubt struggle to forget.'
],
[
	'name' => 'Black Canyon of the Gunnison',
	'location' => 'Colorado',
	'date_est' => '1999',
	'acreage' => 32950.03,
	'description' => 'This is the truest canyon on the planet. In fact, the view is sickening. This is one view you will struggle to forget.'
],
[
	'name' => 'Crater Lake',
	'location' => 'Oregon',
	'date_est' => '1902',
	'acreage' => 183224.05,
	'description' => 'A hole filled with water. This hole filled with water was created by either a volcano, or a large object that God sent from space. This is one hole you will struggle to forget.'
],
[
	'name' => 'Great Sand Dunes',
	'location' => 'Colorado',
	'date_est' => '2004',
	'acreage' => 42983.74,
	'description' => 'If you released millions of clams into this sandy oasis, perhaps in a thousand years you would have the Great Pearl Dunes.'
],
[
	'name' => 'Olympic',
	'location' => 'Washington',
	'date_est' => '1938',
	'acreage' => 3243872,
	'description' => 'Not to be confused with the sportsgame festival, this park actually offers no form of recreation. This park has couches, but they are not up to par.'
],
[
	'name' => 'Isle Royale',
	'location' => 'Michigan',
	'date_est' => '1940',
	'acreage' => 571790,
	'description' => 'An island fit for some kings and queens. Do\'nt forget your sceptor!'
],
[
	'name' => 'Denali',
	'location' => 'Alaska',
	'date_est' => '1917',
	'acreage' => 4740911.7,
	'description' => 'Home to the biggest hat in the world, which is a mountain called Denali after a famous Italian chocolatier.'
],
[
	'name' => 'Dry Tortugas',
	'location' => 'Florida',
	'date_est' => '1992',
	'acreage' => 64701,
	'description' => 'These raisinesque turtles really want some water! Try not to forget your water bottles! (WARNING: $500 fine for not watering these dry turtles)'
],
[
	'name' => 'Guadelupe Mountains',
	'location' => 	'Texas',
	'date_est' => '1966',
	'acreage' => 166868,
	'description' => 'Check out the famous Tortilla Canyon, and don\'t forget the salsa!'
],
[
	'name' => 'Acadia',
	'location' => 	'Maine',
	'date_est' => '1919',
	'acreage' => 47389.67,
	'description' => 'Maine is the main lobster place, and this wonderful park won\'t let you forget it!'
],
[
	'name' => 'Carlsbad Caverns',
	'location' => 'New Mexico',
	'date_est' => '1930',
	'acreage' => 46766.45,
	'description' => 'Named after just how truly rotten Carl was.'
],
[
	'name' => 'Congaree',
	'location' => 'South Carolina',
	'date_est' => '2003',
	'acreage' => 26545.86,
	'description' => '0/5 stars. Bring bug spray. This is one swamp you are going to struggle to put behind you.'
],
[
	'name' => 'Kenai Fjords',
	'location' => 'Alaska',
	'date_est' => '1980',
	'acreage' => 669982.99,
	'description' => 'Spy on whales, you perv!'
],
[
	'name' => 'Mount Rainier',
	'location' => 'Washington',
	'date_est' => '1901',
	'acreage' => 235625.00,
	'description' => 'As the locals say, \'Nothing is rainier than Rainier!\' -- so bring your umbrella, as well as a servant to hold it over you. This is one mountain you will struggle to forget.'
],
[
	'name' => 'North Cascades',
	'location' => 'Washington',
	'date_est' => '1968',
	'acreage' => 504780.94,
	'description' => 'Not as good as the South Cascades, but close. Free slim jims if you wear a shirt that says \'The South Cascades Can And Should Go To Hell\'.'
]
];
//$connection->exec($insertion);

//echo 'columnCount method: ' . $stmt->columnCount() . PHP_EOL;
//echo 'rowCount method: ' . $stmt->rowCount() . PHP_EOL;
//$national_parksArray = ($connection->query('SELECT * FROM national_parks')->fetchAll(PDO::FETCH_ASSOC));
//print_r($national_parksArray);



//prepare statements below
$query = "INSERT INTO national_parks (name, location, date_est, acreage, description) VALUES (:name, :location, :date_est, :acreage, :description)";

$stmt = $connection->prepare($query);

foreach ($national_parksArray as $park) {
	$stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
	$stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
	$stmt->bindValue(':date_est', $park['date_est'], PDO::PARAM_STR);
	$stmt->bindValue(':acreage', $park['acreage'], PDO::PARAM_STR);
	$stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);

	$stmt->execute();

}