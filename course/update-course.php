<?php include_once "../connection.php"; ?>

<?php 
	
	 //print_r($_REQUEST);

	$qry = mysqli_query($con, "SELECT * FROM `courses` WHERE `id` = ".$_REQUEST['id']);
	
	//print_r($qry);die();

	$row = mysqli_fetch_array($qry);

	
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="update-course-acc.php" method="get">
	<input type="hidden" name="id" value="<?=$row['id']?>">
	Course Name: <input type="text" name="name"><br><br>
		Course Description: <input type="text" name="description"><br><br>
		<label for="type">Course Type:</label>
  	<select name="type" >
    	<option value="paid">paid</option>
    	<option value="free">free</option>
  	</select>
  		<br><br>
		  Course Fee: <input type="text" name="coursefee"><br><br>
		
		<input type="submit" value="Insert">
	</form>
</body>
</html>