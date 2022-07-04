<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pierpoint_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die;
}


?>