<?php
session_start();
if(isset($_SESSION['user'])){
//    $dbuser = 's24953';
//    $dbpass = 'Bar.Grza';
$dbpass='';
$dbuser='root';
    $db = new PDO("mysql:host=localhost;dbname=s24953", $dbuser,$dbpass) or die ("Wywaliłem sie");
    if(isset($_GET['id'])){
        $_SESSION['odbiorca']=intval($_GET['id']);
    }
    $sql="SELECT message.*,uzytkownicy.login from uzytkownicy 
        inner JOIN message on message.idNadawca=uzytkownicy.id 
        WHERE message.idOdbiorca=". $_SESSION['odbiorca'] . " or (message.idNadawca=".$_SESSION['odbiorca']." and message.idOdbiorca=".$_SESSION['user'].");";
    if (isset($_POST['submit'])){

        $sqlAdd="INSERT INTO message(idNadawca, idOdbiorca, wiadomość) VALUES ("
            .$_SESSION['user']." , "
            .$_SESSION['odbiorca']." , \" "
            . $_POST['wiadomosc']."\")";
            $queryadd=$db->query($sqlAdd);

            unset($_POST);
            header("Location:chat.php");
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Chat</title>
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
    <div style="width: 50%">
    <?php
    foreach ($db->query($sql) as $row) {
        //var_dump($odbiorca);
        if($row['idNadawca']==$_SESSION['user']){
            echo '<div style="text-align: left">';
            echo $row['login'].": <br>";
            echo $row['wiadomość']."<br>";
            echo '</div>';
        }
        elseif($row['idNadawca']==$_SESSION['odbiorca']){
            echo '<div style="text-align: right">';
            echo $row['login'].": <br>";
            echo $row['wiadomość']."<br>";
            echo '</div>';
        }
    }
    ?>
        <div style="margin: 0 auto;width: 50%">
        <form action="chat.php" method="post" style="margin-top: 20px;">
            <label for="wiadomosc">Napisz wiadomość</label><br>
            <input type="text" name="wiadomosc" id="wiadomosc" required>
            <input type="submit" name="submit">
        </form>
        </div>
    </div>
    <button><a href="main.php"><h3>Powrót</h3></a></button>
    <button><a href="logout.php"><h3>Wyloguj</h3></a></button>
    </body>
    </html>
    <?php
}else
{
    echo "<h1>Zaloguj sie</h1>";
    header("Refresh:3; url=login.php");
}
?>