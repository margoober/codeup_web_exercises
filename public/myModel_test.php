<?php

require_once 'myModel.php';
require_once 'myUser.php';


$user = new User();
$user->first_name = "Margot";
$user->last_name = "McMahon";
$user->save();

$allUsers = User::all();


$firstUser = User::find(1);
$firstUser->save();