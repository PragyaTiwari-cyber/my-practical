<?php
/*Online Quiz (POST)
Create a quiz form with 3 multiple-choice questions.
On submission, check answers and display the score out of 3.*/
$score = 0;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if($_POST['q1']=="b") $score++;
    if($_POST['q2']=="a") $score++;
    if($_POST['q3']=="c") $score++;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Quiz</title>
</head>
<body>
<?php if($_SERVER["REQUEST_METHOD"]=="POST"): ?>
    <h2>Your Score: <?php echo $score; ?> / 3</h2>
<?php else: ?>
    <form method="POST">
        <p>1. Capital of India?</p>
        <input type="radio" name="q1" value="a"> Mumbai<br>
        <input type="radio" name="q1" value="b"> New Delhi<br>
        <input type="radio" name="q1" value="c"> Kolkata<br><br>

        <p>2. 2 + 2 = ?</p>
        <input type="radio" name="q2" value="a"> 4<br>
        <input type="radio" name="q2" value="b"> 5<br>
        <input type="radio" name="q2" value="c"> 22<br><br>

        <p>3. National Animal of India?</p>
        <input type="radio" name="q3" value="a"> Lion<br>
        <input type="radio" name="q3" value="b"> Elephant<br>
        <input type="radio" name="q3" value="c"> Tiger<br><br>

        <input type="submit" value="Submit Quiz">
    </form>
<?php endif; ?>
</body>
</html>
