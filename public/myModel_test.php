<?php

require_once 'myModel.php';
require_once 'myUser.php';

//optional constructor route
$arrayOfAttributes = [
	'first_name' => 'Mary'
	'last_name' => 'Beanfriend'
];
$user = new User($arrayOfAttributes);


$user = new User();
$user->first_name = "Margot";
$user->last_name = "McMahon";
$user->save();

$allUsers = User::all();


$firstUser = User::find(1);
$firstUser->save();