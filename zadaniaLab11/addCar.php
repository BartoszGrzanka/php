<?php
session_start();
if(isset($_SESSION['user'])){

$dbuser = 's24953';
$dbpass = 'Bar.Grza';
//$dbpass='';
//$dbuser='root';
$db = new PDO("mysql:host=localhost;dbname=s24953", $dbuser,$dbpass) or die ("Wywaliłem sie");
    foreach ($db->query('SELECT max(id) FROM samochody') as $row){
        $max=$row['max(id)']+1;
    }
    if(isset($_POST['addCar'])){
        $id=$max;
        $marka=$_POST['marka'];
        $model=$_POST['model'];
        $cena=$_POST['cena'];
        $rok=$_POST['rok'];
        $opis=$_POST['opis'];
        $uzytkownikId=$_SESSION['user'];
        $sqladd="INSERT INTO samochody(id, marka, model, cena, rok, opis, uzytkownikId)
        VALUES ( ". $id . " , \"" . $marka . "\" , \"" . $model . "\" , " . $cena . " , " . $rok . " , \"" . $opis . "\" , " . $uzytkownikId.")";
        $queryup=$db->query($sqladd);
        //$queryup->execute();

    }
echo '<form action="addCar.php" method="post">
    Marka<br>
    <input type="text" name="marka" required>
    <br>
    Model<br>
    <input type="text" name="model" required>
    <br>
    Cana<br>
    <input type="number" name="cena" step="any" required>
    <br>
    Rok<br>
    <input type="number" name="rok" required>
    <br>
    Opis<br>
    <input type="text" name="opis" required>
    <br>
    <input type="submit" name="addCar" value="Submit">
    </form>';
    echo "<button><a href='admin.php'>Główna</a></button>";
    echo "<button><a href='logout.php'>WYLOGUJ</a></button>";
}