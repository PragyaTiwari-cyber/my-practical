<?php
// Create an array with duplicate values
$numbers = array(10, 20, 30, 20, 40, 10, 50, 30);

echo "Original Array: " . implode(", ", $numbers) . "\n";
echo"<br>";

// Remove duplicates using array_unique()
$uniqueNumbers = array_unique($numbers);

echo "Array after removing duplicates: " . implode(", ", $uniqueNumbers) . "\n";
?>