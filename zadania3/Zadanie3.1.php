<?php

echo '<form action="Zadanie3.1.php" method="get">
  <label for="fnumber">First number:</label><br>
  <input type="number" name="fnumber" step="any" required><br>
  
  <label for="snumber">Second number:</label><br>
  <input type="number" name="snumber" step="any" required><br>
  
  <label for="operation">Operation:</label><br>
  <select name="operation">
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
  <option value="/">/</option>
</select><br><br>
  
  <input type="submit" name="submit" value="Submit">
</form>';

if(isset($_GET['submit'])){
    $result=0;
    switch ($_GET['operation']){
        case "+":
            $result = $_GET['fnumber'] + $_GET['snumber'];
            break;
        case "-":
            $result = $_GET['fnumber'] - $_GET['snumber'];
            break;
        case "*":
            $result = $_GET['fnumber'] * $_GET['snumber'];
            break;
        case "/":
            $result = $_GET['fnumber'] / $_GET['snumber'];
            break;
    }
    echo $_GET['fnumber'].$_GET['operation'].$_GET['snumber']."=".$result;
}