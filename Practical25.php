<?php
//Write a php program to find largest and smallest number in an indexed array
$numbers = array(25, 78, 12, 56, 89, 43, 7, 99, 34);

$largest = max($numbers);
$smallest = min($numbers);

echo "Largest Number = " . $largest . "<br>";
echo "Smallest Number = " . $smallest;
?>
