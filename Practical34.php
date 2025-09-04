<?php
// Create associative array of fruits and their prices
$fruits = array(
    "Apple" => 120,
    "Banana" => 40,
    "Mango" => 150,
    "Orange" => 80,
    "Grapes" => 60
);

echo "Original Array:\n"."<br>";
foreach ($fruits as $fruit => $price) {
    echo "$fruit : $price\n";
}

// Sort by values (prices) using asort()
asort($fruits);
echo "\nSorted by Price (asort):\n"."<br>";
foreach ($fruits as $fruit => $price) {
    echo "$fruit : $price\n";
}

// Sort by keys (fruit names) using ksort()
ksort($fruits);
echo "\nSorted by Fruit Name (ksort):\n"."<br>";
foreach ($fruits as $fruit => $price) {
    echo "$fruit : $price\n";
}
?>