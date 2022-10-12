<?php
$beforeFirstNegative = 0;
$isFirstNegativeReached = false;
$summNe4etnixAfterLastNegativeNumber = 0;
$lastNegativeElement = null;
$array = [1,2,3,4,5,6,-7,8,9,10,11,12];

for ($i = 0; $i < count($array); $i++){
    if ($array[$i] <= 0){
        $isFirstNegativeReached = true;
        $lastNegativeElement = $i;
    }

    if (!$isFirstNegativeReached){
        $beforeFirstNegative += $array[$i];
    }
}

echo $beforeFirstNegative . PHP_EOL;

for ($i = $lastNegativeElement+1; $i < count($array); $i++){
    if ($array[$i] % 2 != 0){
        $summNe4etnixAfterLastNegativeNumber += $array[$i];
    }
}

echo $summNe4etnixAfterLastNegativeNumber;