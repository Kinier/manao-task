<?php
$zadano = 20;
$sum = 0;
for ($i = 1000; $i < 10000; $i++){

    for($b = 1; $b<=1000; $b*=10){
        (int)$numba = (int)$i / $b;
        (int)$numba = (int)$numba % 10;
        $sum+=$numba;
    }



    if ( $sum === $zadano){
        echo $i . " ";
    } ;
    $sum = 0;
}