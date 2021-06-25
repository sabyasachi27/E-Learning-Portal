<!-- <?php include_once "../connection.php"; ?>

<?php
    //print_r($_REQUEST['id']);
    $qr = 	"SELECT 
				*
			FROM 
				`student`
			WHERE 
				`id` = ".$_REQUEST['id'];

	$q1 = mysqli_query($con, $qr);

	$student= mysqli_fetch_array($q1);
    //echo ''.$qr;

	 echo 'Name : '.$student['name'];
	 echo '<br>';

	 echo 'Email : '.$student['email']; 
	 echo '<br>';

     echo 'Phone Number : '.$student['mobnumber']; 
	 echo '<br>';
?> -->

<!-- ####Demo######## -->
<?php include_once "../connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		//print_r($_REQUEST['id']);
		$qr = 	"SELECT 
					*
				FROM 
					`student`
				WHERE 
					`id` = ".$_REQUEST['id'];

		$q1 = mysqli_query($con, $qr);

		$student= mysqli_fetch_array($q1);
		//echo ''.$qr;

		echo 'Name : '.$student['name'];
		echo '<br>';

		echo 'Email : '.$student['email']; 
		echo '<br>';

		echo 'Phone Number : '.$student['mobnumber']; 
		echo '<br>';
	?>
</body>
</html>