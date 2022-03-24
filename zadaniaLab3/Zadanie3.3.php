<?php

echo '<form action="Zadanie3.3.php" method="get">
  <label for="dateStart">Date start:</label><br>
  <input type="date" name="dateStart" required><br>
  
  <label for="dateEnd">Date end:</label><br>
  <input type="date" name="dateEnd" required><br>
  
  <label for="personQuantity">Osoby:</label><br>
  <select name="personQuantity">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select><br><br>
  
  <input type="submit" name="submit" value="Submit">
</form>';

if(isset($_GET['submit'])){
    $personQuantity=$_GET['personQuantity'];
    $dateStart=$_GET['dateStart'];
    $dateEnd=$_GET['dateEnd'];

}