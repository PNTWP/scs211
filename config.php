<?php
/* Database credentials. */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'csbootst_scs211');
define('DB_PASSWORD', '123456789');
define('DB_NAME', 'csbootst_scs211');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// echo "Initial character set is: " . mysqli_character_set_name($link);

// Change character set to utf8 (support Thai character)
mysqli_set_charset($link,"utf8");