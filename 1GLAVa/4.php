<?php
for ($i = 1000; $i < 10000; $i++){
    $isYbivaet = true;
    $isVosrastaet = true;
    $pred = null;
    if ($i % 2 == 0){
        for($b = 1000; $b>=1; $b/=10){ // based


            $numba = $i / $b;
            $numba = $numba % 10;

            if ($pred === null){
                $pred = $numba;
                continue;
            }

            if ($pred > $numba){
                $isVosrastaet = false;
            }
            if($pred < $numba){
                $isYbivaet = false;
            }
            if (($pred === $numba)){
                $isVosrastaet = false;
                $isYbivaet = false;
            }

            $pred = $numba;

        }
        if ($isYbivaet == true){
            echo $i . ' убывает ' . PHP_EOL;
        }
        if($isVosrastaet == true){
            echo $i . ' возрастает ' . PHP_EOL;
        }

    }


}