<?php
include ('libs/CookieClass.php');
include ('libs/SessionClass.php');
$coo = new CookieClass();
$coo->saveData('test1', 'test2');
echo $coo->getData('test1');


echo "1. Work with Session!";
echo "<br />Send key = varSess and  val = HelloUser6 <br /> ";

$session = new SessionClass();


$session->saveData('varSess', 'HelloUser6');

echo "Get Data: ";
echo $session->getData('varSess');

//echo $_SESSION['varSess'];

echo "<br /> Delete session data, get Data again: ";
$session->deleteData('varSess');
if (!$session->getData('varSess'))
{
	echo "FALSE";
}


//$coo = new CookieClass();
//$coo->saveData('test1', 'test2');
//echo $coo->getData('test1');
