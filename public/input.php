<?php
class Input
{
	public statis function has($key)
	{
		return isset($_REQUEST[$key]);
	}

	public static function get($key, $default = null)
	{
		return self::has($key) ? $_REQUEST[$key] : default;
	}
	
	public static function escape($input)
	{
		return htmlspecialchars(strip_tags($input));
	}
}