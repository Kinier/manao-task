<?php


$n = 5;
$m = 4;
$p = 10;
$array = [
    [10, 4, 3, 40],
    [10, 1000, 10000, 500],
    [10, 5, 6, 1000],
    [10, 20, 30, 150],
    [10, 35, 340, 50],

];


$sum = 0;
$sumAll = 0;
for ($i = 0; $i < $m; $i++) {
    $isStolbecOkay = true;
    $sum = 0;
    for ($j = 0; $j<$n; $j++){
        if ($array[$j][$i]%$p !== 0){
            $isStolbecOkay = false;
        }else{
            $sum+=$array[$j][$i];
        }
    }

    if ($isStolbecOkay === true){
        $sumAll+=$sum;
    }

    echo PHP_EOL;
}
echo $sumAll;

