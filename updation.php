<?php
session_start();
$username=$_SESSION['username'];
$size=sizeof($_POST);
$records=$size/4;
//echo "no. of records is $records";
for($i=1;$i<=$records;$i++)
{
	$index1="bookid".$i;
	$b_id[$i]=$_POST[$index1];
	$index2="title".$i;
	$title[$i]=$_POST[$index2];
	$index3="price".$i;
	$price[$i]=$_POST[$index3];
	$index4="author".$i;
	$author[$i]=$_POST[$index4];

}

$con=mysqli_connect('localhost','saurabh','eclipse','BMW');


for($k=1;$k<=$records;$k++)
{
	$q="update $username set title='$title[$k]',price=$price[$k],author='$author[$k]' Where bookid=$b_id[$k]";
	$status=mysqli_query($con,$q);
	/*echo $author[$k];
	echo "\n";*/
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>UPDATION</title>
</head>
<body>
	<h1>BOOK MANAGEMENT SYSTEM</h1> 
	<p>
		<?php 
		if($status==1)
			echo "Successfully uptated $records records ";
		else
			echo "updation failed";
		?>

	</p>
	<a href="insertform.php"> <input type="button" value="insert more"> </a>

	<a href="home.php"> <input type="button" value="Home"> </a>




</body>
</html>
