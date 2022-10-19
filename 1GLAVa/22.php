<?php



$number = 63;

while($number != 1){
    for ($i = 2; $i <= $number; $i++){
        if ($number % $i === 0){
            $number  = $number/$i;
            echo $i . ' ';
            break;
        }
    }
}