<?php include_once "connection.php"; ?>

<?php


	// checking for existing email

	// getting student data
	$role = 'student';
	$q1 = mysqli_query($con, "SELECT `id`, `email` AS `student_email` FROM `student` WHERE `email` = '".$_REQUEST['email']."' AND `password` = '".$_REQUEST['password']."'");
	$num = mysqli_num_rows($q1);

	if ($num === 0) {
		// getting teacher data
		$role = 'teacher';
		$q1 = mysqli_query($con, "SELECT `id`,`email` AS `teacher_email` FROM `teacher` WHERE `email` = '".$_REQUEST['email']."' AND `password` = '".$_REQUEST['password']."'");
		$num = mysqli_num_rows($q1);
	}

	if ($num === 1) {
		
		// logging the user in
		session_start();

		$user = mysqli_fetch_array($q1);
		// print_r($user);die();
		
		$_SESSION['id'] = $user['id'];
		$_SESSION['role'] = $role;

		if ($role === 'student') {
			// echo 'redirect to student profile';
			header('location: student/stud-profile.php');
		} else if ($role === 'teacher') {
			header('location: teacher/teacher-profile.php');	
		}
		// header('location: student/stud-profile.php');
		// echo "Login successful";

	} else {
		header('location: index.php?status=Incorrect Email or password');
	}
?>