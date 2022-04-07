<?php
/* w głównym pliku stwórz formularz dla użytkownika (rodzaj jedzenia - wybór z listy
według cennika; dodatki - checkboxy według cennika; ilość - miejsce na wpisanie
liczby; uwagi - miejsce na wpisanie tekstu)
*/
include "funkcje.php";
include 'dane.php';


//var_dump($tablicaDanie);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jedzonko</title>
</head>
<body>
<form action="index.php" method="get">
    <label for="jedzenie">Wybierz danie:</label>
    <select name="jedzenie" id="jedzenie">
        <?php
        $i=0;
        foreach ($tablicaDanie as $a){
            echo '<option value="'.$i.'">'.$a["danie"]." Cena: ". $a["cena"].'</option>';
            $i++;
        }
       ?>
    </select><br>
    <label for="ilosc">Wybierz ilosc:</label>
    <input type="number" name="ilosc" id="ilosc" required>
    <h3>Dodatki: </h3>
    <?php
    $i=0;
    foreach ($tablicaDodatki as $a){
        echo '<label for="addon'.$i.'">'.$a['dodatek']." ".$a['cena'].'zł</label>';
        echo '<input type="checkbox" name="'.$i.'" id="addon'.$i.'" value="1"><br>';
        $i++;
    }
    ?>

    <input type="submit" name="submit" value="submit">
</form>
<?php
if (isset($_GET['submit'])) {
echo "<h3>Cena</h3>";
$rodzaj = $_GET['jedzenie'];
$ilosc = $_GET['ilosc'];

for ($i = 0; $i < count($tablicaDodatki); $i++) {
if ($_GET[$i] == 1)
$dodatki[$i] = $tablicaDodatki[$i];
}
$rodzaj = (int)$rodzaj;
$ilosc = (int)$ilosc;
//var_dump($rodzaj,$ilosc,$dodatki);
echo oblicz($rodzaj, $ilosc, $dodatki);
}?>


</body>
</html>
