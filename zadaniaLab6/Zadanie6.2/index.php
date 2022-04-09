<?php
include 'cartHandle.php';
$file = fopen("produkty","r")or die("umarłem");
while (!feof($file) ) {
    $tablica[] = fgetcsv($file);
}
for($i=0;$i<count($tablica);$i++) {
    if (isset($_GET['add'.$i])){
        dodaj($i);
    }
    }
for($i=0;$i<count($tablica);$i++) {
    if (isset($_GET['del'.$i])){
        usun($i);
    }
}
if(isset($_GET['clear'])){
    wyczysc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kosz</title>
</head>
<body>
<table>
    <form method="get">
<?php
//var_dump($tablica);
$i=0;
foreach($tablica as $a){
    echo '<tr>';
    echo "<td>".$a[0]."</td><td>".$a[1]."</td><td>".$a[2]."zł </td>";
    echo '<td><input type="submit" name="add'.$i.'" value="do koszyka"><br></td>';
    $i++;
    echo '</tr>';
}
?>
    </form>
</table>
<h1>Koszyk</h1>
<?php
if(!empty($_SESSION['cart'])){
    echo '<table>
    <form method="get">';

        //var_dump($tablica);
        $i=0;
        foreach($_SESSION['cart'] as $a){
            if($a[1]>0){
                echo '<tr>';
                echo "<td>".$a[0]."</td><td>".$a[1]."</td><td>".$a[2]."zł </td>";
                echo '<td><input type="submit" name="del'.$i.'" value="usuń"><br></td>';
                $i++;
                echo '</tr>';
            }
            else{
                echo '<tr hidden>';
                echo "<td>".$a[0]."</td><td>".$a[1]."</td><td>".$a[2]."zł </td>";
                echo '<td><input type="submit" name="del'.$i.'" value="usuń"><br></td>';
                $i++;
                echo '</tr>';
            }
        }
        echo "Total price: ".$_SESSION['totalPrice'];
        echo '<tr><td><input type="submit" name="clear" value="wyczyść"></td></tr>
    </form>
    </table>';
}
?>
</body>
</html>