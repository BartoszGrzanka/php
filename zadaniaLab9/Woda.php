<?php
require_once("pokemon.php");
class Woda extends Pokemon{
    public $weak="Ziemia", $res="Ogien";
    public $isCofused;

    public function attack($poke2){
        $liczba=rand(0,9);
        if($liczba%2==0){
            $poke2->isCofused=true;
        }


        if($poke2->weak=="Woda"){
            $poke2->hpCurrent = $poke2->hpCurrent-(10+10);
        }
        elseif($poke2->res=="Woda"){
            $poke2->hpCurrent = $poke2->hpCurrent-(10-5);
        }
        else{
            $poke2->hpCurrent = $poke2->hpCurrent-(10);
        }

    }
}