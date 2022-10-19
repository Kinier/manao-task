<?php


$pred = null;

$n = 20;
$m = 800;

for ($i = $n; $i < $m; $i++) {


    $summaDeliteley1 = 0;
    $summaDeliteley2 = 0;

    $number = $i;
    for ($b = 1; $b <= $number; $b++) { // нашел сумму одного числа
        if ($number % $b === 0 and $number!==$b) {
            $summaDeliteley1+=$b;
        }
    }

    for ($b = $number+1; $b <= $m; $b++) { // проходка по числам следующм
        $summaDeliteley2 = 0;
        for ($c = 1; $c <= $b; $c++){ // нашел сумму другого числа
            if ($b % $c === 0 and $b!==$c) {
                $summaDeliteley2+=$c;
            }
        }
        if ($summaDeliteley1 === $summaDeliteley2){
            echo "Дружественные числа - $number и $b|$summaDeliteley1|$summaDeliteley2" . PHP_EOL;
        }
    }




}