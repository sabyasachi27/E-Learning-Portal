<?php include_once "connection.php"; ?>

<?php 
    $qry = "INSERT INTO `student` VALUES ('', '".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."', '".$_REQUEST['address']."', '".$_REQUEST['mobno']."')";
    $qry_exec = mysqli_query($con, $qry);

?>