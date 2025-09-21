<?php
/*Create a PHP page hello.php that takes a name from the URL(e.g:hello.php?Name=Rahul)and displayes
Hello,Rahul*/
if(isset($_GET['Name'])) {
    $name = $_GET['Name'];
    echo "Hello, " . htmlspecialchars($name);
} else {
    echo "Hello, Guest";
}
?>
