<?php
class PostgreSQLClass implements iWorkData
{
    protected $connectPgProp;

    /**
     * Construct create connection to DB PostgreSQL
     * PostgreSQL constructor.
     * @throws Exception
     */
    public function __construct()
    {
        $this->connectPgProp = pg_connect(PG_CONNECT);
        if(!$this->connectPgProp)
        {
            throw new Exception(ERROR_CONNECT . pg_last_error());
        }
    }

    /**
     * Save Data in DB
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
        $query = "INSERT INTO ".PG_TB_NAME." (key, data) VALUES ('".$key."','".$val."')";   //for class DB
//        $query = "INSERT INTO "."\"".PG_TB_NAME."\" (key, data) VALUES ('".$key."','".$val."')"; //for work DB
        $result = pg_query($this->connectPgProp, $query);
        if (!$result)
        {
            throw new Exception(ERROR_QUERY . pg_last_error());
        }
        else
        {
            return pg_affected_rows($result);
        }
    }

    /**
     * Get Data from DB
     * @param $key
     * @return array
     * @throws Exception
     */
    public function getData ($key)
    {

        $query = "SELECT key, data FROM ".PG_TB_NAME." WHERE key='".$key."'"; //for class BD
      //  $query = "SELECT key, data FROM \"".PG_TB_NAME."\" WHERE key='".$key."'"; //for work BD
        $result = pg_query($this->connectPgProp, $query);
        if (!$result)
        {
            throw new Exception(ERROR_QUERY . pg_last_error());
        }
        else
        {
            $arrResult = array();
            while ($row = pg_fetch_array($result, NULL,PGSQL_ASSOC))
            {
                $arrResult[] = $row;
            }
            return $arrResult;
        }
    }

    /**
     * Delete data from DB
     * @param $key
     * @return int
     * @throws Exception
     */
    public function deleteData($key)
    {
        $query = "DELETE FROM ".PG_TB_NAME." WHERE key='".$key."'";
    //    $query = "DELETE FROM \"".PG_TB_NAME."\" WHERE key='".$key."'";
        $result = pg_query($this->connectPgProp, $query);
        if (!$result)
        {
            throw new Exception(ERROR_QUERY . pg_last_error());
        }
        else
        {
            return pg_affected_rows($result);
        }

    }

    /**
     * PgSQL close in destructor
     */
    public function __destruct()
    {
        pg_close($this->connectPgProp);
    }
}
?>
