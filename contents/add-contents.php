<?php include_once "../connection.php"; ?>


<?php
	$qry1 = mysqli_query($con, "SELECT * FROM `courses` WHERE `status` = 'active'");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add content</title>
</head>
<body>
    <div class="content-form"><h1>Add Content</h1></div>
    <div class="mane">
        <form action="add-contents-acc.php">
            <h2 class="name">Select course</h2>
            <select name="course" class="option">
                <option disabled="disabled" selected="selected">--choose option</option>
                <?php
				while($row = mysqli_fetch_array($qry1)) {
	
					echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
				}
			?>
            </select>
            <h2 class="name">Content Name</h2>
            <input class="cont-name" type="text" name="cont-name">

            <h2 class="name">Add link</h2>
            <input type="url" class="link" name="link">

            <h2 class="name">description</h2>
            <input type="message" class="desc" name="content">

            <h2 class="name">Type</h2>
            <select name="type" class="option">
                <option disabled="disabled" selected="selected">--choose option</option>
                <option value="paid">free</option>
                <option value="free">paid</option>
            </select>
            <h2 class="name">course fee</h2>
            <input type="text" class="course-fee" name="course-fee">
        </form>
    </div>
</body>
</html>