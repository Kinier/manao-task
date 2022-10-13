<?php


$array = [-1, -2, -3, -4, 6, 7, 8, 9, 20, 15, 15, -20, 12, 12];
$maxElementsArray = [];

$maxElementIndex= null;

for ($i = 0; $i < count($array); $i++) {
    if ($maxElementIndex == null and $array[$i] % 2 == 0) {
        $maxElementIndex = $i;
    } elseif ($array[$i] >= $array[$maxElementIndex] and $array[$i] % 2 == 0) {
        $maxElementIndex = $i;
    }
}
$array[$maxElementIndex] = $maxElementIndex;


print_r($array);
