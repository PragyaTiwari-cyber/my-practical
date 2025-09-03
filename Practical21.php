<?php
//Create and print the indexed array of size 10 using for loop.
$num=array();
for($i=0;$i<10;$i++){
    $num[$i]=$i+1;
}
for($i=0;$i<10;$i++){
    echo"Index $i=>".$num[$i]."<br>";
}
?>