<?php

$array = [-1, -2, -3, -4, -6, 7, 8, 9, 20, 15, 15, 22, 40, 12];


$elementWithMaxSumm = null;
$maxSumm = null;
$elementWithMinSumm = null;
$minSumm = null;
$arrCount = count($array);
for ($i =0; $i <$arrCount; $i++){
    if ($elementWithMinSumm == null){
        $elementWithMinSumm = $i;
    }
    if ($elementWithMaxSumm == null){
        $elementWithMaxSumm = $i;
    }


    if ($i <$arrCount-1) { // max summ
        if ($maxSumm == null){
            $maxSumm = ($array[$i] + $array[$i + 1]);
            $elementWithMaxSumm = $i;
        }elseif(($array[$i] + $array[$i + 1]) > $maxSumm){
                $maxSumm = ($array[$i] + $array[$i + 1]);
                $elementWithMaxSumm = $i;
        }

    }

    if ($i != 0) { // min summ
        if ($minSumm == null){
            $minSumm = ($array[$i] +$array[$i-1]);
            $elementWithMinSumm = $i;

        }elseif(($array[$i] +$array[$i-1]) < $minSumm){
            $minSumm = ($array[$i] +$array[$i-1]);
            $elementWithMinSumm = $i;
        }

    }

}

echo $elementWithMinSumm . PHP_EOL;
echo $elementWithMaxSumm;