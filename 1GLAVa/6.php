<?php


for ($i = 1000; $i < 10000; $i++){
    $isOkay = true;
    for ($b = 1000; $b>=1;$b/=10){
        $numba = $i/$b;
        $numba = $numba%10;
        if ($numba !== 0 and $numba !== 2 and $numba !== 3 and $numba !== 7){
            $isOkay = false;
        }
    }

    if ($isOkay){
        echo $i .PHP_EOL;
    }
}