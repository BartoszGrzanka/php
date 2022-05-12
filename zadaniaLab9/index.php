<?php
include 'Woda.php';
include 'Powietrze.php';
include 'Walka.php';

$poke1=new Woda('Squirtle','Woda',50);
$poke2=new Powietrze('Mantine','Powietrze',70);


$walka = new Walka($poke1,$poke2);
$walka->go();