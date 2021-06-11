<?php include_once "connection.php"; ?>

<?php
	
	session_start();
	if (!isset($_SESSION['id'])) {
		header('location: login-teacher.php');
        header ('location: insert-acc.php');
	}
?>
  
<?php
$qr = 	"SELECT * FROM `teacher` WHERE `id` = ".$_SESSION['id'];

$q1 = mysqli_query($con, $qr);

$teacher= mysqli_fetch_array($q1);

$qr1 = 	"SELECT * FROM `topic` WHERE `id` = `topic`.`id`";

$q2 = mysqli_query($con, $qr1);
$topic= mysqli_fetch_array($q2);

    echo ''.$topic['id'];
    $qry = "INSERT INTO `contents` VALUES (NULL, '".$topic['id']."', '".$_REQUEST['heading']."', '".$_REQUEST['type']."', '".$_REQUEST['links']."', '".$_REQUEST['content']."', '".$teacher['name']."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."',  'active')";

    $qry_exec = mysqli_query($con, $qry);

        if($qry_exec)
        {
            
            header('location: profile-teacher.php');
            echo 'Successfully inserted the contents of ' .$topic['name'] ;
        }
        else
        {
            echo "Update Unsuccessful";
        }




?>