<?php
// 2. connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

$conn1 = new mysqli($servername,$username,$password,$dbname);

if(!$conn1){
    die("connection failed" . mysqli_connect_error());
} echo "conncected succesfully";
?>
