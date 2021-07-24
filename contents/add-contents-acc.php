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
$temp = $_REQUEST['topicId'];
//print_r($_REQUEST['topicId']);die();

    //print_r ($course['id']);die();
    $qry = "INSERT INTO `contents` VALUES (NULL, '".$_REQUEST['topicId']."', '".$_REQUEST['heading']."', '".$_REQUEST['type']."', '".$_REQUEST['links']."', '".$_REQUEST['content']."', '".$teacher['name']."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."',  'active')";

    $qry_exec = mysqli_query($con, $qry);
    //print_r($qry);die();
       
        if($qry_exec)
        {
            
<<<<<<< HEAD
            header('location: contents.php');
            echo 'Successfully inserted the contents of ' .$course['name'] ;
=======
            header("location: contents.php?id={$temp}");
            echo "Successfully inserted the contents of " .$course['name'] ;
>>>>>>> fee24c0fd2dd0768eb299ef6c10a466ee0c59756
        }
        else
        {
            echo "Update Unsuccessful";
        }




?>