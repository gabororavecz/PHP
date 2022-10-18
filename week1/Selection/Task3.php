<?php

$number = rand(1, 13);

switch ($number) {
    case 1:
        echo "Ace";
        break;
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
        case 10:
            echo "$number";
            break;
        case 11:
            echo "Jack";
            break;
            case 12:
                echo "Queen";
                break;
                case 13:
                    echo "King";
                    break;
        
}