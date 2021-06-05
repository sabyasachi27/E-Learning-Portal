
<?php
	
	session_start();
	if (!isset($_SESSION['id'])) {
		header('location: loginAs.php');
	}
?>
<?php 
	
	session_start();

	session_destroy();

	header('location: loginAs.php');

 ?>