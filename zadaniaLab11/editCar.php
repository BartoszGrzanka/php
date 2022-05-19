<?php
session_start();
if(isset($_SESSION['user'])){
$dbuser = 's24953';
$dbpass = 'Bar.Grza';
$db = new PDO("mysql:host=localhost;dbname=s24953", $dbuser,$dbpass) or die ("Wywaliłem sie");
$max=0;
foreach ($db->query('SELECT max(id) FROM samochody') as $row){
    $max=$row['max(id)'];
}
//var_dump($max);
$min=1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>car info</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php
if(isset($_GET['id'])&&$_GET['id']>=$min && $_GET['id']<=intval($max)){
    $sql = "SELECT * FROM samochody where id=".$_GET['id'];
    echo '<table>';
    echo '<tr>';
    echo "<td>id</td>";
    echo '<td>marka</td>';
    echo '<td>model</td>';
    echo '<td>cena</td>';
    echo '<td>rok</td>';
    echo '<td>opis</td>';
    echo '</tr>';
    foreach ($db->query($sql) as $row) {
        echo '<tr>';
        echo "<td>".$row['id'] ."</td>";
        echo '<td>'.$row['marka'] ."</td>";
        echo '<td>'.$row['model'] ."</td>";
        echo '<td>'.$row['cena'] ."</td>";
        echo '<td>'.$row['rok'] ."</td>";
        echo '<td>'.$row['opis'] ."</td>";
        echo '</tr>';
    }
    echo '</table>';

    echo '<h2>EDYTUJ SWÓJ SAMOCHÓD</h2>';
//    markę, model, cenę, rok i opis
    echo '<form action="editCar.php" method="post">
    <input type="text" name="marka" required>
    <br>
    <input type="text" name="model" required>
    <br>
    <input type="int" name="cena" step="any" required>
    <br>
    <input type="int" name="rok" required>
    <br>
    <input type="text" name="opis" required>
    <br>
    <input type="submit" name="submit" value="Submit">
    </form>';

    echo '<button><a href="admin.php">Powrót</a></button>';
}
else{
    echo "ERROR";
}}else{
    echo "Idź sie zaloguj";
}
?>

</body>
</html>
