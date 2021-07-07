<?php include_once "../connection.php"; ?>

<?php

	// running a query
	//print_r($_REQUEST['id']);die();
	$path = "../uploads/".$_FILES["image"]["name"];
	$tmp = $_FILES["image"]["tmp_name"];
	move_uploaded_file($tmp, $path);

	$qry = "UPDATE `teacher` SET `profileimg`= '".$path."', `name` = '".$_REQUEST['name']."', `email` = '".$_REQUEST['email']."', `mobnumber` = '".$_REQUEST['phno']."'  WHERE `id` = ".$_REQUEST['id'];
	$qry_exec = mysqli_query($con, $qry);

	if ($qry_exec) {
		// echo "Registered Successfully";
		header('location: teacher-profile.php');
		echo "Update Successfully";
	} else {
		echo "Failed";
	}
?>