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

$qr1 = 	"SELECT * FROM `courses` WHERE `id` = '".$_REQUEST['course']."'";

$q2 = mysqli_query($con, $qr1);
$course= mysqli_fetch_array($q2);
$temp = $_REQUEST['course'];
//print_r($qr1);die();

    //print_r ($course['id']);die();
    $qry = "INSERT INTO `contents` VALUES (NULL, '".$_REQUEST['course']."', '".$_SESSION['id']."', '".$_REQUEST['cont-name']."', '".$_REQUEST['type']."', '".$_REQUEST['link']."', '".$_REQUEST['content']."', '".$teacher['name']."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."',  '".$_REQUEST['course-fee']."','active')";

    $qry_exec = mysqli_query($con, $qry);
    //print_r($qry);die();
       
        if($qry_exec)
        {
            
            header("location: contents.php?id={$temp}");
            echo "Successfully inserted the contents of " .$course['name'] ;
        }
        else
        {
            echo "Update Unsuccessful";
        }




?>