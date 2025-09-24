<?php
/*User fills a feedback form (Name, Email, Message) using POST.
After submission, redirect to thankyou.php?name=Student and display:
Thank you, Student! Your feedback has been submitted.*/
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    // Redirect with name in URL
    header("Location: ?submitted=1&name=" . urlencode($name));
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>

<?php if(isset($_GET['submitted'])): ?>
    <h2>Thank you, <?php echo htmlspecialchars($_GET['name']); ?>! Your feedback has been submitted.</h2>
<?php else: ?>
    <form method="POST">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Message: <textarea name="message" required></textarea><br><br>
        <input type="submit" value="Submit Feedback">
    </form>
<?php endif; ?>

</body>
</html>
