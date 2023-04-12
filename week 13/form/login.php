<?php
include "config.php";
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Hotel 88</title>
</head>
<body>
    
    <form action="login.php" method="post" name="form1">
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
                <td></td>
                <td><input type = "submit" name ="submit" value="Login"></td>
            </tr>
        </table>
<?php
    // 3. input to type table
    if(isset($_POST["submit"])) {
        $x= $_POST['username'];
        $y = $_POST['pass'];   

        $result= mysqli_query($conn, "SELECT * FROM customer WHERE cus_user ='$x' AND cus_pass='$y'");
        $check = mysqli_num_rows($result);
        
        if($check>0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<br>"." welcome, ".$row["cus_user"]." "."id: ".$row["cus_id"];
                // header("location: booking.php");

            }
        }else{
            echo "<br>"."incorrect username or password, <br> try again";
        }
        
    }                 
    ?>
    <br><br>
    <table border = 1>
        <h4> Room Table</h4>
        <tr>
            <th> </th>
            <th> Room Name</th>
            <th> Type Name</th>
        </tr>

    <?php
        while($hotel = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$hotel['']."</td>";
            echo "<td>".$hotel['room_Name']."</td>";
            echo "<td>".$hotel['type_ID']."</td>";
            echo "</tr>";
        }
    ?>
    </table>
    
</body>
</html>