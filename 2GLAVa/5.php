<?php


$array = [-1, -2, -3, -4, 6, 7, 8, 9, 10, 15, -20, 12];


$maxElementIndex = null;
$maxBuf = null;
$minElementIndex = null;
$minBuf = null;

for ($i = 0; $i < count($array); $i++) {
    if ($maxElementIndex == null) {
        $maxElementIndex = $i;
    }elseif($array[$maxElementIndex] <$array[$i]){
        $maxElementIndex = $i;
    }
    if ($minElementIndex == null) {
        $minElementIndex = $i;
    }elseif($array[$minElementIndex] > $array[$i]){
        $minElementIndex = $i;
    }

}

$maxBuf = $array[$maxElementIndex];
$minBuf = $array[$minElementIndex];



$array[$maxElementIndex] = $minBuf;
$array[$minElementIndex] = $maxBuf;

print_r($array);
//print_r($array);
