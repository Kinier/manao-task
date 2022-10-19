<?php



$n = 10;
$m = 70;

$numberWithMaxDivides = $n;
$maxDividesForNumber = 0;

for ($n; $n <= $m; $n++){
    $number = $n;
    $divides = 0;
    for ($i = 1; $i <= $number; $i++){
        if ($number%$i === 0){
            $divides++;
        }
    }

    if ($divides > $maxDividesForNumber){
        $maxDividesForNumber = $divides;
        $numberWithMaxDivides = $number;
    }
}

echo "Число с большими делениями - $numberWithMaxDivides|$maxDividesForNumber";
