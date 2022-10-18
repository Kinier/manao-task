<?php

$n = 5;
$m = 7;

$array = [];
//> заполнение массива
for ($i = 0; $i < $n; $i++){
    for ($b = 0; $b < $m; $b++){
        $array[$i][$b] = rand(-100, 100);
    }
}
//<

$smallest = null;
$lineNumber = null;
for ($i = 0; $i < $n; $i++){
    $sum = 0;
    for ($b = 0; $b < $m; $b++){
        echo $array[$i][$b] . ' ';
        if ($array[$i][$b]>=0)
            $sum+=$array[$i][$b];
    }
    $sum = $sum / $m;
    if ($smallest > $sum or $smallest === null){
        $smallest = $sum;
        $lineNumber = $i;
    }
    echo PHP_EOL;
}

echo (int)$smallest . '  .  ' . $lineNumber;