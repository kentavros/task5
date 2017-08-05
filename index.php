<?php
include ('libs/config.php');
include ('libs/function.php');
//COOKIE
$coo = new CookieClass();
$coo->saveData(KEY, VAL);
$getCoo = $coo->getData(KEY);
$coo->deleteData(KEY);
//SESSION
$sess=new SessionClass();
$sess->saveData(KEY, VAL);
$getSess = $sess->getData(KEY);
$sess->deleteData(KEY);
//PGSQL
try{
    $pg = new PostgreSQLClass();
    $pg->saveData(KEY, VAL);
    $getPg = $pg->getData(KEY);
    $pg->deleteData(KEY);
    $getPgDel = $pg->getData(KEY);
}catch (Exception $e)
{
    $msg = $e->getMessage();
}
//MySQL
try{
    $my = new MySQLClass();
    $my->saveData(KEY,VAL);
    $getMy = $my->getData(KEY);
    $my->deleteData(KEY);
    $getMyDel = $my->getData(KEY);
}catch(Exception $e)
{
    $msg = $e->getMessage();
}
//Template include
include('template/tmp.php')
?>