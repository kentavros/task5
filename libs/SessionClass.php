<?php 
require_once('iWorkData.php');
class SessionClass implements iWorkData
{



	public function saveData($key, $val)
	{
		$_SESSION[$key] = $val; 

	}

	public function getData($key)
	{
		if (isset($_SESSION[$key]))
		{
			return $_SESSION[$key];
		}
		else
		{
			return false;
		}
	}

	public function deleteData($key)
	{
		if (isset($_SESSION[$key]))
		{
			unset($_SESSION[$key]);
			return true;
		}
		else
		{
			return false;
		}

	
	}


	
		
}



?>
