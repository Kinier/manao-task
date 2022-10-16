<?php

$number = 503;
$copy = $number;
$howMuchDivide = 0;
for ($i = 1; $i<=$copy; $i++){
    if ($number%$i === 0)
        $howMuchDivide++;
}

if ($howMuchDivide <= 2)
    echo "Простое";

