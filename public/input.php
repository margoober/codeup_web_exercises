<?php
class Input
{
	public static function has($key)
	{
		return isset($_REQUEST[$key]);
	}

	public static function get($key, $default = null)
	{
		return self::has($key) ? $_REQUEST[$key] : $default;
	}

	public static function getString($key){
		if (is_string($key)) {
			return self::get($key);
		} else {
			throw new Exception('$key must be a string!!');
		}
	}

	public static function getNumber($key){
		if (is_numeric($key)) {
			return self::get($key);
		} else {
			throw new Exception('$key must be a number!!');
		}

	}

	public static function escape($input)
	{
		return htmlspecialchars(strip_tags($input));
	}
}


/* standard user authentication flow

if (Input::has('username') && Input::get('username') != "") && Input::has('password') && Input::get('password') != "") {
		if (Auth::attempt(Input::get('username'), Input::get('password'))) {
			header("Location: authorized.php");
			die();
	}
}
*/