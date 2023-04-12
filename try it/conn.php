<?php
// 2.connect to Hotel database

$_SERVER  = "localhost";
$UserName = "root";
$password = "";
$dbName = "hotel";

$conn = new mysqli($_SERVER,$UserName,$password,$dbName); 

if(!$conn){
    die("connection failed".$conn->connect_error) ;
}echo "connection Success";
?>