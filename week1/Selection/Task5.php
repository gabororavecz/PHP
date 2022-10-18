<?php

$int1 = readline("Enter the first integer: ");
$int2 = readline("Enter the second integer: ");


$Add = $int1 + $int2;
$Subtract = $int1 - $int2;
$Multiply = $int1 * $int2;
$Divide = $int1 / $int2;
$Remainder = $int1 % $int2;

echo <<<MENU
1. Add
2. Subtract
3. Multiply
4. Divide
5. Remainder\n
MENU;
$operation = readline("Select the menu number: ");



switch ($operation) {
    case 1:
        echo $Add;
        break;
    case 2: 
        echo $Subtract;
        break;
        case 3: 
            echo $Multiply;
            break;
            case 4:
                echo $Divide;
                break;
                case 5:
                    echo $Remainder;
                    break;
                    default; echo "Not permitted number selected";
}