
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration Form</h2>

<?php
  /*User Registration Form
 Objective: Pass multiple values securely and display them.
Create an HTML form for user registration. Include fields for username,
 email, and password.
Set the form's method to POST.
In the processing PHP file (register.php), retrieve the values using 
$_POST['username'],
 $_POST['email'], and $_POST['password'].
Echo all the submitted information back to the user, confirming their
 registration details. Do not store the password yet.
Challenge: Add validation. Check if any of the fields are empty using 
empty() 
and display an error message if so.*/
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validation
        if (empty($username) || empty($email) || empty($password)) {
            echo "<p style='color:red;'>Error: All fields are required!</p>";
        } else {
            echo "<h3>Registration Successful!</h3>";
            echo "Username: " . htmlspecialchars($username) . "<br>";
            echo "Email: " . htmlspecialchars($email) . "<br>";
            echo "Password: " . htmlspecialchars($password) . "<br>";
        }
    }
    ?>

    <form method="POST">
        Username: <input type="text" name="username"><br><br>
        Email: <input type="email" name="email"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
