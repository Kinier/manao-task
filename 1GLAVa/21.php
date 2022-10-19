<?php


$n = 13;
$m = 16;

while ($n !== 0 && $m !== 0) {
    if ($n > $m) {
        $n = $n % $m;
    } else {
        $m = $m % $n;
    }
}

if( $n + $m===1){
    echo "Взаимно простые";
};