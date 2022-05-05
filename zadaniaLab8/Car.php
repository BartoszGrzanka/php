<?php

class Car
{
    private $id;
    private $marka;
    private $model;
    private $rok;
    private $cena;
    private $pojemnosc;
    private $img;
    /*-------------------construct-----------------------*/
    function __construct($id,$marka,$model,$rok,$cena,$pojemnosc,$img){
        $this ->id = $id;
        $this ->marka = $marka;
        $this ->model = $model;
        $this ->rok = $rok;
        $this ->cena = $cena;
        $this ->pojemnosc = $pojemnosc;
        $this ->img = $img;
    }


    /*-------------------GET-----------------------*/
    public function getId(){
        return $this ->id;
    }
    public function getMarka(){
        return $this ->marka;
    }
    public function getModel(){
        return $this ->model;
    }
    public function getRok(){
        return $this ->rok;
    }
    public function getCena(){
        return $this ->cena;
    }
    public function getPojemnosc(){
        return $this ->pojemnosc;
    }
    public function getImg(){
        return $this ->img;
    }
    /*-------------------SET-----------------------*/
    public function setId($var){
        $this->id = $var;
    }
    public function setMarka($var){
        $this->marka = $var;
    }
    public function setModel($var){
        $this->model = $var;
    }
    public function setRok($var){
        $this->rok = $var;
    }
    public function setCena($var){
        $this->cena = $var;
    }
    public function setPojemnosc($var){
        $this->pojemnosc = $var;
    }
    public function setImg($var){
        $this->img = $var;
    }
}