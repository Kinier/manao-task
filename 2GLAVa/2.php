<?php

$array = [1,2,3,4,5,6,7,8,9,10,11,12];
$array2 = [];
$summElements = 0;

$i = 6;

for ($b = 0; $b < count($array); $b++){
    if ($b > $i){
        break;
    }else{
        $summElements += $array[$b];
    }
}

$array2[$i] =  $summElements/$i; // мне кажется оно не так делается и я чето недопонял ахах, мб потом переделать

print_r($array2);