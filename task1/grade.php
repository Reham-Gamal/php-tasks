<?php

$sub_1 = 95;
$sub_2 = 85;
$sub_3 = 74;
$sub_4 = 64;
$sub_5 = 53;

$total = NULL;
$average = NULL;
$percentage = NULL;
$grade = NULL;

$total = $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

if ($average >= 90)
    $grade = "A";
else if ($average >= 80 && $average < 90)
    $grade = "B";
else if ($average >= 70 && $average < 80)
    $grade = "C";
else if ($average >= 60 && $average < 70)
    $grade = "D";
else
    $grade = "E";


echo "The Total marks   = " . $total . "/500\n";
echo "The Average marks = " . $average . "\n";
echo "The Percentage    = " . $percentage . "%\n";
echo "The Grade         = '" . $grade . "'\n";

?>