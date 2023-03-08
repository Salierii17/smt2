<?php
    $start= "*";
    $space = "--";
    for($i=1; $i<5; $i++){
        for($j=0;$j<$i;$j++){
            echo $space;
            }echo $start;
            echo "<br>";
        }echo "<br> <br>";
?>

<?php
    function createtriangle($c,$r){
        $start= "*";
        $space = "--";
        for($c=5;$c<0;$c--){
            for($i=0; $i>$c; $i++){
            echo $space;
            }
            $r-=2;
            echo $start;
            echo "<br>";
        }
    }
    $i-=2;

?>
?>