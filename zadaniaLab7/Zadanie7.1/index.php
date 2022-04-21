<?php
$imgDir="img";
$dir = scandir($imgDir);
array_shift($dir);
array_shift($dir);
$count = count($dir);
//$imgName=$dir["$imgId"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        img{
            margin: 20px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeria</title>
</head>
<body>
<?php
//var_dump($dir);
$id=0;
foreach ($dir as $a){
    echo "<a href='Zadanie7.2.php?id=".$id."'>";
    echo "<img src=\"$imgDir/$a\" alt=\"$a\" height='100px' width='100px'>";
    echo "</a>";
    $id++;
}
?>

</body>
</html>
