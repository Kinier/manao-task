<?php


$n = 5;
$m = 4;
$array = [
    [10, -4, 3, -5],
    [10, -1000, 500, -6],
    [10, -5, 6, -7],
    [10, -20, 30, -8,],
    [10, -35, 340, -9],

];

$newArray = [];

for ($i = 0; $i < $n; $i++) {
    $maxIndex = null;
    for ($j = 0; $j < $m; $j++) {
        if ($maxIndex === null or $array[$i][$maxIndex] < $array[$i][$j]){
            $maxIndex = $j;
        }
    }
    for ($j = 0; $j < $m; $j++){
        if ($j !== $maxIndex){
            $newArray[$i][] = $array[$i][$j];
        }
    }
    echo PHP_EOL;
}

print_r($newArray);