<?php
session_start();
$dbuser = 's24953';
$dbpass = 'Bar.Grza';
//$dbpass='';
//$dbuser='root';
$db = new PDO("mysql:host=localhost;dbname=s24953", $dbuser,$dbpass) or die ("Wywaliłem sie");

if (isset($_POST['submit'])) {
    //echo $_POST['login'].$_POST['password'];
    $sql='SELECT * FROM uzytkownicy where login="'.$_POST['login'].'" and haslo="'.$_POST['password'].'"';
    $query=$db->query($sql);
    $query->execute();
    $result= $query->fetch(PDO::FETCH_OBJ);
    //var_dump($query->rowCount());
    //echo $query->rowCount();
    if(!empty($result)){
        $_SESSION['user']=$result->id;
        echo $result->id;
    }
    else{
        echo "LoginError";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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

if(!isset($_SESSION['user'])){



    echo '<form action="admin.php" method="post">
    <input type="text" name="login" required>
    <br>
    <input type="password" name="password" required>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>';
}
else{
    if(isset($_GET['mainId'])){
        $mainId=$_GET['mainId'];
    }
    else{
        $mainId=1;
    }
    if($mainId>1){
        $prev=$mainId-1;
    }
    else{
        $prev = 1;
    }
    $next=$mainId+1;
    //var_dump(intval($_SESSION['user']));
    $sql2='SELECT * from samochody where uzytkownikId="'.intval($_SESSION['user']) .'"';
    $query2=$db->query($sql2);
    $query2->execute();
    $result2=$query2->fetchAll(PDO::FETCH_ASSOC);

    echo '<table>';
    echo '<tr>';
    echo "<td>id</td>";
    echo '<td>marka</td>';
    echo '<td>model</td>';
    echo '<td>czytaj dalej</td>';
    echo '</tr>';
    //var_dump($temp);
    //var_dump($result2);
    //($result2[$temp] as $row);


    if(intval($mainId)==1){
        $temp = intval($mainId);
    }
    else{
        $temp = intval($mainId)*5;
    }
    $i=0;

    while(true) {
        //var_dump($row['id']);
        echo '<tr>';
        echo "<td>".$result2[$temp]['id'] . "</td>";
        echo "<td>".$result2[$temp]['marka'] . "</td>";
        echo "<td>".$result2[$temp]['model'] . "</td>";
        echo '<td><a href="editCar.php?id=' . $result2[$temp]['id'] . '">Czytaj dalej</a> <br></td>';
        echo '</tr>';
        $i=$i+1;
        $temp=$temp+1;
        //var_dump($temp);
        if($i==5){
            break;
        }
    }
    echo '</table>';
    echo '<button><a href="admin.php?mainId='.$prev.'">Poprzednie</a></button>';
    echo '<button><a href="admin.php?mainId='.$next.'">Następne</a></button>';
    echo "<button><a href='addCar.php'>Dodaj auto</a></button>";
    echo "<button><a href='logout.php'>WYLOGUJ</a></button>";
}
?>
</body>
</html>
