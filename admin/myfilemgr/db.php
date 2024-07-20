<?php

$host='localhost';
$user='root';
$pass='';
$db='studentmsdb';
$conn = mysqli_connect($host,$user,$pass,$db);
if(!$conn){
    die("Cannot connect to the database. Error: ".mysqli_error($conn));
}

?>