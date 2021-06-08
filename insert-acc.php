<?php include_once "connection.php"; ?>
<?php
	
	session_start();
	if (!isset($_SESSION['id'])) {
		header('location: login-teacher.php');
	}
?>

<?php 

$qr = 	"SELECT * FROM `teacher` WHERE `id` = ".$_SESSION['id'];

$q1 = mysqli_query($con, $qr);
$teacher= mysqli_fetch_array($q1);

$qry = "INSERT INTO `topic` VALUES (NULL, '".$teacher['id']."', '".$_REQUEST['name']."', 'active')";

$qry_exec = mysqli_query($con, $qry);

        if($qry_exec)
        {
            echo "Successfully inserted the topic ";
            header('location: profile-teacher.php');
        }
        else
        {
            echo "Insertion Unsuccessful";
        }

