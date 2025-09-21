<?php
/*Write a program to search for a value (Capital City) inside an 
 associative array of countries using array_search()*/

$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington",
    "UK" => "London",
    "France" => "Paris",
    "Japan" => "Tokyo"
);

// Search for a capital city
$capital = "Paris";
$country = array_search($capital, $countries);

if ($country !== false) {
    echo "$capital is the capital of $country.";
} else {
    echo "Capital not found!";
}
?>
