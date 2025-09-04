<?php
// Create associative array
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Australia" => "Canberra"
);

// Print using foreach loop
echo "List of Countries and their Capitals:"."<br>";
foreach ($countries as $country => $capital) {
    echo "$country → $capital\n"."<br>";
}
?>