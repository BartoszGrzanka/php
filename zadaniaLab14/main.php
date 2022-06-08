<?php
session_start();
if(isset($_SESSION['user'])){
//    $dbuser = 's24953';
//    $dbpass = 'Bar.Grza'
$dbpass='';
$dbuser='root';
    $db = new PDO("mysql:host=localhost;dbname=s24953", $dbuser,$dbpass) or die ("Wywaliłem sie");
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Main</title>
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
    $sql = 'SELECT id,login FROM uzytkownicy where id!='.$_SESSION['user'];
    echo '<table>';
    echo '<tr>';
    echo '<td>nick</td>';
    echo '<td>otworz chat</td>';
    echo '</tr>';
    foreach ($db->query($sql) as $row) {
        echo '<tr>';
        echo "<td>".$row['login'] . "</td>";
        echo '<td><a href="chat.php?id=' . $row['id'] . '">Czytaj dalej</a> <br></td>';
        echo '</tr>';
    }
    echo '</table>';

    ?>
    <button><a href="logout.php"><h3>Wyloguj</h3></a></button>
    </body>
    </html>
<?php
}else{
    echo "<h1>Zaloguj sie</h1>";
    header("Refresh:3; url=login.php");
}
?>
