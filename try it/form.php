<?php
    if(isset($_POST['submit'])){
        $t_ID =$_POST['t_ID']; 
        $t_Name =$_POST['t_Name']; 

        include("conn.php");

        $Result = mysqli_query($conn, "INSERT INTO types(type_ID,type_Name) VALUES($t_ID,$t_Name)");

        echo "Successfully added";
        
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="http://localhost/php%20Learning/try%20it/conn.php">conn</a>
    <form action="" method="post"></form>
        <table>
            <tr>
                <td>Type ID </td>
                <td>&nbsp<input  type = "text" name = "t_ID"></td>
            </tr>
            <tr>
                <td>Type Name  </td>
                <td>&nbsp<input $nbsp type = "text" name = "t_Name"></td>
            </tr>
            <tr>
                <td></td>
                <td>&nbsp<input type = "submit" name = "submit" value="add"></td>
            </tr>

        </table>
</body>
</html>