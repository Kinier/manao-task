<?php



$number = 1000;




for($i = 0; $i<=$number; $i++){
    $numba = $i**2;
    $sum = 0;
//    echo $numba . PHP_EOL;
    while($numba>0){
        $ost = ($numba % 10);
        $sum = (int)($sum * 10 + $ost);
        $numba = (int)($numba / 10);
        if ($sum === $numba){
            echo $i**2 . " - палиндром" . PHP_EOL;
        }

    }
}
