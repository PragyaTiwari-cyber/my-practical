<?php
/*Contact Form 
Create a contact form (Name, Subject, Message).
On submission, show "Thank you <name>, we will contact you soon!"
Use GET to pass the name to the thank-you page.*/
if(isset($_GET['submitted'])){
    $name = htmlspecialchars($_GET['name']);
    echo "<h2>Thank you $name, we will contact you soon!</h2>";
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <form method="GET">
        <input type="hidden" name="submitted" value="1">
        Name: <input type="text" name="name" required><br><br>
        Subject: <input type="text" name="subject" required><br><br>
        Message: <textarea name="message" required></textarea><br><br>
        <input type="submit" value="Send">
    </form>
</body>
</html>
<?php

}
?>
