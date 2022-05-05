<?php
include "pokemon.php";
include "Woda.php";
$poke1=new Pokemon('Squirtle','Woda',50);
$poke2=new Pokemon('Squirtle','Woda',50);
$poke1->attack($poke2);
echo $poke2->getHpCurrent();

