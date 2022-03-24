<?php

$tablica["onas"] = ["nazwa"=>"O nas", "link"=>"onas", "tresc"=>"Witaj na stronie"];
$tablica["kontakt"] = ["nazwa"=>"Kontakt", "link"=>"kontakt", "tresc"=>"Tu masz pisz"];

$as=$_GET['link'];
    echo '<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>'.$tablica[$as]["nazwa"];
    echo'</title>
</head>
<body>';
echo "<h1>".$tablica[$as]["tresc"]."</h1>";
echo '<ul>';
    foreach($tablica as $a)
    {
        echo "<li> <a href='Zadanie4.2.php?link=".$a["link"]."'>".$a["nazwa"]."</a></li>";
    }
echo '</ul>
</body>
</html>';

//echo var_dump($tablica[0]["link"]);


