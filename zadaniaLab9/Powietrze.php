<?php
require_once("pokemon.php");
class Powietrze extends Pokemon{
    public $weak="Ogien", $res="Ziemia";
    public $isCofused;

    public function attack($poke2){
        $liczba=rand(0,9);
        if($liczba%2==0){
            $poke2->isCofused=true;
        }


        if($poke2->weak=="Powietrze"){
            $poke2->hpCurrent = $poke2->hpCurrent-(10+10);
        }
        elseif($poke2->res=="Powietrze"){
            $poke2->hpCurrent = $poke2->hpCurrent-(10-5);
        }
        else{
            $poke2->hpCurrent = $poke2->hpCurrent-(10);
        }

    }
}