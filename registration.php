
<?php

$username=$_POST['username'];
$password=$_POST['password'];

//echo $password;


$con=mysqli_connect("localhost","saurabh","eclipse");
mysqli_select_db($con,"BMW");
/*if($con)
	echo "yes";
else
 echo "NO";
*/

$q="insert into accounts values('$username','$password')";
$status=mysqli_query($con,$q);
$q="create table $username(bookid int(5) primary key auto_increment,title varchar(20) not null,price int(5) not null,author varchar(20))";
mysqli_query($con,$q);


mysqli_close($con);

?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Congrats <?php echo $username?>,you have registered succesfully </h2>
	<p> <a href="login.php">Sign In</p>

</body>
</html>
