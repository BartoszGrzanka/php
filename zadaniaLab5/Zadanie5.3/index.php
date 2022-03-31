<?php
$file = fopen("read","r")or die("umarłem");
while (!feof($file) ) {
    $tablica[] = fgetcsv($file);
}
//var_dump($tablica);

//$tablica["onas"] = ["nazwa"=>"O nas", "link"=>"onas", "tresc"=>"Witaj na stronie"];
//$tablica["kontakt"] = ["nazwa"=>"Kontakt", "link"=>"kontakt", "tresc"=>"Tu masz pisz"];
$valid="0";
if(isset($_GET['1'])){
    $as=$_GET['1'];
    foreach ($tablica as $x){
        if($x["1"]==$as){
            $valid=$x["1"];
        }
    }
    $as=$valid;
}
else{
    $as="0";
}

echo '<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>'.$tablica[$as]["0"];
echo'</title>
</head>
<body>';
echo "<h1>".$tablica[$as]["2"]."</h1>";
echo '<ul>';
    foreach($tablica as $a)
    {
        echo "<li> <a href='index.php?1=".$a["1"]."'>".$a["0"]."</a></li>";
    }
echo '</ul>
</body>
</html>';

//echo var_dump($tablica[0]["link"]);


?>