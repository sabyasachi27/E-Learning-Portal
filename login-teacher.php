<?php
	
	session_start();
	if (isset($_SESSION['id'])) {
		header('location: profile-teacher.php');
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="login-teacher-acc.php" method="post">
		Email: <input type="email" name="email"><br><br>
		Password: <input type="password" name="password"><br><br>
		<input type="submit" value="Login">
	</form>

	<p style="color: red">
		<?php
			if(isset($_REQUEST['message'])) {
				echo $_REQUEST['message'];
			}
		?>
	</p>
</body>
</html>