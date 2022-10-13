<?php


$array = [1,2,2,4,5,6,6,8,9,9,10,10,10,11,12];
$pairedElements = 0;

$arrCount = count($array);
for($i =0; $i < $arrCount; $i++){
    if ($i != 0){
        if ($array[$i] === $array[$i-1]){
            $pairedElements++;
            $i++;
        }
    }
}

echo $pairedElements;