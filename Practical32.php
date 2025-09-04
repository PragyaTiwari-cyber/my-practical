<?php
// Create associative array of students and their marks
$students = array(
    "madhu" => 85,
    "prasee" => 90,
    "pragya" => 78,
    "shreyasee" => 92,
    "Khyati" => 88
);

echo "Original Student Marks:\n"."<br>";
foreach ($students as $name => $marks) {
    echo "$name : $marks\n"."<br>";
}

// Update one student's marks
$students["yash"] = 95;  // Updating Ravi's marks

echo "\nUpdated Student Marks:"."<br>";
foreach ($students as $name => $marks) {
    echo "$name : $marks\n"."<br>";
}
?>