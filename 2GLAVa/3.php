<?php

$array = [-1,-2,-3,-4,6,7,8,9,10,15,-20,12];



$firstPositiveIndex = null;
$fBuf = null;
$lastNegativeIndex = null;
$lBuf = null;

for ($i=0;$i<count($array); $i++){
    if ($array[$i] > 0 and $firstPositiveIndex == null){
        $firstPositiveIndex = $i;
    }

    if ($array[$i] < 0){
        $lastNegativeIndex = $i;
    }
}

$fBuf = $array[$firstPositiveIndex];
$lBuf = $array[$lastNegativeIndex];

$array[$firstPositiveIndex] = $lBuf;
$array[$lastNegativeIndex] = $fBuf;

print_r($array);
