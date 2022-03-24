<?php
function number($n)
{
    $random = array();

    for ($i = 0; $i < 10; $i++) {
        $random[$i] = rand(0,40);
    }
    var_dump($random);
    return $random[$n-1];
}

$n=2;
echo "<br/>".number($n);
