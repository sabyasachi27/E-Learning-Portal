<?php include_once "connection.php"; ?>

<?php

	// checking for existing email
	$q1 = mysqli_query($con, "SELECT `email` FROM `student` WHERE `email` = '".$_REQUEST['email']."' AND `password` = '".$_REQUEST['password']."' UNION SELECT `id` FROM `teacher` WHERE `email` = '".$_REQUEST['email']."' AND `password` = '".$_REQUEST['password']."'");
	$num = mysqli_num_rows($q1);

	if ($num === 1) {
		
		// logging the user in
		session_start();

		$user = mysqli_fetch_array($q1);
		// print_r($user);
        //if($user['id'] isfrom)
		$_SESSION['id'] = $user['id'];

		header('location: student/stud-profile.php');
		echo "Login successful";

	} else {
		header('location: index.php?status=Incorrect Email or password');
	}
?>