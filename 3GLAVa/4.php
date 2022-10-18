<?php


$n = 5;
$m = 4;
$array = [
    [18, 4, 3, 8],
    [1111, 2, 2, 5],
    [9, 5, 6, 1],
    [9, 8, 8, 5],
    [2, 5, 8, 7]
];

$sum = 0;
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $m; $j++) {
        $number = $array[$i][$j];
        $isOkay = true;

        while($number > 0){
            if ($number%10 !== 0 and $number%10 !== 1 and $number%10 !== 3 and $number%10 !== 8) {
                $isOkay = false;
            }
            $number = (int)($number/10);
        }
        if ($isOkay === true){
            echo $array[$i][$j] . PHP_EOL;
            $sum+=$array[$i][$j];
        }
    }


    echo PHP_EOL;
}

echo $sum;