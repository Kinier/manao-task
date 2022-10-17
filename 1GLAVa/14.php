<?php

$pairedSimpleNumbers = 0;
$pred = null;

for ($i = 1; $i<1000; $i++){
    if ($pairedSimpleNumbers > 10)
        break;

    $howMuchDivide = 0;

    $number = $i;
    for ($b = 1; $b<=$number; $b++){
        if ($number%$b === 0)
            $howMuchDivide++;
    }

    if ($howMuchDivide <= 2){
        if ($pred === null){
            $pred = $number;
            continue;
        }

        if ($number - $pred === 2){
            echo "Оно $number - $pred" . PHP_EOL;
            $pairedSimpleNumbers++;
        }

        $pred = $number;
    }
}