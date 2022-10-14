<?php




$number = 123456789;
$sum = 0;
while($number > 0){
    if ($number/10%10 < 5)
        $sum++;

    $number = (int)($number/10);
}

echo $sum;


