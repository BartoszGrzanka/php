<?php
$pesel="02301006666";
function bday($pesel){

    $year=substr($pesel,0,2);
    $month=substr($pesel,2,2);
    $day=substr($pesel,4,2);
    $year=(int)$year;
    $month=(int)$month;
    $day=(int)$day;
    $month=$month-20;
    $year=$year+2000;
    echo "$day-$month-$year";
}
bday($pesel);