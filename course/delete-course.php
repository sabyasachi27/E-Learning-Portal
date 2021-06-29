<?php include_once "connection.php"; ?>

<?php 
	
	// print_r($_REQUEST);
	
	// $qry = mysqli_query($con, "DELETE FROM `users` WHERE `id` = ".$_REQUEST['id']);
	$qry = mysqli_query($con, "UPDATE `topic` SET `status` = 'inactive' WHERE `id` = ".$_REQUEST['id']);

	if ($qry) {
		// echo "successfully Deleted";
		header('location: #');
	} else {
		echo "Failed";
	}

?>