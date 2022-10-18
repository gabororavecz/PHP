<?php

$number_of_adults = 4; //2*10.5=21 29*7.3=211.7 21+211.7=232.7 
$number_of_children = 29; //232.7/10=23.27 232.7-23.27=209.43

$adult_ticket = 10.5;
$child_ticket = 7.3;
#$free_adult = $number_of_children /10;
$total = ($number_of_adults*$adult_ticket) + ($number_of_children * $child_ticket); 
#$tenperoff = 
#$complete = 



if ($number_of_children > 20) {
 $ticket_deduct = $total - ( 2 * $adult_ticket);
} 

$percent = ($ticket_deduct / 100) *10;
$final_cost = $ticket_deduct - $percent;

echo "The total cost is: £", number_format((float)$total,2, '.' , ' , ');
echo "\nThe final cost is: £", number_format((float)$final_cost,2, '.' , ' , ');