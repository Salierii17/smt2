<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array</title>
</head>
<body>
    <h1> array in php</h1>
    <h2>
    <?php
        $array1 = array("student1", "student2", "student3");
            echo $array1[0]."<br>";
            echo $array1[1]."<br>";
            echo $array1[2]."<br>";
            echo "<br>";

        $array2 = array("student4", "student5", "student6");
            for($i=0; $i<=2;$i++){
                echo $array2[$i]."<br>";
            }echo "<br>";
        
        $array3 = array();
        $idStudent = 7;
            for($i=0;$i<=2;$i++){
                $array3[$i]= "student".$idStudent;
                echo $array3[$i]."<br>";
                $idStudent+=1;
            }echo "<br>";
        
        $array4 = array("student10","student10","student11","student12","student13");
        $numindeks = count($array4);
        echo"the number of data inside the array is ". $numindeks."<br>"."data :"."<br>";
            for($i=1;$i<$numindeks;$i++){
                
                echo $i.". ".$array4[$i]."<br>";
            }echo "<br>";

        $array5 = array(30,20,25);
        $array['30']='3'
    ?>
    </h2>
</body>
</html>