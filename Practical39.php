<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>
    <form method="get" action="">
        Enter Marks: <input type="number" name="marks" required>
        <input type="submit" value="Check Result">
    </form>
    <?php
/*Pass a marks value using HTML form using GET method  (reult.php?marks=45)and display
PASS if marks >=40,else FAIL.*/ 
    if (isset($_GET['marks'])) {
        $marks = $_GET['marks'];
        if ($marks >= 40) {
            echo "<h3>PASS</h3>";
        } else {
            echo "<h3>FAIL</h3>";
        }
    }
    ?>
</body>
</html>
