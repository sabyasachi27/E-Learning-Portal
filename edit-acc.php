
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

$qr1 = 	"SELECT * FROM `topic` WHERE `id` = ".$_SESSION['id'];

$q2 = mysqli_query($con, $qr1);
$topic= mysqli_fetch_array($q2);

$qr2 = 	"SELECT * FROM `contents` WHERE `id` = ".$_SESSION['id'];

$q3 = mysqli_query($con, $qr2);
$content= mysqli_fetch_array($q3);

if($topic['id'] === $content['topicid']){
            header('location: profile-teacher.php');
            echo 'Content is already present .Try to update or view your content' ;
}
else{
    header('location: edit-contents.php');
            echo 'Successfully inserted the contents of ' .$topic['name'] ;
}

?>