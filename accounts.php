<?php
$username=$_GET['username'];
//echo $username;
$con=mysqli_connect('localhost','saurabh','eclipse','BMW');
$q="select username from  accounts where username='$username'";
$result=mysqli_query($con,$q);
$num= mysqli_num_rows($result);
if($num==1)
{
	echo "already reserved";

}
else if($num==0)

echo "valid";

?>