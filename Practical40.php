<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <form method="post" action="">
        Enter your name: <input type="text" name="username" required>
        <input type="submit" value="Submit">
    </form>

<?php
/*Create a form e=with a textbox asking for the user'sname.On submission using POST method,
display:
Welcome<name>!*/ 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['username'];
        echo "<h3>Welcome $name!</h3>";
    }
    ?>
</body>
</html>
