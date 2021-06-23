<?php include_once "connection.php"; ?>

<?php

	// running a query
	$qry = "UPDATE `contents` SET `heading` = '".$_REQUEST['heading']."', `type` = '".$_REQUEST['type']."', `links` = '".$_REQUEST['links']."', `content`= '".$_REQUEST['content']."', `updatedAt`='".date("Y-m-d H:i:s")."' WHERE `id` = ".$_REQUEST['id'];
	$qry_exec = mysqli_query($con, $qry);

	if ($qry_exec) {
		// echo "Registered Successfully";
		header('location: profile-teacher.php');
		echo "Update Successfully";
	} else {
		echo "Failed";
	}
?>