<?php
$username=$_POST['username'];
$password=$_POST['password'];
session_start();
//echo $username;
//echo $password;

$con=mysqli_connect('localhost','saurabh','eclipse','BMW');
$q="select * from  accounts where username='$username' && password='$password'";
$result=mysqli_query($con,$q);
$num= mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['username']=$username;
	header("location:http://localhost/BMW/home.php");


}
else if($num==0)
header("location:http://localhost/BMW/index.php");
?>