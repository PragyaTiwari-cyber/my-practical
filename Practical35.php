<?php
// Associative array of countries and their capitals
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Australia" => "Canberra",
    "Germany" => "Berlin"
);
?>

<form method="post">
    Enter a Capital City: 
    <input type="text" name="capital">
    <input type="submit" value="Search">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchCapital = trim($_POST['capital']);

    if (!empty($searchCapital)) {
        $country = array_search($searchCapital, $countries);

        if ($country !== false) {
            echo "✅ The capital '<b>$searchCapital</b>' belongs to country: <b>$country</b>.";
        } else {
            echo "❌ The capital '<b>$searchCapital</b>' was not found in the array.";
        }
    } else {
        echo "⚠ Please enter a capital city.";
    }
}
?>