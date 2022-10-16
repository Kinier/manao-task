<?php

$sourceNumber = 5234534;
while($sourceNumber > 0){
    echo $sourceNumber%10;
    $sourceNumber = (int)($sourceNumber/10);
}