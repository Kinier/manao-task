<?php


$n = 4;
$m = 5;
$array = [
    [10, -4, 3, -5],
    [10, -1000, 500,-6 ],
    [10, -5, 6,-7],
    [10, -20, 30,-8,],
    [10, -35, 340,-9],

];


$sum = 0;
$sumAll = 0;
for ($i = 0; $i < $n; $i++) {
    $isStolbecNegative = true;
    $sum = 0;
    for ($j = 0; $j < $m; $j++) {
        if ($array[$j][$i] > 0) {
            $isStolbecNegative = false;
        } else {
            $sum += $array[$j][$i];
        }
    }

    if ($isStolbecNegative === true){
        for ($j = 0; $j < $m; $j++){
            $array[$j][$i] = $sum;
        }
    }
    echo PHP_EOL;
}



for ($i = 0; $i < $m; $i++){
    for ($j = 0; $j < $n; $j++){
        echo $array[$i][$j]  .' ';
    }
    echo PHP_EOL;
}