<?php include_once "../connection.php"; ?>

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