<?php
function inputHas($key) {
	if (isset($key)) {
		return true;
	} else {
		return false;
	}
}
function inputGet($key) {
	if (isset($key)) {
		return $key;
	} else {
		return null;
	}
}
function escape($input) {
	return addslashes($input);
}