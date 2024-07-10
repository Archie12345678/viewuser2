<?php
$server = 'localhost:3307';
$user = 'root';
$pass = '';
$db = 'univdata';

$connection = mysqli_connect($server, $user, $pass, $db);
if(!$connection){
    die('could not connect to server....\n' . mysqli_connect_error());
}

$db_selected = mysqli_select_db($connection,$db);
if(!$db_selected) {
    die('could not select database....\n' . mysqli_error($connection));
}

?>
