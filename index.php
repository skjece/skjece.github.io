<!DOCTYPE html>
<html>
<head>
	<title>BOOK MANAGEMENT WEBSITE</title>
	<link rel="stylesheet" href="./CSS/view.css"/>
</head>
<body>
	<div id="form">
 		<h1 >BOOK MANAGEMENT LOGIN</h1><hr/>
 	 	<form action="vlogin.php" method="POST"  >
			<table>
				<tr>
					<td style="position:relative ;left:80px;">USERNAME</td>
					<td> <input type="text" name="username" "/></td>
					<td><h6 id="xyz"></h6></td>
				</tr>
				

				<tr>
					<td style="position:relative ;left:80px;">PASSWORD</td>
					<td> <input type="password" name="password"  "/></td>

				</tr>	
				
			</table>
			<input type="submit" value="Login" style="position:relative ;left:300px;" /><hr/>
		</form>
		<p style="text-align: right;" >New user <a href="registerform.php" >Sign UP</a></p>
</div>
	
</body>
</html>