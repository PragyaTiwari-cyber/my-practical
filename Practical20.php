<?php
//Create and print the indexed array of size 10 using index number.
$array=array();
for($i=0;$i<10;$i++){
    $array[$i]=$i+1;

}
for($i=0;$i<10;$i++){
    echo $array[$i]."<br>";
}
?>