<?php include_once "../connection.php"; ?>

<?php

	// running a query
	$qry = "UPDATE `contents` SET `contentname` = '".$_REQUEST['cont-name']."', `type` = '".$_REQUEST['type']."', `links` = '".$_REQUEST['link']."', `content`= '".$_REQUEST['content']."', `updatedAt`='".date("Y-m-d H:i:s")."' WHERE `id` = ".$_REQUEST['id'];
	$qry_exec = mysqli_query($con, $qry);
	$qry1= mysqli_query($con, "SELECT * FROM `contents` WHERE `id` = '".$_REQUEST['id']."'");
    $row = mysqli_fetch_array($qry1);
    //print_r($row['courseid']);die();
	if ($qry_exec) {
		echo "Update successfully";
		header("Location: contents.php");
	
	} else {
		echo "Failed";
	}
?>