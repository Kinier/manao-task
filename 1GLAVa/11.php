<?php

$number = 12345;
$copy = $number;


for ($i = 1; $i<=$number; $i++){
    $copy = $i;
    $sum = 0;
    while($copy > 0){
        $sum+= $copy%10;
        $copy = (int)($copy/10);
    }
    if ($i%$sum === 0)
        echo $i . ' - ' . $sum . PHP_EOL;
}