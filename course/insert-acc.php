<?php include_once "../connection.php"; ?>
<?php
	
	session_start();
	if (!isset($_SESSION['id'])) {
		header('location: ../teacher/teacher-profile.php');
	}
?>

<?php 
//print_r($_SESSION['id']);die();
$qr = 	"SELECT * FROM `teacher` WHERE `id` = ".$_SESSION['id'];

$q1 = mysqli_query($con, $qr);
$teacher= mysqli_fetch_array($q1);
//print_r($_REQUEST['type']);die();

// processing the image
$path = "../uploads/".$_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, $path);

$qry = "INSERT INTO `courses` VALUES (NULL, '".$teacher['id']."', '".$_REQUEST['name']."', '".$_REQUEST['description']."', '".$path."', '".$_REQUEST['type']."', '".$_REQUEST['coursefee']."', 'active')";

$qry_exec = mysqli_query($con, $qry);
//print_r($qry);die();

        if($qry_exec)
        {
            
            
            header('location: ../contents/add-contents.php');
            echo "Successfully inserted the topic ";
        }
        else
        {
            echo "Insertion Unsuccessful";
        }

