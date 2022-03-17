<?php

function d6($number){
    $array=array();
    for($i=0;$i<$number;$i++){
        $throw = rand(1, 6);
        $array[$i]=$throw;
    }
    return $array;
}
$number=3;

$array=d6($number);
var_dump($array);