<?php
function getnumber($co1,$co2,$co3){
    if($co1%2==0){
        for ($i=0;$i<$co2;$i++){
            $co3+=$co2;
        }  echo $co3;
    }else{
        for ($i=0;$i<$co3;$i++){
            $co2+=$co3;
        }echo $co2;
    }
}
?>

<?php
    echo getnumber(52,2,5);
    echo "<br>";
    echo getnumber(53,3,5);
    echo "<br>";
    echo getnumber(59,9,5);
?>