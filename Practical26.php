<?php
/*Create an array of 6 elements and display it in reverse order(without using array reverse())
and  with using array  reverse*/

$numbers = array(10, 20, 30, 40, 50, 60);


echo "<b>Reverse without array_reverse():</b><br>";
for ($i = count($numbers) - 1; $i >= 0; $i--) {
    echo $numbers[$i] . " ";
}

echo "<br><br>";


echo "<b>Reverse with array_reverse():</b><br>";
$reversed = array_reverse($numbers);
foreach ($reversed as $value) {
    echo $value . " ";
}
?>
