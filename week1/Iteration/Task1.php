<?php 

$rows = readline("Please enter the number of rows: "); 
$columns = readline("Please enter the number of columns: ");

for ($a = 0; $a < $rows; $a++){
    for($b = 0;$b < $columns; $b++){
        echo " * "; 
    }
    echo "\n";
}
