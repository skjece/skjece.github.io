<?php

session_start();
if(!isset($_SESSION['username']))
header("location:http://localhost/BMW/login.php");


$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html>
 <head>
  <title>INSERT_FORM</title>
 </head>
 <body>
   <h1>Book Managemnt System  -->  <?php echo $username ?></h1>

   <form action="insertion.php" method="POST">
     <table>
      <tr>
       <th>BOOK TITLE</th>
       <td><input type="text" name="title" placeholder="enter book name" required></td>   	
      </tr>
      <tr>
       <th>PRICE</th>
       <td><input type="text" name="price" placeholder="enter book price" required></td>     
      </tr>
      <tr>
       <th>BOOK AUTHOR</th>
       <td><input type="text" name="author" placeholder="enter book author" ></td>     
      </tr>
      <tr>
        <td><input type="submit" value="INSERT" ></td>
      </tr> 
     </table>
   </form>
   <a href="home.php"> <input type="button" value="Home"> </a>
 </body>
</html>
