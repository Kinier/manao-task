<?php


$array = [-1, -2, -3, -4, -6, 7, 8, 9, 20, 15, 15, 22, 40, 12];
$arrCount = count($array);
$lastNegative = null;
$lastNegativeIndex = null;
$maxElement = null;
$maxElementIndex = null;;;;;;;;;;;
for ($i =0; $i<$arrCount;$i++ ){
    $maxElementIndex ?? $maxElementIndex = $i;
    $lastNegativeIndex ?? $lastNegativeIndex = $i;

    if ($array[$i] < 0){
        $lastNegativeIndex = $i;
    }

    if ($array[$i] > $array[$maxElementIndex]){
        $maxElementIndex = $i;
    }


}

echo $lastNegativeIndex;
echo $maxElementIndex;

$lastNegative = $array[$lastNegativeIndex];
$maxElement = $array[$maxElementIndex];

$array[$lastNegativeIndex] = $maxElement;
$array[$maxElementIndex] = $lastNegative;

print_r($array);