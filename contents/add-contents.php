<?php include_once "connection.php"; ?>


<?php
	$qry1 = mysqli_query($con, "SELECT * FROM `topic` WHERE `status` = 'active'");
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 

	<form action="edit-contents-acc.php" method="post">
		Topic: 
		<select name="topicId">
			<option value="">Select a topic</option>
			<?php
				while($row = mysqli_fetch_array($qry1)) {
	
					echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
				}
			?>
		</select><br><br>


		Heading: <input type="text" name="heading"><br><br>
		Type/Subject: <input type="message" name="type"><br><br>
		Links: <input type="hyperlink" name="links"><br><br>
        Content: <input type="message" name="content"><br><br>
		<input type="submit" value="Upload">
	</form>

</body>
</html>