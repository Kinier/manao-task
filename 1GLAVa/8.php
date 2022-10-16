<?php

$isOkay = true;

for ($i = 1000;$i<10000;$i++){
    $number = $i;
    $copy = $number;
    $sovpadeniya = 0;
    $isOkay = true;
    while($number > 0){
        $loop = $copy;
        while($loop > 0){
            if( $loop%10 === $number%10){
                $sovpadeniya++;
            };
            $loop = (int)($loop /10);
        }
        if ($sovpadeniya >= 2){
            $isOkay = false;
            break;
        }

        $sovpadeniya = 0;
        $number = (int)($number /10);
    }
    if ($isOkay)
        echo $i . PHP_EOL;

}