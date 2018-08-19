<?php
session_start();

if(!isset($_SESSION['username']))
header("location:http://localhost/BMW/login.php");

$username=$_SESSION['username'];
$con=mysqli_connect('localhost','saurabh','eclipse','BMW');
$q="select * from  $username ";
$result=mysqli_query($con,$q);
  
$num=mysqli_num_rows($result);
//echo $num;
mysqli_close($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="./CSS/view.css"/>
</head>
<body>
	<h1>BOOK MANAGEMENT SYSTEM</h1> 
	<h2>Welcome <?php echo $username ?> </h2>
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
				<td><?php echo $row['bookid']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['author']; ?></td>
			</tr>


		<?php	
			}
		?>
		
		
	</table>
	<a href="insertform.php"><input type="button" value="Insert"></a>
	<a href="deleteform.php"><input type="button" value="Delete"></a>
	<a href="updateform.php"><input type="button" value="update"></a>
	<a href="logout.php"><input type="button" value="log out"></a>


</body>
</html>