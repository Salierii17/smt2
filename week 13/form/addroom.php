<?php
    include("config.php");
    if(isset($_POST["submit"])) {
        $r_ID = $_POST ['roomID'];
        $r_N = $_POST ['roomName'];
        $t_ID = $_POST ['typeID'];
        
        $result = mysqli_query ($conn, "INSERT INTO room(room_id,room_name,type_id) 
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
    <form action="addtype.php" method="post" name="form1">
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
                <td> TYPE ID</td>
                <td><input type = "text" name ="typeID"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type = "submit" name ="submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <br>
</body>
</html>