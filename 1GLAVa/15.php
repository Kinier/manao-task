<?php


$number = 500;
$howMuchDeliteley = 0;

for ($i= 1; $i<=$number; $i++){
    if ($number%$i===0){
        $howMuchDeliteley++;
    }
}

echo "Делителей $howMuchDeliteley";