<?php
    function getexponen($x,$y){
            echo "<ul>";
        for($i=1;$i<=$y;$i++){
            echo "<li> list number is ".$i." of ". $x**$i."</li>"."<br>";
        } echo "</ul>";
    }
    function getexponen2(){
            echo "<ul>";
        for($i=1;$i<=5;$i++){
            echo "<li> list number is ".$i." of ". $i**2 ."</li>"."<br>"; 
        } echo "</ul>";
    }
?>

<?php
    echo getexponen(2,5);
    echo getexponen(10,10);
    echo getexponen2();
?>