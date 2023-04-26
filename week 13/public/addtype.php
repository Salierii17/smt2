<?php
    if(isset($_POST["submit"])) {
        $t_ID = $_POST['typeID'];
        $t_Name = $_POST['typeName'];
        
        include_once("config.php");
    
        $result = mysqli_query($conn, "INSERT INTO types(type_id,type_name) 
        VALUES('$t_ID','$t_Name')");
        echo "type ID and Type Name succesfully added";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>add type</title>
</head>
<body>
    
    <!-- 3.form use to input to type table -->
    <form action="addtype.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td> Type ID</td>
                <td><input type = "text" name ="typeID"></td>
            </tr>
            <tr>
                <td> Type Name</td>
                <td><input type = "text" name ="typeName"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type = "submit" name ="submit1" value="Add"></td>
            </tr>
        </table>
    </form>
    <br>
</body>
</html>