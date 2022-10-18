<?php

$n = 8;
$array = [];
//> заполнение массива
for ($i = 0; $i < $n; $i++){
    for ($b = 0; $b < $n; $b++){
        $array[$i][$b] = $b;
    }
}
//<
$mainDiagonal = 0;
$aboveDiagonal = 0;
$underDiagonal = 0;
for ($i = 0; $i<$n; $i++){
    $mainDiagonal+=$array[$i][$i];
    for ($c = $i+1; $c<$n; $c++){
        $aboveDiagonal+=$array[$i][$c];
    }
    for ($c = 0; $c<$i; $c++){
        $underDiagonal+=$array[$i][$c];
    }
}

echo 'Диагональ ' . $mainDiagonal . PHP_EOL;

echo 'Выше диагонали ' . $aboveDiagonal . PHP_EOL;

echo 'Ниже диагонали ' . $underDiagonal . PHP_EOL;