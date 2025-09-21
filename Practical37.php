<?php
/*Pass name and age in the URL(details.php?name=Anita&age=22)and display
 Hello Anita,you  are 22 years old*/ 


// Check if name and age are passed in URL
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = htmlspecialchars($_GET['name']); // safe banane ke liye
    $age = htmlspecialchars($_GET['age']);

    echo "Hello $name, you are $age years old";
} else {
    echo "Hello Anita,you are 22years old";
}
?>

