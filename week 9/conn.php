<?php
$servername = "localhost";
$username ="root" ;
$password = "" ;
// $db ="university1";

$conn = new mysqli($servername,$username,$password);

if ($conn->connect_error) {
    die("Conncection failed: ". $conn-> connect_error);
}
echo "Conncected successfully";


?>