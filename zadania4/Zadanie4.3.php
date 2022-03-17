<?php
function multiplicationTable($a){
    echo "<table border=\"1\">";
    for($i=1;$i<=$a;$i++){
        echo "<tr>";
       for($j=1;$j<=$a;$j++){
            echo '<td>'.$j*$i.'</td>';
       }
       echo '</tr>';
   }
    echo "</table>";

}





$a = 7;
multiplicationTable($a);