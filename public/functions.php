<?php
//inputHas() and inputGet() functions take in a key such as the "name" of a form input or key in a query
//both functions use $_REQUEST superglobal to reach into both $_GET and $_POST\
//$_REQUEST[$key] represents "Bob" where 'name' is the key form a first_name input

//this one returns true or false based on whether the key is available

function inputHas($key) {
	if (isset($_REQUEST[$key])) {
		return true;
	} else {
		return false;
	}
}
//returns the value specified by the key, or null if the key is not set.
function inputGet($key) {
	if (isset($_REQUEST[$key])) {
		return $_REQUEST[$key];
	} else {
		return null;
	}
}
//returns the input as a safely escaped string.
function escape($input) {
	return htmlspecialchars(strip_tags($input));
}