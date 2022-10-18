<?php
$n = 5;
$m = 4;
$array = [[2, 4, 5, 8],
    [4, 2, 2, 5],
    [9, 5, 6, 1],
    [9, 8, 7, 6],
    [2, 5, 6, 7]];

$smallest = null;

$biggest = null;
for ($i = 0; $i < $n; $i++) {
    $vozrastaet = true;
    $ybbIvaet = true;

    for ($j = 0; $j < $m; $j++) {
        if ($j !== 0){

            if ($array[$i][$j-1] < $array[$i][$j]){
                $ybbIvaet = false;
            }
            if($array[$i][$j-1] > $array[$i][$j]){
                $vozrastaet = false;
            }
            if ($array[$i][$j-1] === $array[$i][$j]){
                $vozrastaet = false;
                $ybbIvaet = false;
            }
        }
        echo $array[$i][$j] . ' ';
    }

    if ($smallest === null or $biggest === null){
        $biggest = $array[$i][0];
        $smallest = $array[$i][0];
    }

    if ($vozrastaet === true){
        if ($smallest > $array[$i][0]){
            $smallest = $array[$i][0];
        }
        if ($biggest < $array[$i][$m-1]){
            $biggest  = $array[$i][$m-1];
        }
    }
    if ($ybbIvaet === true){
        if ($biggest < $array[$i][0]){
            $biggest = $array[$i][0];
        }
        if ($smallest > $array[$i][$m-1]){
            $smallest = $array[$i][$m-1];
        }
    }
    echo PHP_EOL;
}

echo 'Минимальный ' . $smallest;
echo ' Максимальный ' . $biggest;

