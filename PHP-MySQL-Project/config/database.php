<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'desmond');
define('DB_PASS', '123456');
define('DB_NAME', 'php_dev');


// connection
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// validate connection
if($connection->connect_error) {
    die('Connection Failed' . $connection->connect_error);
}


?>