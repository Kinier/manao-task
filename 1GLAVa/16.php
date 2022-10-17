<?php

$n = 4;
$m = 100;

for ($n; $n <= $m; $n++) {
    $number = $n;
    $sum = 0;


    for ($b = 1; $b <= $number; $b++) {
        if ($number !== $b and $number%$b === 0) {
            $sum+=$b;
        }
    }
    if ($sum ===$number){
        echo $number;
        echo PHP_EOL;
    }
}