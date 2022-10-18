<?php

$number = rand(0, 8); //http://localhost/Dev/PHP

switch ($number) {
    case 1: 
        echo "One for sorrow" ;
    break;
    case 2:
        echo "Two for joy";
    break;
    case 3:
        echo "Three for a girl";
        break;
        case 4:
            echo "Four for a boy";
            break;
            case 5:
                echo "Five for a silver";
                break;
                case 6: 
                    echo "Six for a gold";
                    break;
                    case 7: 
                    echo "Seven for a secret never to be told";
                default; echo "Not a permitted number";

}