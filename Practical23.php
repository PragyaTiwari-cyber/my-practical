<?php
//Create and print array using all sort function
$numbers = array(5, 2, 8, 1, 9, 3);

// Original Array
echo "<b>Original Array:</b><br>";
print_r($numbers);
echo "<br><br>";

// sort()
sort($numbers);
echo "<b>sort() Ascending:</b><br>";
print_r($numbers);
echo "<br><br>";

// rsort()
rsort($numbers);
echo "<b>rsort() Descending:</b><br>";
print_r($numbers);
echo "<br><br>";

// asort()
$numbers = array(5, 2, 8, 1, 9, 3);
asort($numbers);
echo "<b>asort() Ascending (preserve keys):</b><br>";
print_r($numbers);
echo "<br><br>";

// arsort()
$numbers = array(5, 2, 8, 1, 9, 3);
arsort($numbers);
echo "<b>arsort() Descending (preserve keys):</b><br>";
print_r($numbers);
echo "<br><br>";

// ksort()
$numbers = array(5 => "Five", 2 => "Two", 8 => "Eight", 1 => "One", 9 => "Nine", 3 => "Three");
ksort($numbers);
echo "<b>ksort() Ascending by keys:</b><br>";
print_r($numbers);
echo "<br><br>";

// krsort()
$numbers = array(5 => "Five", 2 => "Two", 8 => "Eight", 1 => "One", 9 => "Nine", 3 => "Three");
krsort($numbers);
echo "<b>krsort() Descending by keys:</b><br>";
print_r($numbers);
?>
