<?php
$zadano = 20;
for ($i = 1000; $i < 10000; $i++){

    $numba1 = $i % 10;
    (int)$numba2 = (int)$i / 10;
    (int)$numba2 = (int)$numba2 % 10;
    (int)$numba3 = (int)$i / 100;
    (int)$numba3 = (int)$numba3 % 10;
    (int)$numba4 = (int)$i / 1000;

   // жестко затайпкастил
    if ( (int)$numba1 + (int)$numba2 + (int)$numba3 + (int)$numba4 === $zadano){
        echo $i . " ";
    } ;
}