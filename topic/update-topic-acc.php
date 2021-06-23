<?php include_once "connection.php"; ?>

<?php

	// running a query
	$qry = "UPDATE `topic` SET `name` = '".$_REQUEST['name']."' WHERE `id` = ".$_REQUEST['id'];
	$qry_exec = mysqli_query($con, $qry);

	if ($qry_exec) {
		// echo "Registered Successfully";
		header('location: #');
		echo "Update Successfully";
	} else {
		echo "Failed";
	}
?>