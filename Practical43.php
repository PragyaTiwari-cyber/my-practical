<html>
   <form method="post" action="">
     <label>Which Is Your Favourite Lnguage</label>
     <br>
     <input type="radio" name="language" value="PHP">PHP<br>
     <input type="radio" name="language" value="JavaScript">JavaScript<br>
     <input type="radio" name="language" value="Python">Python<br>
      <input type="submit"  value="submit">
   </form>

</html>
<?php
/*Create a form asking: "Which is your favorite programming language?" 
(options: PHP, JavaScript, Python).
On submission, display the selected choice.*/
 if($_POST['language']){
       echo"you selected:".$_POST['language'];
    }   
    ?>            