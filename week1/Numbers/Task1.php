<?php
$item_cost = 3.3;
$item_price = 5;
$overheads = 20;

$profit = $item_price - $item_cost;
$item_sold_to_breakeven = $overheads / $profit;

echo "Profit: " . "£" . sprintf('%.2f', $profit);
echo "\nItem sold to break even: " . round($item_sold_to_breakeven); 
?>