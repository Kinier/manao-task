<?php



    $number = 190;

$counter = 0;
$sumCounter = 0;
for ($i = 0; $i <= $number; $i++){
    $num = $i;
    $factorialSum = 0;
    if ($i!== 0) {
        while ($num > 0) { // проходка по каждой цифре числа
            $factorial = 1;
            for ($a = 1; $a <= $num % 10; $a++) { // факториал
                $factorial *= $a;
            }

            $factorialSum += $factorial;
            $num = (int)($num / 10);
        }
        if ($factorialSum === $i) {
            $counter++;
            $sumCounter += $i;
        }
    }

}

echo $sumCounter . ', всего чисел ' . $counter;