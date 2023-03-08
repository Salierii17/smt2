
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
    <?php
    $x = $_POST["fn"];
    $y = $_POST["ln"];

    $n1 = $_POST["num1"];
    $n2 = $_POST["num2"];

    $str = $_POST["start"];
    $count = $_POST["count"];

    $a = $_POST["x"];
    $b = $_POST["y"];

    // $row = $_POST["row"];
    // $col = $_POST["col"];
    // $sym = $_POST["sym"];

    if(isset($_POST["FullName"])){
        echo "welcome yousym highnest ". $x." ".$y."<br>";
    }
    if(isset($_POST["add"])){
        echo  "$n1 + $n2 = ".$n1+$n2."<br>";
    }
    if(isset($_POST["sub"])){
        echo "$n1 - $n2 = ".$n1-$n2."<br>";
    }
    if(isset($_POST["multi"])){
        echo  "$n1 * $n2 = ".$n1*$n2."<br>";
    }
    if(isset($_POST["div"])){
        echo  "$n1 / $n2 = ".$n1/$n2."<br>";
    }
    if(isset($_POST["mod"])){
        echo "$n1 % $n2 = ".$n1%$n2."<br>";
    }
    if(isset($_POST["ex"])){
        echo "$n1 ^ $n2 = ".$n1**$n2."<br>";
    }
    if(isset($_POST["loop"])){
        for($c=0;$c<=$count;$c++){
            echo $str."<br>";
            $str+=1;
        }
    }
    if(isset($_POST["square"])){
        for($c=0;$c<$a;$c++){ 
            for($d=0;$d<$b;$d++){
                echo "O";
            }echo "<br>";
        }
    }
    // if(isset($_POST["table"])){
    //     echo"<table>";
    //     for($i=0; $i<$row;$i++){
    //             echo "<tr>";
    //         for($d=0;$d<$col;$d++){
    //             echo "<td>".$sym."</td>";
    //         }echo "</tr>";
    //         $symbol++;
    //     }echo "</table>";
    // }
    if(isset($_POST["pyramid"])){
        echo "\t1 <br>";
        for($c=0;$c<=$a;$c++){
            for($d=0;$c<$d;$d++){
                echo "1";
            }echo "<br>";
        }
    }

    ?>
    
    <a href="http://localhost/php%20Learning/week%207/index.php" type="button"value="return"></a>
</body>
</html>