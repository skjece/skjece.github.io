
<?php
session_start();
$username=$_SESSION['username'];

$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];

//echo $title;


$con=mysqli_connect("localhost","saurabh","eclipse");
mysqli_select_db($con,"BMW");
/*if($con)
	echo "yes";
else
 echo "NO";
*/

$q="insert into $username(title,price,author) values('$title',$price,'$author')";
$status=mysqli_query($con,$q);

mysqli_close($con);
?> 

<!DOCTYPE html>
<html>
<head>
	<title>INSERTION</title>
</head>
<body>
	<h1>BOOK MANAGEMENT SYSTEM --> <?php echo $username ?></h1> 
	<p>
		<?php 
		if($status==1)
			echo "Insertion Succesful";
		else
			echo "insertion failed";
		?>

	</p>
	<a href="insertform.php"> <input type="button" value="insert more"> </a>

	<a href="home.php"> <input type="button" value="Home"> </a>


</body>
</html>
