<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "hotel";

$conn = new mysqli($servername,$user,$password,$dbname);

if(!$conn){
    die("connection failed" . mysqli_connect_error());
};
?>
