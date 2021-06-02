<?php include_once "connection.php"; ?>
<?php
	
	session_start();
	if (!isset($_SESSION['id'])) {
		header('location: login.php');
	}
?>
<?php
	
	$qr = 	"SELECT 
				*
			FROM 
				`student`
            AND
                `teacher`
			WHERE 
				`id` = ".$_SESSION['id'];

	$q1 = mysqli_query($con, $qr);

	


	// echo 'Welcome to your profile '.$user['name'];
	// echo '<br>';

	// echo 'Email: '.$user['email'];

?>


<br>
<br>
<br>
<br>
<a href="logout.php">Logout</a>