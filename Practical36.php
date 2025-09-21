<?php
/*Create a Php hello.php that takes a name fromthe URl(e.g.Hello.php?name=Rahul and displays)
Hello,Rahul*/

if (isset($_GET['name'])) {   // pehle check karenge ki 'name' diya gaya hai ya nahi
    $name = $_GET['name'];    // URL se name ko variable me store kar liya
    echo "Hello, " . htmlspecialchars($name);  
    // htmlspecialchars() use karte hain taaki koi harmful HTML/JS run na ho (security ke liye)
} else {
    echo "Hello,Rahul";  // agar URL me name nahi diya to default Guest show karega
}
?>
