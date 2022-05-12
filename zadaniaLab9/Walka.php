<?php
class Walka
{
    protected $poke1,$poke2;

    function __construct($poke1,$poke2)
    {
        $this->poke1 = $poke1;
        $this->poke2 = $poke2;
    }

    public function go(){

        while(true){
            if($this->poke1->isCofused==false) {
                echo $this->poke1->getName() . " zaatakował " . $this->poke2->getName() . "<br> ";
                $this->poke1->attack($this->poke2);
                echo $this->poke2->getName() . " " . $this->poke2->getHpCurrent() . "hp" . "<br>";
            }
            else{
                echo $this->poke1->getName()." jest ogłuszony nie może zaatakować.<br>";
                $this->poke1->isCofused=false;
            }

            if($this->poke2->isCofused==false) {
                echo $this->poke2->getName() . " zaatakował " . $this->poke1->getName() . "<br> ";
                $this->poke2->attack($this->poke1);
                echo $this->poke1->getName() . " " . $this->poke1->getHpCurrent() . "hp" . "<br>";
            }
            else{
                echo $this->poke2->getName()." jest ogłuszony nie może zaatakować.<br>";
                $this->poke2->isCofused=false;
            }

            if($this->poke1->getHpCurrent()<=0){
                echo $this->poke2->getName(). " WYGRYWA ";
                break;
            }
            if($this->poke2->getHpCurrent()<=0){
                echo $this->poke1->getName(). " WYGRYWA ";
                break;
            }
        }

    }

}