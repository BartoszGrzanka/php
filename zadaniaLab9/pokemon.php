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
        if($this->type=='Woda' && $poke2->type =='Ogień'){
            $poke2->hpCurrent = $poke2->hpCurrent-(5*2);
        }
        elseif($this->type=='Ogień' && $poke2->type =='Powietrze'){
            $poke2->hpCurrent = $poke2->hpCurrent-(5*2);
        }
        elseif($this->type=='Powietrze' && $poke2->type =='Ziemia'){
            $poke2->hpCurrent = $poke2->hpCurrent-(5*2);
        }
        elseif($this->type=='Ziemia' && $poke2->type =='Woda'){
            $poke2->hpCurrent = $poke2->hpCurrent-(5*2);
        }
        else{
            $poke2->hpCurrent = $poke2->hpCurrent-(5*1);
        }
    }
}
/*
Ziemia->Woda->Ogień->Powietrze

 */