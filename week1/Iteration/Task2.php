<?php

$counter = 0;

$dice_1 = rand(1, 6);

$dice_2 = rand(1, 6);

while ($dice_1 != $dice_2){
    $dice_1 = rand(1, 6);
    $dice_2 = rand(1, 6);
    $counter += 1;
    echo "\nDice 1: " . $dice_1  . "|" . "Dice 2: " . $dice_2;

if ($dice_1 == $dice_2) {
    echo "\nMatching pair in " . $counter . " turns!"; 
    break;
}
    else{
        continue;
    }
}


