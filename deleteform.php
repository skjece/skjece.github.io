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
	<title>Deletion</title>
	<link rel="stylesheet" href="./CSS/view.css"/>
</head>
<body>
	<h1>BOOK MANAGEMENT SYSTEM--->   <?php echo $username ?></h1> 
	<form action="deletion.php" method="POST">
		<table id="abc">
			<tr>
				<th> BOOK ID</th>
				<th> NAME</th>
				<th>PRICE</th>
				<th>Author</th>
				<th>Select To Delete</th>
			</tr>
			<?php
			for($i=1;$i<=$num;$i++)
				{
					$row=mysqli_fetch_array($result);
			?>
				<tr>
					<td><?php echo $row['bookid']; ?></td>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['price']; ?></td>
					<td><?php echo $row['author']; ?></td>
					<td><input type="checkbox" value="<?php  echo $row['bookid']  ?>" name="b<?php echo $i ?>"/></td>
				</tr>



			<?php	
				}
			?>
			<!--<input type="text" name="xyz"/>-->
			<td ><input type="submit" value="Delete"/></td>
			
			
		</table>
		<a href="home.php"> <input type="button" value="Home"> </a>
	</form>
</body>
</html>
