<?php
$file = fopen("read","r")or die("umarłem");
while (!feof($file) ) {
    $tablica[] = fgetcsv($file);
}
fclose($file);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>edytuj</title>
</head>
<body>
<h2>Menu:</h2>
<?php
//var_dump($tablica);
echo '<ul>';
    echo "<li> <a href='edit.php'>Edytuj plik</a></li>";
    foreach($tablica as $a)
    {
    echo "<li> <a href='index.php?1=".$a["1"]."'>".$a["0"]."</a></li>";
    }
    echo '</ul>';?>



<h2>Zawartość pliku:</h2>
<?php
$i=1;
$file = fopen("read","r")or die("umarłem");
while (!feof($file) ) {
    echo "Linia numer: ".$i." \"" .fgets($file) . "\"<br> ";
    $i++;
}
fclose($file);
//echo $tablica[0][0].$tablica[0][1].$tablica[0][2];
//echo count($tablica);
?>
<h3>Dodaj nową linie</h3>
<form action="handle.php" method="post">
    <label for="name1">Nazwa strony</label><br>
    <input type="text" id="name1" name="nameAdd"><br>
    <label for="insides1">Treść</label><br>
    <input type="text" id="insides1" name="insidesAdd"><br>
    <input type="submit" name="add">
</form>
<h3>Usuń linie</h3>
<form action="handle.php" method="post">
    <label for="lineRemove">Linia do usunięcia</label><br>
    <input type="number" id="lineRemove" name="lineRemove" min="0" max="<?php echo count($tablica);?>"><br>
    <input type="submit" name="del">
</form>

<h3>Edytuj linie</h3>
<form action="handle.php" method="post">
    <label for="lineToEdi">Linia do edycji</label><br>
    <input type="number" id="lineEdit" name="lineToEdit" min="1" max="<?php echo count($tablica);?>" required><br>
    <label for="namEdit">Edycja nazwy</label><br>
    <input type="text" id="namEdit" name="namEdit"><br>
    <label for="insidesEdit">Linia do edycji</label><br>
    <input type="text" id="insidesEdit" name="insidesEdit"><br>
    <input type="submit" name="edit">
</form>
</body>
</html>
