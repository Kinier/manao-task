<?php


$n = 4;
$m = 5;
$p = 10;
$array = [];
//> заполнение массива
for ($i = 0; $i < $n; $i++){
    for ($b = 0; $b < $m; $b++){
        $array[$i][$b] = rand(1, 100);
        echo $array[$i][$b]  .' ';
    }
    echo PHP_EOL;
}
echo PHP_EOL;

//<

for ($i = 0; $i < $n; $i++) {
    $max = null;
    $min = null;
    $maxPos = array();
    $minPos = array();
    for ($j = 0; $j < $m; $j++) {
        if ($min === null or $array[$minPos[0]][$minPos[1]] > $array[$i][$j]){
            $min = $array[$i][$j];
            $minPos[0] = $i;
            $minPos[1] = $j;
        }
        if ($max === null or $array[$maxPos[0]][$maxPos[1]] < $array[$i][$j] ){
            $max = $array[$i][$j];
            $maxPos[0] = $i;
            $maxPos[1] = $j;
        }
        echo $array[$i][$j] . ' ';
    }

    $array[$minPos[0]][$minPos[1]] = $max;
    $array[$maxPos[0]][$maxPos[1]] = $min;
    echo PHP_EOL;
}

echo PHP_EOL;
for ($i = 0; $i < $n; $i++){
    for ($b = 0; $b < $m; $b++){
        echo $array[$i][$b]  .' ';
    }
    echo PHP_EOL;
}