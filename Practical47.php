
<!DOCTYPE html>
<html>
<head>
    <title>Simple Login System</title>
</head>
<body>
    <h2>Login Form</h2>

    <!-- Login form -->
    <form method="post" action="">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    /*Simple Login System

Use POST to process form data and compare it with predefined values.

Create a simple login form with username and password fields.

Set the form method to POST.

In the processing PHP file (login.php), check if the 
submitted username is admin and the password is 12345.

If the credentials match, display a "Login successful!" message.

If they do not match, display an "Invalid credentials" error.

Challenge: Use the isset() function to check if the form has 
been submitted before trying to access the $_POST variables*/
    // Check if form is submitted
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Compare with predefined credentials
        if ($username === "admin" && $password === "12345") {
            echo "<h3 style='color:green;'>Login successful!</h3>";
        } else {
            echo "<h3 style='color:red;'>Invalid credentials</h3>";
        }
    }
    ?>
</body>
</html>















