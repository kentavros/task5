<?php
class SessionClass implements iWorkData
{

    /**
	 * Save Data to session
     * @param $key
     * @param $val
     * @return bool
     */
	public function saveData($key, $val)
	{
		$_SESSION[$key] = $val;
		return true;
	}

    /**
	 * Get Data from Session
     * @param $key
     * @return bool
     */
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

    /**
	 * Delete data from Session
     * @param $key
     * @return bool
     */
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
