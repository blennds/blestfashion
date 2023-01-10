<?php

define('DB_SERVER', 'localhost'); 

define('DB_USERNAME', 'root'); 

define('DB_PASSWORD', ''); 

define('DB_NAME', 'blest fashion'); 
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("Gabim ne lidhje !" . mysqli_connect_error());
}


?>