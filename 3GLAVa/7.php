<?php


$n = 5;
$array = [
    [-10, 40, 30, 40, 120],
    [10, 1000, 100, 500, 20],
    [-10, 50, 60, 1000 , 50],
    [-10, 20, 30, 150, 1001],
    [104, 205, 307, 1508, 10015],
];

$aboveTriangleMaxElement[0] = null;
$aboveTriangleMaxElement[1] = null;

$belowTriangleMaxElement[0] = null;
$belowTriangleMaxElement[1] = null;

for ($i = 0; $i < $n; $i++) {
    $isPositiveString = true;
    for ($j = $i + 1; $j < $n; $j++) { // верхний треугольник
        if (
            $aboveTriangleMaxElement[0] === null
            or $array[$aboveTriangleMaxElement[0]][$aboveTriangleMaxElement[1]] < $array[$i][$j])
        {
            $aboveTriangleMaxElement[0] = $i;
            $aboveTriangleMaxElement[1] = $j;
        }
    }
    for ($j = 0; $j < $i; $j++) { // нижний треугольник
        if (
            $belowTriangleMaxElement[0] === null
            or $array[$belowTriangleMaxElement[0]][$belowTriangleMaxElement[1]] < $array[$i][$j])
        {
            $belowTriangleMaxElement[0] = $i;
            $belowTriangleMaxElement[1] = $j;
        }
    }
    echo PHP_EOL;
}




$below = $array[$belowTriangleMaxElement[0]][$belowTriangleMaxElement[1]];
$above = $array[$aboveTriangleMaxElement[0]][$aboveTriangleMaxElement[1]];
$array[$belowTriangleMaxElement[0]][$belowTriangleMaxElement[1]] = $above;
$array[$aboveTriangleMaxElement[0]][$aboveTriangleMaxElement[1]] = $below;

print_r($array);
