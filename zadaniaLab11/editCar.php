<?php
session_start();
if(isset($_SESSION['user'])){
//$dbuser = 's24953';
//$dbpass = 'Bar.Grza';
$dbpass='';
$dbuser='root';
$db = new PDO("mysql:host=localhost;dbname=s24953", $dbuser,$dbpass) or die ("Wywaliłem sie");
$max=0;
foreach ($db->query('SELECT max(id) FROM samochody') as $row){
    $max=$row['max(id)'];
}
//var_dump($max);
$min=1;

if(isset($_POST['editCar'])){
    $sqlc1="SELECT * FROM samochody where id=".$_SESSION['carId'];
    $queryc1=$db->query($sqlc1);
    $queryc1->execute();
    $result= $queryc1->fetch(PDO::FETCH_OBJ);
    //var_dump($result->uzytkownikId);
    if($result->uzytkownikId==$_SESSION['user']){
        $marka=$result->marka;
        $model=$result->model;
        $cena=$result->cena;
        $rok=$result->rok;
        $opis=$result->opis;
        if(!empty($_POST['marka'])){
            $marka=$_POST['marka'];
        }
        if(!empty($_POST['model'])){
            $model=$_POST['model'];
        }
        if(!empty($_POST['cena'])){
            $cena=$_POST['cena'];
        }
        if(!empty($_POST['rok'])){
            $rok=$_POST['rok'];
        }
        if(!empty($_POST['opis'])){
            $opis=$_POST['opis'];
        }
        $sqlup="UPDATE samochody SET marka=\"".$marka. "\",model=\"".$model. "\",cena=".$cena. ",rok=".$rok. ",opis=\"".$opis. "\" WHERE id=".$_SESSION['carId'];
        $queryup=$db->query($sqlup);
        $queryup->execute();
    }
    else{
        echo "not your car";
    }
}

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
if(isset($_GET['id'])&&$_GET['id']>=$min && $_GET['id']<=intval($max)||$_SESSION['carId']){

    if(isset($_GET['id'])){
        $sql = "SELECT * FROM samochody where id=".$_GET['id'];
        $_SESSION['carId']=$_GET['id'];
    }
    else{
        $sql = "SELECT * FROM samochody where id=".$_SESSION['carId'];
    }

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
    Marka<br>
    <input type="text" name="marka">
    <br>
    Model<br>
    <input type="text" name="model">
    <br>
    Cana<br>
    <input type="number" name="cena" step="any">
    <br>
    Rok<br>
    <input type="number" name="rok">
    <br>
    Opis<br>
    <input type="text" name="opis">
    <br>
    <input type="submit" name="editCar" value="Submit">
    </form>';

    echo "<button><a href='admin.php'>Główna</a></button>";
    echo "<button><a href='logout.php'>WYLOGUJ</a></button>";
}
}else{
    echo "Idź sie zaloguj";
}
?>

</body>
</html>
