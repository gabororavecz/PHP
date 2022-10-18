<?php

$can_of_paint = 5.1;
$diameter_of_can = 15;
$height_of_can = 30;

$can_radius = $diameter_of_can / 2;
$can_volume = ((3.14 * ($can_radius * $can_radius) * $height_of_can));
$box_volume = (60 * 30 * 35); //630cm2 

$area_paint = (140 * 3.4);  // m2 (30 * 3.4) + (30 * 3.4) + (60 * 3.4) + (60 * 3.4)
$can_cover_measurement = 5.1; //m2
$can_required = ($area_paint / $can_cover_measurement);

$can_per_box = $box_volume / $can_volume;

echo ceil($can_required) . " cans are required. You will have " . floor($can_per_box) . " full boxes with 6 cans loose.";

