<?php
echo '<form action="Zadanie3.2.php" method="get">
  <label for="fnumber">First number:</label><br>
  <input type="number" name="fnumber" required><br>
    <input type="submit" name="submit" value="Submit">
</form>';


function primeNumber2($n){
    $iterator=1;
    if($n<=1){
        return "Not Prime".$iterator;
    }
    if($n==2){
        return "Prime".$iterator;
    }
    if($n%2==0){
        return "Not Prime ".$iterator;
    }

    $ceil = ceil(sqrt($n));

    for($i = 3; $i <= $ceil; $i = $i + 2) {
        if($n % $i == 0){
            return "Not Prime".$iterator;
        }
        $iterator++;
    }
    return "Prime".$iterator;
}
if(isset($_GET['submit'])){
        echo primeNumber2($_GET['fnumber']);

}
