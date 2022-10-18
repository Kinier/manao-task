<?php


$n = 4;
$array = [
    [-10, 4, 3, 40],
    [10, 1000, 10000, 500],
    [-10, 5, 6, 1000],
    [-10, 20, 30, 150],
];

for ($i = 0; $i < $n; $i++) {
    $isPositiveString = true;
    for ($j = 0; $j<$n; $j++){
        if ($array[$i][$j] < 0){
            $isPositiveString = false;
        }
    }

    if ($isPositiveString === true){

        for ($a = 0; $a<$n; $a++){
            for ($b = 0; $b<$n; $b++){
                echo $array[$a][$b]*$array[$i][$b] . ' ';;
            }
        echo PHP_EOL;
        }

        break;
    }

    echo PHP_EOL;
}

