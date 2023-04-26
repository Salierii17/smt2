<?php
include "config.php";

session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Hotel 88</title>
    <link rel="stylesheet" href=".css">i
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
        $_SESSION['cus_user']=$x;
        $_SESSION['cus_pass']=$y;
        $check = mysqli_num_rows($result);
        
        if($check>0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<br>"." welcome back ".$row["cus_user"];
                header("location: booking.php");

            }
        }else{
            echo "<br>"."incorrect username or password, <br> try again";
        }
        
    }                 
    ?>
</body>
</html>