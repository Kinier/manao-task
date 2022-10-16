<?php

$number = 123456;
$sum = 0;
$pred = null;
$posledovatelnost = true;
while($number > 0){
    if ($pred == null){
        $pred = $number%10;
    }else{
        if ($number%10 > $pred) {
            $posledovatelnost = false;
            $pred = $number%10;
        }
    }


    $number = (int)($number/10);
}


if ($posledovatelnost)
    echo "возрастающая последовательность" . PHP_EOL;
else
    echo "не возрастающая".PHP_EOL;