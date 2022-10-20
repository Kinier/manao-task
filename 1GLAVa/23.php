<?php


$number = 6453656;
$copy = $number;
$sortedNumber = 0;
for ( $i = 0; $i <= 9; $i++)
{
    $number = $copy;
    while ($number > 0)
    {
        $digit = $number % 10;
        if ($digit == $i)
        {
            $sortedNumber *= 10;
            $sortedNumber += $digit;
        }
        $number = (int)($number/10);
    }
}

echo $sortedNumber;