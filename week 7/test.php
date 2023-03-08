
<?php
        $row = $_POST["row"];
        $col = $_POST["col"];
        $sym = $_POST["sym"];

        if(isset($_POST["table"])){
            echo"<table>";
            for($i=0; $i<$row;$i++){
                    echo "<tr>";
                for($d=0;$d<$col;$d++){
                    echo "<td>".$sym."</td>";
                    $sym++;
                }echo "</tr>";
            }echo "</table>";
        }
    ?>
