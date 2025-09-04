<?php
// Create associative array of students and their marks
$students = array(
    "Amit" => 85,
    "Neha" => 90,
    "Ravi" => 78,
    "Pooja" => 92,
    "Karan" => 88
);
?>

<form method="post">
    Enter student name to check: 
    <input type="text" name="student_name">
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $key = $_POST['student_name'];

    if (array_key_exists($key, $students)) {
        echo "✅ Student '$key' exists with marks: " . $students[$key];
    } else {
        echo "❌ Student '$key' does NOT exist in the array.";
    }
}
?>