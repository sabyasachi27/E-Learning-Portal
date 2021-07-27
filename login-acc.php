<?php include_once "connection.php"; ?>

<?php


	// checking for existing email

	// getting student data
	$role = 'student';
	$q1 = mysqli_query($con, "SELECT `id`, `email` AS `student_email`, `password` FROM `student` WHERE `email` = '".$_REQUEST['email']."' AND `validate` = '1'");
	$num = mysqli_num_rows($q1);
	//print_r($num);die();
	$row = mysqli_fetch_array($q1);
	//$row2 = mysqli_fetch_row($row);
	//print_r($row);die();
	//pass varification
	$temp = $_POST['password'];
	$temp2= $row['password'];
	$s = password_verify($temp, $temp2);

	//print_r($s);die();

	if($num === 0) {
		// getting teacher data
		$role = 'teacher';
		$q1 = mysqli_query($con, "SELECT `id`,`email` AS `teacher_email`, `password` FROM `teacher` WHERE `email` = '".$_REQUEST['email']."' AND `validate` = '1'");
		$num = mysqli_num_rows($q1);
		$row = mysqli_fetch_array($q1);
		$temp3 = $row['password'] ;
		$s = password_verify($temp, $temp3);
	}
	// print_r($num);
	// echo '<br><br>';
	// print_r($s);die();
	//echo $s;die();
	if($num === 1 && $s == 1) {
		
		//echo("hello");die();
		// logging the user in
		session_start();

		//$user = mysqli_fetch_array($q1);
		// print_r($user);die();
		// print_r($row);
		// print_r($role);die();
		
		$_SESSION['id'] = $row['id'];
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