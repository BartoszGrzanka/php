<?php
$a=4;
$b=5;
$h=10;
$choice="triangle";



function triangle($a,$h){

    $result=($a*$h)/2;
    echo "$result";
}

function rectangle($a,$b){
    $result=$a*$b;
    echo "$result";
}
function trapeze($a,$b,$h){
    $result=(($a+$b)*$h)/2;
    echo "$result";
}
switch($choice){
    case triangle:
        triangle($a,$h);
    break;
    case rectangle:
        rectangle($a,$b);
    break;
    case trapeze:
        trapeze($a,$b,$h);
    break;
    default:
        echo "Error";
}





