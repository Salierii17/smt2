<!DOCTYPE html>
<html lang="en">
<head>\
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    function createtable($r,$c,$x){
        echo"<table>";
        for($j=0;$j<$c;$j++){
            echo "<tr>";
            for($i = 0;$i<$c;$i++){
                echo "<td> $x </td>";
                $x+=1;
            }echo "<tr>";
        }echo "</table>";
    } 
    ?>
    <div class="table">
    <?php
        echo createtable(3,3,1);
    ?>
    </div>


    

    
</body>
</html>