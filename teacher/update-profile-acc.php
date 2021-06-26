<?php include_once "../connection.php"; ?>

<?php

	// running a query
	//print_r($_REQUEST['id']);die();
	$qry = "UPDATE `teacher` SET `name` = '".$_REQUEST['name']."', `email` = '".$_REQUEST['email']."', `mobnumber` = '".$_REQUEST['phno']."'  WHERE `id` = ".$_REQUEST['id'];
	$qry_exec = mysqli_query($con, $qry);

	if ($qry_exec) {
		// echo "Registered Successfully";
		header('location: teacher-profile.php');
		echo "Update Successfully";
	} else {
		echo "Failed";
	}
?>