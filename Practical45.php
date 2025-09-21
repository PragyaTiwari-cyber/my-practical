
<!DOCTYPE html>
<html>
<head>
    <title>Result Check</title>
</head>
<body>
    <!-- Form to enter marks -->
    <form method="get" action="Practical45.php">
        Enter Marks: <input type="text" name="marks">
        <input type="submit" value="Check Result">
    </form>

    <?php
    /* Pass a marks value using HTML form using GET method (result.php?marks=45) 
and display PASS if marks ≥ 40, else FAIL.*/
    if (isset($_GET['marks'])) {
        $marks = $_GET['marks'];

        if ($marks >= 40) {
            echo "<h2>PASS</h2>";
        } else {
            echo "<h2>FAIL</h2>";
        }
    }
    ?>
</body>
</html>
