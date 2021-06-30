<?php include_once "../connection.php"; ?>

<?php 
	
	// print_r($_REQUEST);

	$qry = mysqli_query($con, "SELECT * FROM `contents` WHERE `id` = ".$_REQUEST['id']);
	
	$row = mysqli_fetch_array($qry);

	// print_r($row);
?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 

	<form action="update-contents-acc.php" method="get">
	

	<input type="hidden" name="id" value="<?=$row['id']?>">
		Heading: <input type="text" name="heading"><br><br>
		Type/Subject: <input type="message" name="type" ><br><br>
		Links: <input type="hyperlink" name="links" ><br><br>
        Content: <input type="message" name="content" ><br><br>
		<input type="submit" value="Upload">
	</form>

</body>
</html>