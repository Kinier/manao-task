<?php



$number = 25;
$copy = $number;


$razr =1;

while($number > 0){
    $number=(int)($number/10);
    $razr*=10;
}

if (($copy**2) % ($razr) === $copy){
    echo "true";
}else{
    echo "false";
}
