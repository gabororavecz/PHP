<?php

$packet_sweet = 40;
$students = 14;

$sweet_per_student = $packet_sweet / $students; //12 remain 2per student 

$sweet_kept = $packet_sweet % $students; 

echo "Each student gets " . floor($sweet_per_student) . " sweets.";
echo "\nThe teacher gets " . "$sweet_kept" . " sweets.";