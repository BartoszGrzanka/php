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


if(isset($_GET['id'])){
    $id = $_GET['id'];
    if($id>=0 and $id <=3){
        echo $car[$id]->getMarka()."<br>";
        echo $car[$id]->getModel()."<br>";
        echo $car[$id]->getRok()."<br>";
        echo $car[$id]->getCena()."<br>";
        echo $car[$id]->getPojemnosc()."<br>";
        echo '<img src="'. $car[$id]->getImg() .'"><br>';


    }
    else{
        echo "Error: brak takiego id w bazie";
    }
}
fclose($file);