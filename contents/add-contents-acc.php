<?php include_once "../connection.php"; ?>

<?php
	
	session_start();
	if (!isset($_SESSION['id'])) {
		header('location: login-acc.php');
        header ('location: teacher-profile.php');
	}
?>
  
<?php
$qr = 	"SELECT * FROM `teacher` WHERE `id` = ".$_SESSION['id'];

$q1 = mysqli_query($con, $qr);

$teacher= mysqli_fetch_array($q1);

$qr1 = 	"SELECT * FROM `courses` WHERE `id` = '".$_REQUEST['topicId']."'";

$q2 = mysqli_query($con, $qr1);
$course= mysqli_fetch_array($q2);

    //print_r ($course['id']);die();
    $qry = "INSERT INTO `contents` VALUES (NULL, '".$_REQUEST['topicId']."', '".$_REQUEST['heading']."', '".$_REQUEST['type']."', '".$_REQUEST['links']."', '".$_REQUEST['content']."', '".$teacher['name']."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."',  'active')";

    $qry_exec = mysqli_query($con, $qry);
    //print_r($qry);die();
        if($qry_exec)
        {
            
            header('location: contents.php');
            echo 'Successfully inserted the contents of ' .$course['name'] ;
        }
        else
        {
            echo "Update Unsuccessful";
        }




?>