
<!DOCTYPE html>
<html>
<head>
    <title>Welcome User</title>
</head>
<body>
    <!-- Form to enter user's name -->
    <form method="post" action="">
        Enter Your Name: <input type="text" name="username" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    /*Create a form with a textbox asking for the user’s name. On submission using POST method, display:

Welcome, <name>!*/
    if (isset($_POST['username'])) {
        $name = htmlspecialchars($_POST['username']); // Security: prevent XSS
        echo "<h2>Welcome, $name!</h2>";
    }
    ?>
</body>
</html>
