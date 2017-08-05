<?php
/*
 * Mesages
 */
//Such a cookie does not exist
define('NO_COOKIE', 'The requested cookie does not exist!');

//Cookies removed
define('DEL_COOKIE', 'Cookies removed!');

//The requested session is missing
define('NO_SESSION', 'The requested session is missing!');

//Session removed
define('DEL_SESSION', 'Session removed!');

//Error connect to database
define ('ERROR_CONNECT', 'Error connect to database! Wrong host or user/pass! ');

//Error query
define('ERROR_QUERY', 'Error query! ');

//Wrong data base name
define ('ERROR_DB', 'Wrong data base name! ');

//Such value is already added to the database
define('DUPLICATE_VAL','Such value is already added to the database!');

//Data delete from BD PGSQL
define('DEL_BD', 'Data delete from BD!');

//Error, the database is not empty
define('ERROR_DEL','Error, the database is not empty!');


/**
 * Values for the method
 */
define('KEY', 'user6');
define('VAL', 'data user6');

/**
 *for Data Base PostgreSQL
 */

define('PG_CONNECT', "host=localhost dbname=user1 user=user1 password=user1z");

define('PG_TB_NAME', 'PG_TEST');

/**
 * for Data Base MySQL
 */
define('HOST','localhost');

define('USER_NAME', 'user1');

define('PASS', 'tuser1');

define('DB_NAME', 'user1');

define('TB_NAME', 'MY_TEST');

?>