<?php
$array=array(2,3,7,6,4,1);


function maxFor($array){
    $n=count($array);
    $max=$array[0];
    for($i = 0; $i < $n; $i++)
    {
        if($array[$i]>$max){
            $max=$array[$i];
        }
    }
    return $max;

}
/////////////////////////////////////////////////
////////////////////////////////////////////////
function maxWhile($array){
    $n=count($array);
    $max=$array[0];
    $i=0;
    while($i<$n){
        if($array[$i]>$max){
            $max=$array[$i];
        }
        $i++;
    }
    return $max;
}
/////////////////////////////////////////////////
////////////////////////////////////////////////
function maxForeach($array){
    $max=$array[0];
foreach($array as $d)
{
    if($d > $max){
        $max=$d;
    }
}
return $max;
}
/////////////////////////////////////////////////
////////////////////////////////////////////////
function maxDoWhile($array){
    $n=count($array);
    $max=$array[0];
    $i=0;
    do{
        if($array[$i]>$max){
            $max=$array[$i];
        }
        $i++;

    }
    while($i-1<$n);
    return $max;
}

echo maxForeach($array)." = Foreach<br/>";
echo maxFor($array)." = For <br/>";
echo maxWhile($array)." = While <br/>";
echo maxDoWhile($array)." = Do While <br/>";