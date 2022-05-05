<?php
class Pokemon
{
    protected $name,$type,$hpMax,$hpCurrent;
    function __construct($name,$type,$hpMax){
        $this -> name =$name;
        $this -> type =$type;
        $this -> hpMax =$hpMax;
        $this -> hpCurrent = $hpMax;
    }

    public function getHpCurrent(){
        return $this ->hpCurrent;
    }

    public function attack($poke2){
            $poke2->hpCurrent = $poke2->hpCurrent-(5*1);
    }
}
/*
Ziemia->Woda->Ogień->Powietrze

 */