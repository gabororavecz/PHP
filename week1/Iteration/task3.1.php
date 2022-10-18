<?php


$array_choices = ['rock', 'paper', 'scissors'];

$computer_choice = array_rand($array_choices);

if($computer_choice == 0){

    $computer_from_array = 'rock';

}

else if($computer_choice == 1){

    $computer_from_array = 'paper';

}

else{

    $computer_from_array = 'scissors';

}

echo "\nThe computer choice: ${computer_from_array}";