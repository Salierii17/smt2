<?php
    // 3. input to type table
    if(isset($_POST["submit1"])) {
        $t_ID = $_POST['typeID'];
        $t_Name = $_POST['typeName'];
        
        include_once("config.php");
    
        $result = mysqli_query($conn1, "INSERT INTO types(type_id,type_name) 
        VALUES('$t_ID','$t_Name')");
        echo "type ID and Type Name succesfully added";
    }
    // 4. input to room table
    elseif(isset($_POST["submit2"])) {
        $r_ID = $_POST ['roomID'];
        $r_N = $_POST ['roomName'];
        $t_ID = $_POST ['typeID'];
        
        include_once("config.php");
        $result2 = mysqli_query ($conn1, "INSERT INTO room(room_id,room_name,type_id) 
        VALUES('$r_ID', '$r_N','$t_ID')");
    
        echo "Room ID,name, and type id succesfully added";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>add room type</title>
</head>
<body>
    
    <!-- 3.form use to input to type table -->
    <form action="form.php" method="post" name="form1">
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
    <!-- 4. form use to input to room table -->
    <form action="form.php" method="post" name="form2">
        <table width="25%" border="0">
            <tr>
                <td> Room ID</td>
                <td><input type = "text" name ="roomID"></td>
            </tr>
            <tr>
                <td> Room Name</td>
                <td><input type = "text" name ="roomName"></td>
            </tr>
            <tr>
                <td> Type ID</td>
                <td><input type = "text" name ="typeID"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type = "submit" name ="submit2" value="Add"></td>
            </tr>
        </table>
</body>
</html>