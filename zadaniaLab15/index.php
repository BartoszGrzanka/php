<?php
session_start();
$dbuser = 's24953';
$dbpass = 'Bar.Grza';
//$dbpass='';
//$dbuser='root';
$db = new PDO("mysql:host=localhost;dbname=s24953", $dbuser,$dbpass) or die ("Wywaliłem sie");
$sql="SELECT * FROM pytania";
$query=$db->query($sql);
$result=$query->fetchAll(PDO::FETCH_NUM);
//var_dump($result);
$random = array_rand($result,3);
$_SESSION['random']=$random;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Super egzamin</title>
</head>
<body>

    <form action="wynik.php" method="post">
        Podaj nazwisko:
        <input type="text" name="nazwisko" required><br>
        <?php
        foreach ($random as $r){
            $r = intval($r);
            $pytanieId = $r+1;
            $sqlAnswers="SELECT * from odpowiedzi where idPytanie=".$pytanieId;
            $queryAnswers=$db->query($sqlAnswers);
            $resultAnswers=$queryAnswers->fetchAll(PDO::FETCH_NUM);
            echo $result[$r][1]."<br>";
            foreach($resultAnswers as $answer){
                //var_dump($answer);
                    echo '<input type="radio" value="'.$answer[0].'" name="'.$r.'" required> '.$answer[1].'<br>';
            }
        }
        ?>
        <input type="submit" name="submit">
    </form>
</body>
</html>