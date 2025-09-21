
 <!DOCTYPE html>
<html>
<head>
  <title>Sum of Two Numbers</title>
</head>
<body>
  <form action="sum.php" method="get">
    Number1: <input type="text" name="num1"><br><br>
    Number2: <input type="text" name="num2"><br><br>
    <input type="submit" value="Add">
  </form>
</body>
</html>
<?php
/*Create a page that takes two numbers from a HTML form using GET method 
 (sum.php?num1=10&num2=20) and displays their sum*/
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $sum = $num1 + $num2;
    echo "Sum = " . $sum;
} else {
    echo "Please enter numbers in the form.";
}
?>
