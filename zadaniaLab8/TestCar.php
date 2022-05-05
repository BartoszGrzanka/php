<?php
include "Car.php";
$car1 = new Car();
$car1->setId(0);
$car1->setCena('100000');
$car1->setMarka("Mustang");
echo $car1->getId()."<br>";
echo $car1->getCena()."<br>";
echo $car1->getMarka()."<br>";

$car1 = new Car(1,"Bajo","Jajo",2137);
echo $car1->getId()."<br>";
echo $car1->getMarka()."<br>";
echo $car1->getModel()."<br>";
echo $car1->getRok()."<br>";
