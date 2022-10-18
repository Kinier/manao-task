<?php



$n = 49;
$m = 7;

while($n!==0 && $m!==0){
    if ($n > $m){
        $n = $n % $m;
    }else{
        $m = $m % $n;
    }
}

echo $n + $m;//