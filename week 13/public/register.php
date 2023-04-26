<?php
    if(isset($_POST["submit"])) {
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $name= $_POST['name'];
        $addr = $_POST['addr'];
        
        include("config.php");
    
        $result = mysqli_query($conn, "INSERT INTO customer(cus_user,cus_pass,cus_name,cus_address) 
        VALUES('$username','$pass','$name','$addr')");
        header("location:login.php");
        echo "<br>"."Your account succesfully made ";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel 88</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2 class="text-5xl"> Register Your account</h2>
    <form action="register.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td> Username </td>
                <td><input type = "text" name ="username" ></td>
            </tr>
            <tr>
                <td> Password </td>
                <td><input type = "password" name ="pass" ></td>
            </tr>
            <tr>
                <td> Name </td>
                <td><input type = "text" name ="name"></td>
            </tr>
            <tr>
                <td> address </td>
                <td><input type = "text" name ="addr"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type = "submit" name ="submit" value="register"></td>
            </tr>
        </table>
        
</body>
</html>