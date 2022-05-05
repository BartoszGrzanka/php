<?php
include "Car.php";
$index = 0;
$file = fopen("file.csv","r")or die("umarłem");
while (!feof($file) ) {
    $tablica[] = fgetcsv($file);
}

foreach ($tablica as $a){
   $car[$index] = new Car($a[0],$a[1],$a[2],$a[3],$a[4],$a[5],$a[6]);
       $index++;
}
//echo $car[1]->getMarka();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            box-sizing: border-box;
        }
        img{
            width : 300px;
            height: 300px;
        }
        .fotki{
            padding: 50px 10px;
            width : 25%;
            height: 400px;
            float: left;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeria</title>
</head>
<body>
<?php
    foreach ($car as $a){
        echo '<div class="fotki">';
        echo '<a href="samochod.php?id='. $a->getId().'"><img src="'. $a->getImg() .'"><br>';
        echo '<p>'. $a->getMarka() ." ". $a->getModel().'</p></a>';
        echo '</div>';
    }
    fclose($file);
?>



</body>
</html>

