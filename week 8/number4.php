<?php
    function createtriangle1($c){
        $start= "*";
        $space = "--";
        for($c;$c>0;$c--){
            for($i=0; $i<$c; $i++){
            echo $space;
            }
            echo $start;
            echo "<br>";
        }
    }
    echo createtriangle1(5);
    function createtriangle3($c){
        $start= "*";
        $space = "--";
        for($d=0;$d<$c;$d++){
            for($c; $c>0;$c--){
            echo $space;
            }
            echo $start;
            echo "<br>";
        }
    }
    echo createtriangle3(5);
    // function createtriangle2($c,$i){
    //     $start= "*";
    //     $space = "--";
    //     for($d=0;$d<$c;$d++){
    //         for($i; $i>0;$i--){
    //         echo $space;
    //         }
    //         echo $start;
    //         echo "<br>";
    //     }
    // }
    // echo createtriangle2(5,5);
?>
<br><br><br><br>

<?php


?>
