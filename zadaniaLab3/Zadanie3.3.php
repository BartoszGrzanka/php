<?php
$tariff=array("Polska"=>30,"Hiszpania"=>50);

echo '<form action="Zadanie3.3.php" method="get">
  <label for="dateStart">Date start:</label><br>
  <input type="date" name="dateStart" required><br>
  
  <label for="dateEnd">Date end:</label><br>
  <input type="date" name="dateEnd" required><br>
  
  <label for="country">Kraj:</label><br>
  <select name="country">';
    foreach ($tariff as $x => $xv){
        echo "<option value=\"" . $x."\">".$x."</option>";
    }
  //<option value="Polska">Polska</option>
  //<option value="Hiszpania">Hiszpania</option>
echo '</select><br>
  
  <label for="personQuantity">Osoby:</label><br>
  <select name="personQuantity">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select><br><br>
  
  <input type="submit" name="submit" value="Submit">
</form>';





/*
foreach ($tariff as $x => $xv){
    echo $x . " price " . $xv;
    echo "<br>";
}
*/

if(isset($_GET['submit'])){
    $personQuantity=$_GET['personQuantity'];
    $dateStart=$_GET['dateStart'];
    $dateEnd=$_GET['dateEnd'];
    $country=$_GET['country'];
    //echo $country;
    if($dateEnd>$dateStart){
        $temp1=strtotime($dateStart);
        $temp2=strtotime($dateEnd);
        $days=$temp2-$temp1;
        $days=$days/86400;
        $price = $tariff[$country]*$days*$personQuantity;

        echo "Wyjazd: ". $dateStart . " do ". $dateEnd . " ".$country."<br>";
        echo $days . " dni<br>";
        echo $personQuantity . " osób<br>";
        echo $price."zł<br>";

    }
    else{
        echo "Error: nie możesz zakończyć podruży przed jej startem";
    }


}