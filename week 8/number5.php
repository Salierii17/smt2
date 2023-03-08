<?php
    function getexponen($x,$y){
        for($i=1;$i<=$y;$i++){
            echo "list number is ".$i." of ". $x**$i."<br>"; 
        }
    }
?>

<?php
    echo getexponen(2,5);
?>