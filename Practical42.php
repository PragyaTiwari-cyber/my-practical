
<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<form method="POST">
    Enter First Number: <input type="number" name="num1" required><br><br>
    Enter Second Number: <input type="number" name="num2" required><br><br>

    Select Operation:
    <select name="operation">
        <option value="+">Addition (+)</option>
        <option value="-">Subtraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
    </select><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
/*"Create a form with two numbers and a dropdown for operation (+, -, *, /). (using POST method)

On submission, display the result on the same page of the selected operation."*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op   = $_POST['operation'];

    switch ($op) {
        case '+': $result = $num1 + $num2; break;
        case '-': $result = $num1 - $num2; break;
        case '*': $result = $num1 * $num2; break;
        case '/': 
            $result = ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero"; 
            break;
        default: $result = "Invalid Operation";
    }

    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>
