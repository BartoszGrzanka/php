<?php
include "functions.php";
if(isset($_GET['submit'])){
    $result=0;
    $fn=$_GET['fnumber'];
    if($_GET['snumber']==0){
        echo "Nie dziel przez 0";
    }
    else{
        switch ($_GET['operation']){
            case "+":
                echo add($_GET['fnumber'],$_GET['snumber']);
                break;
            case "-":
                echo sub($_GET['fnumber'],$_GET['snumber']);
                break;
            case "*":
                echo mul($_GET['fnumber'],$_GET['snumber']);
                break;
            case "/":
                echo div($_GET['fnumber'],$_GET['snumber']);
                break;
        }

    }

}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login tutorial</title>
</head>
<body>
<form action="index.php" method="get">
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
</form>
</body>
</html>
