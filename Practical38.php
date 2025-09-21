<!DOCTYPE html>
<html>
<head>
    <title>Sum of Two Numbers</title>
</head>
<body>
    <!-- HTML Form -->
    <form method="get" action="">
        Enter First Number: <input type="number" name="num" required><br><br>
        Enter Second Number: <input type="number" name="num2" required><br><br>
        <input type="submit" value="Calculate Sum">
    </form>
<?php
/*Create a page that takes two numbers from a HTML form using GET method (sum.php?num=10&num2=20)
and displays their sum.*/ 


    // Check if values are set in URL
    if (isset($_GET['num']) && isset($_GET['num2'])) {
        $a = $_GET['num'];
        $b = $_GET['num2'];

        $sum = $a + $b;

        echo "<h3>Sum of $a and $b is: $sum</h3>";
    }
    ?>
</body>
</html>

