<?php



$number = 1232564;
$copy = $number;
$loop = $copy;

$sovpadeniya = 0;

while($number > 0){
    $loop = $copy;
    while($loop > 0){

        if( $loop%10 === $number%10){
            $sovpadeniya++;
        };
        $loop = (int)($loop /10);
    }
    if ($sovpadeniya >= 2){
        echo "Нашло";
        break;
    }

    $sovpadeniya = 0;
    $number = (int)($number /10);
}