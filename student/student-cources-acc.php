<?php include_once "..connection.php"; ?>
<?php 

    session_start();
    print_r($_REQUEST['id']); //it will show course id
    $q1 = mysqli_query($con, "SELECT * FROM `courses` WHERE `id` = '".$_REQUEST['id']."'");
    $course = mysqli_fetch_array($q1);
    $q2 = mysqli_query($con, "SELECT * FROM `student` WHERE `id` = '".$_SESSION['id']."'");
    $student = mysqli_fetch_array($q2);
    $qry = "INSERT INTO `student_courses` VALUES (NULL, '".$_SESSION['id']."', '".$course['id']."', '".$student['name']."', '".$course['name']."', 'active')";
        $qry_exec = mysqli_query($con, $qry);
    if($qry_exec){
        
    }