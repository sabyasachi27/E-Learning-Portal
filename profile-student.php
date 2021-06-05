<?php include_once "connection.php"; ?>
<?php
	
	session_start();
	if (!isset($_SESSION['id'])) {
		header('location: login-student.php');
	}
?>
<?php
	
	/*$qr = 	"SELECT 
				*
			FROM 
				`student`
			WHERE 
				`id` = ".$_SESSION['id'];

	$q1 = mysqli_query($con, $qr);

	


	 echo 'Welcome to your profile '.$student['name'];
	 echo '<br>';

	 echo 'Email: '.$student['email'];*/

	 echo "Login Successful";

?>


<br>
<br>
<br>
<br>
<a href="logout.php">Logout</a>