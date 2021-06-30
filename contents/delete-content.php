<?php include_once "../connection.php"; ?>

<?php 
	
	 //sprint_r($_REQUEST['id']);die();
	
	// $qry = mysqli_query($con, "DELETE FROM `users` WHERE `id` = ".$_REQUEST['id']);
    
	$qry = mysqli_query($con, "UPDATE `contents` SET `status` = 'inactive' WHERE `id` = ".$_REQUEST['id']);
    $qry1= mysqli_query($con, "SELECT * FROM `contents` WHERE `id` = ".$_REQUEST['id']);
    $row = mysqli_fetch_array($qry1);
    //print_r($row['courseid']);die();
	if ($qry) {
		echo "successfully Deleted";
		header("Location: contents.php?id=".$row['courseid']);
	} else {
		echo "Failed";
	}

?>