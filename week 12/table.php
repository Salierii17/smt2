<?php
// 5.create table of the table in database
include_once("config.php");
$result = mysqli_query($conn1, "SELECT * FROM room");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table of DATABASE</title>
</head>
<body>
<a href="form.php">Add</a><br><br>
    <table border = 1>
        <h4> Room Table</h4>
        <tr>
            <th> Room ID</th>
            <th> Room Name</th>
            <th> Type Name</th>
        </tr>

    <?php
        while($hotel = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$hotel['room_ID']."</td>";
            echo "<td>".$hotel['room_Name']."</td>";
            echo "<td>".$hotel['type_ID']."</td>";
            echo "</tr>";
        }
    ?>
    </table>
    
</body>
</html>