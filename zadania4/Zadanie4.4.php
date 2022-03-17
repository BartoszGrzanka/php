<?php
function primeNumber1($n){
    $iterator=1;
    if($n<=1){
        echo "Podano złą liczbę";
        return 0;
    }
    else{
        for($i=2;$i<=$n/2;$i++){
            if($n%$i==0){
                return "Not Prime".$iterator;
            }
            $iterator++;
        }
        return "Prime".$iterator;
    }

}
function primeNumber2($n){
    $iterator=1;
    if($n<=1){
        return "Not Prime".$iterator;
    }
    if($n==2){
        return "Prime".$iterator;
    }
    if($n%2==0){
        return "Not Prime".$iterator;
    }

    $ceil = ceil(sqrt($n));

    for($i = 3; $i <= $ceil; $i = $i + 2) {
        if($n % $i == 0){
            return "Not Prime".$iterator;
        }
        $iterator++;
    }
    return "Prime".$iterator;

}


$n=16127;
echo primeNumber1($n)."<br/>";
echo primeNumber2($n);