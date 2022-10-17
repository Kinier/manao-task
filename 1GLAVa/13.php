<?php

$n = 528;
$m = 2;
$howMuchCifr = 0;

$number = 2*$n*$m;
$copy = $number;


while($copy > 0){
    $copy = (int)($copy/10);
    $howMuchCifr++;
}

$copy = $number;
if ($howMuchCifr%2===0){
    $sum = 0;
    while($copy>0){
        $ost = ($copy % 10);
        $sum = (int)($sum * 10 + $ost);
        $copy = (int)($copy / 10);
    }

    if ($sum === $number){
        echo 'sysmmmetric';
    }
}


//echo $number. PHP_EOL;
//echo $howMuchCifr;