<?php
class MySQLClass implements iWorkData
{
    protected $mySqlConnect;
    //protected $DBname;

    /**
     * Construct - create connect and select db MySQL
     * MySQL constructor.
     * @throws Exception
     */
    public function __construct()
    {
        $this->mySqlConnect = mysqli_connect(HOST, USER_NAME, PASS, DB_NAME);
        if (!$this->mySqlConnect)
        {
            throw new Exception(ERROR_CONNECT . mysqli_connect_error());
        }
    }


    /**
     * Save Data
     * @param $key
     * @param $val
     * @return int|string
     * @throws Exception
     */
    public function saveData($key, $val)
    {
        //Check if there is a value in the bd
        $getData = $this->getData($key);
        foreach ($getData as $k=>$v)
        {
            if (($v['key'] == $key) && ($v['data'] == $val))
            {
                return DUPLICATE_VAL;
            }
        }
        //Value is empty - add value
        $query = "INSERT INTO ".TB_NAME." (`key`, data) VALUES ('".$key."', '".$val."')";
        $result = mysqli_query($this->mySqlConnect, $query);
        if (!$result)
        {
            throw new Exception(ERROR_QUERY . mysqli_error($this->mySqlConnect));
        }
        else
        {
            return mysqli_affected_rows($this->mySqlConnect);
        }
    }

    /**
     * Get Data from BD
     * @param $key
     * @return array
     * @throws Exception
     */
    public function getData ($key)
    {
        $query = "SELECT `key`, data FROM ".TB_NAME." WHERE `key`='".$key."'";
        $result = mysqli_query($this->mySqlConnect, $query);
        if (!$result)
        {
            throw new Exception(ERROR_QUERY . mysqli_error($this->mySqlConnect));
        }
        else
        {
            $arrResult = array();
            while ($row = mysqli_fetch_assoc($result))
            {
                $arrResult[] = $row;
            }
            return $arrResult;
        }
    }

    /**
     * Delete Data from DB
     * @param $key
     * @return int
     * @throws Exception
     *
     */
    public function deleteData($key)
    {
        $query = "DELETE FROM ".TB_NAME." WHERE `key`='".$key."'";
        $result = mysqli_query($this->mySqlConnect, $query);
        if (!$result)
        {
            throw new Exception(ERROR_QUERY . mysqli_error($this->mySqlConnect));
        }
        else
        {
            return mysqli_affected_rows($this->mySqlConnect);
        }
    }

    /**
     * Close connection
     */
    public function __destruct()
    {
        mysqli_close($this->mySqlConnect);
    }

}


?>