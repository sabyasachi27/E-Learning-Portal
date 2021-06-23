<?php include_once "../connection.php"; ?>

<?php 
	
	//print_r($_SESSION['id']);die();

	$qry = mysqli_query($con, "SELECT * FROM `student` WHERE `id` = ".$_REQUEST['id']);
	
	$row = mysqli_fetch_array($qry);

	// print_r($row);
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Edit</title>
    <link rel="stylesheet" type="text/css" href="edit-profile-style.css">
</head>
<body>
    <center>
    <form action="update-profile-acc.php" method="post">
        <div class="box">
            <img src="../img/man.png" alt="Profile Pic">
            <input type="file" name="" id="file" accept="image/*">
            <label for="file">EDIT PIC</label>
            <div class="form">
                <input type="text" name="name" placeholder="Enter Your Name">
                <input type="email" name="email" placeholder="Enter Your Email">
                <input type="text" name="phno" placeholder="Enter Your phone no.">
            
            <button type= "cancel" style="float:left; margin:10px 0 0 18.2%;" onclick="location.href='stud-profile.php';return false;">BACK</button>
            <button type="submit" value="submit"style="float:right; margin:10px 18.2% 0 0;" >UPDATE</button></div>
        </div>
    </form>
    </center>
</body>
</html>