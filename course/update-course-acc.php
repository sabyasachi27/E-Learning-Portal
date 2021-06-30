<?php include_once "../connection.php"; ?>

<?php

	// running a query
	$qry = "UPDATE `courses` SET `name` = '".$_REQUEST['name']."', `description` = '".$_REQUEST['description']."', `type` = '".$_REQUEST['type']."', `coursefee` = '".$_REQUEST['coursefee']."'  WHERE `id` = ".$_REQUEST['id'];
	$qry_exec = mysqli_query($con, $qry);
	//print_r($qry);
	if ($qry_exec) {
		// echo "Registered Successfully";
		header('location: ../teacher/teacher-profile.php');
		echo "Update Successfully";
	} else {
		echo "Failed";
	}
?>