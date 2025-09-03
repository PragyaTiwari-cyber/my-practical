<?php
/*Stores some  numbers in an array and sort them in ascending or descending order
  using sort and rsort*/

$numbers = array(45, 12, 78, 34, 23, 89, 5);

echo "<b>Original Array:</b><br>";
print_r($numbers);
echo "<br><br>";

// Sort in Ascending order
sort($numbers);
echo "<b>Ascending Order (using sort):</b><br>";
print_r($numbers);
echo "<br><br>";

// Sort in Descending order
rsort($numbers);
echo "<b>Descending Order (using rsort):</b><br>";
print_r($numbers);
?>


