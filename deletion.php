<?php

   session_start();
   $username=$_SESSION['username'];
    
	$size=sizeof($_POST);
	//echo $size;
	
		
	//echo $size;
	$j=1;
	for($i=1;$i<=$size;$i++)
	{
		$index='b'.$j;
		if(isset($_POST[$index]))
			{
				$b_id[$i]=$_POST[$index];
				//echo $_POST[$index]."  ";
			}
		else
			$i--;
		$j++;
	}
	$con=mysqli_connect('localhost','saurabh','eclipse','BMW');
	for($k=1;$k<=$size;$k++)
		{
			$q="delete from $username where bookid=".$b_id[$k];
			$status=mysqli_query($con,$q);
		}
	mysqli_close();	


?>

<!DOCTYPE html>
<html>
<head>
	<title>DELETION</title>
</head>
<body>
		<h1>BOOK MANAGEMENT SYSTEM --> <?php echo $username ?></h1>
		<p>You have deleted <?php echo $size ?> records succesfully</p>
		<a href="insertform.php"><input type="button" value="Insert"></a>
		
		<a href="deleteform.php"><input type="button" value="delete more"></a>
		<a href="home.php"> <input type="button" value="Home"> </a>
</body>
</html>