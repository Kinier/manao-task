<?php

function test($number)
{
    if ($number < 10) {
        return ($number < 5);
    } else {
        return ($number % 10 < 5) + test($number/10);
    }
}

$number = 1234567;
echo test($number);


