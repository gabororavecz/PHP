 <?php

$user_score = 3;
$computer_score = 3;

while ($computer_score > 0 & $user_score > 0){
    $user_choice = readline("Please enter your choice: "); 
    echo("You chose: " . $user_choice);

    #$computer_choice = rand(rock, paper, scissors);
    #echo("The computer chose: " . $computer_choice);

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

    $computer_wins = "The computer won!";
    $you_win = "Congratulations, you win!";

    if ($user_choice == "scissors" & $computer_from_array == "rock" or $user_choice == "paper" & $computer_from_array == "scissors" or $user_choice == "rock" & $computer_from_array == "paper"){
        echo("The computer won.");
        $computer_score -= 1;
    }

    elseif ($user_choice == "rock" & $computer_from_array == "scissors" or $user_choice == "paper" & $computer_from_array == "rock" or $user_choice == "scissors" & $computer_from_array == "paper"){
        echo("You won.");
        $user_score -= 1;
    }

    else { if($computer_from_array == $user_choice){
        echo("It is a draw.");
    }
}

    echo("Game Over");

    

} 
