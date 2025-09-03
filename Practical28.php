<?php
// Write a program that checks if a given value exists in an array using in array()
$numbers = array(10, 20, 30, 40, 50);

// Value to check
$search = 30;

if (in_array($search, $numbers)) {
    echo "Yes, $search exists in the array.";
} else {
    echo "No, $search does not exist in the array.";
}
?>
