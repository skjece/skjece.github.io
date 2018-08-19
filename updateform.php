<?php

session_start();
if(!isset($_SESSION['username']))
header("location:http://localhost/BMW/login.php");

$username=$_SESSION['username'];


$con=mysqli_connect('localhost','saurabh','eclipse','BMW');
/*
if(!$con)
echo "connection failed";
else
echo "connected";
*/
$q="select * from $username";
$result=mysqli_query($con,$q);  
$num=mysqli_num_rows($result);
//echo $num;
mysqli_close($con);
?>




<!DOCTYPE html>
<html>
<head>
	<title>VIEW</title>
	<link rel="stylesheet" href="./CSS/view.css"/>
</head>
<body>
	<h1>BOOK MANAGEMENT SYSTEM   --> <?php echo $username ?></h1> 
	<form action="updation.php" method="POST">
		<table id="abc">
			<tr>
				<th> BOOK ID</th>
				<th> NAME</th>
				<th>PRICE</th>
				<th>Author</th>
			</tr>
			<?php
			for($i=1;$i<=$num;$i++)
				{
					$row=mysqli_fetch_array($result);
			?>
				<tr>
					<td><?php echo $row['bookid']; ?>
						<input type="hidden" name="bookid<?php echo $i?>" value="<?php echo $row['bookid']?>" >
					</td>
					<td><input type="text" name="title<?php echo $i?>" value="<?php echo $row['title']?>" ></td>
					<td><input type="text" name="price<?php echo $i?>" value="<?php echo $row['price']?>" ></td>
					<td><input type="text" name="author<?php echo $i?>" value="<?php echo $row['author']?>" ></td>
				</tr>


			<?php	
				}
			?>
			
			
		</table>
		<tr><input type="submit" value="Update"></tr>
	</form>
	<a href="home.php"> <input type="button" value="Home"> </a>
</body>
</html>
