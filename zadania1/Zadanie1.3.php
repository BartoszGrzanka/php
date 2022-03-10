<?php
$month=3;
$year=1800;
$days=cal_days_in_month(CAL_GREGORIAN,$month,$year);
echo "$days <br/>";
if($month==1||$month==3||$month==5||$month==7||$month==8||$month==10||$month==12){
    $days=31;
}
elseif($month==2){
        if($year%4==0){
            if($year%100==0){
                if($year%400==0){
                    $days=29;
                }
            }
            else{
                $days=29;
            }
        }
        else{
            $days=28;
        }
    }
else{
    $days=30;
}
echo "$days";
