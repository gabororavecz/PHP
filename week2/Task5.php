<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Calculator</title>   
</head>

<body>

<form method="post"> 
    <fieldset>
    <label for="first_number">First Number:</label>
        <input type="number" name="first_number">
        <label for="second_number">Second Number:</label>
        <input type="number" name="second_number">
        <label for="enter operation">Enter Operation:</label>
        <input type="operation" name="operation">
        <input type="submit" value="Submit">
        

        


</fieldset>




    </body>
</html>

<?php

$int1 = $_POST["first_number"];
$int2 = $_POST["second_number"];

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
?>