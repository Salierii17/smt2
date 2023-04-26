<?php
    // 3. input to type table
    if(isset($_POST["submit"])) {
        $room= $_POST['room'];
        $start = $_POST['start'];        
        $end= $_POST['end'];      
        include("config.php");
    
        $query = mysqli_query($conn, "SELECT * FROM customer WHERE cus_user =$x AND cus_pass=$y");
    }                 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel 88</title>
</head>
<body>
    <h4></h4>
    <form action="booking.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td> Room :</td>
                <td><input type = "text" name ="room" ></td>
            </tr>
            <tr>
                <td> Start :</td>
                <td><input type = "password" name ="start" ></td>
            </tr>
            <tr>
                <td> End :</td>
                <td><input type = "password" name ="end" ></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type = "submit" name ="submit" value="register"></td>
            </tr>
        </table>
        
</body>
</html>