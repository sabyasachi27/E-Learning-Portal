<?php include_once "connection.php"; ?>
<?php
	
	session_start();
	if (!isset($_SESSION['id'])) {
		header('location: login-teacher.php');
	}
?>
<?php
	
	/*$qr = 	"SELECT 
				*
			FROM 
				`teacher`
			WHERE 
				`id` = ".$_SESSION['id'];

	$q1 = mysqli_query($con, $qr);

	


	 echo 'Welcome to your profile '.$teacher['name'];
	 echo '<br>';

	 echo 'Email: '.$teacher['email'];*/

     echo "Login Success";

?>


<br>
<br>
<br>
<br>
<a href="logout.php">Logout</a>