<?php
$n = 126;
$m = 70;

$b = $n * $m;

while($n!==0 && $m!==0){
    echo "$n и $m" . PHP_EOL;
    if ($n > $m){
        $n = $n % $m;
    }else{
        $m = $m % $n;
    }
}

echo $b/($n+$m);