<?php
function checklist($x){
    if($x==1){
        echo "This is the first number";
    }
    if($x==2){
        echo "This is the second number";
    }
    if($x==3){
        echo "This is the third number";
    } }

    for ($i=1;$i<4;$i++){
        echo checklist($i)."<br>";
    }
?>