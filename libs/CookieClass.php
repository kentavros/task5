<?php
require_once('iWorkData.php');
class CookieClass implements iWorkData
{
	public function saveData($key, $val)
	{
		setcookie($key, $val, time()+3600);
		$_COOKIE[$key] = $val; 
	}

	public function getData($key)
	{
		if (isset($_COOKIE[$key]))
		{
			return $_COOKIE[$key];
		}
		else
		{
			return false;
		}

		 
	}

	public function deleteData($key)
	{
		
	}
}
