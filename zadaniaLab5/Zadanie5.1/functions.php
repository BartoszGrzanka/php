<?php
function add($f,$s){
    $result=$f;
    for ($i=1; $i<=$s; $i++)
    {
        $result++;
    }
    return $f."+".$s."=".$result;
}

function sub($f,$s){
    $result = $f - $s;
    return $f."-".$s."=".$result;
}
function mul($f,$s){
    $result = $f * $s;
    return $f."*".$s."=".$result;
}
function div($f,$s){
    $result = $f / $s;
    return $f."/".$s."=".$result;
}
