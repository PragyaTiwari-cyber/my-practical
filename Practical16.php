<?php
/*WAP using following LOOP to print the numberfrom 1 to 20
 1)for loop
 2)while loop
 3)dowhile loop
 */
for($i=0;$i<=20;$i=$i++)
{
    echo"$i ";
}
//while loop
$i=0;
while($i<=20){
      echo("$i ");
     $i= $i++;
}
$i=0;
do{
    echo("$i ");
    $i=$i++;
}while($i<=20)

?>
