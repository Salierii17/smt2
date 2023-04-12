<?php
    // 3. input to type table
    if(isset($_POST["submit1"])) {
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $name= $_POST['name'];
        $addr = $_POST['addr'];
        
        include_once("config.php");
    
        $result = mysqli_query($conn1, "INSERT INTO Customer(cus_name,cus_pass,cus_name,cus_address) 
        VALUES('$username','$pass','$name','$addr')");
        echo "type ID and Type Name succesfully added";
    }
    // 4. input to room table
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>add room type</title>
</head>
<body>
    
    <form action="customer.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td> Username :</td>
                <td><input type = "text" name ="username" ></td>
            </tr>
            <tr>
                <td> Password :</td>
                <td><input type = "password" name ="pass" ></td>
            </tr>
            <tr>
                <td> Name :</td>
                <td><input type = "text" name ="name"></td>
            </tr>
            <tr>
                <td> address :</td>
                <td><input type = "text" name ="addr"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type = "submit" name ="submit1" value="register"></td>
            </tr>
        </table>
</body>
</html>