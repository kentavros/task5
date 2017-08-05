<?php
class CookieClass implements iWorkData
{
    /**
     * Set cookie
     * @param $key
     * @param $val
     * @return mixed
     */
    public function saveData($key, $val)
	{
		setcookie($key, $val, time()+3600);
		$_COOKIE[$key] = $val;
		return true;
	}

    /**
     * Get cookie
     * @param $key
     * @return string
     */
	public function getData($key)
	{
		if (isset($_COOKIE[$key]))
		{
			return $_COOKIE[$key];
		}
		else
		{
			return NO_COOKIE;
		}
	}

    /**
     * Delete Cookie
     * @param $key
     * @return string
     */
	public function deleteData($key)
	{
        if (isset($_COOKIE[$key]))
        {
            unset($_COOKIE[$key]);
            return DEL_COOKIE;
        }
        else
        {
            return NO_COOKIE;
        }
	}
}
?>
