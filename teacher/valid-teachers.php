<?php
    require_once("../connection.php");
    if($_GET)
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        if($email == '')
            unset($email);
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
        if($password == '')
            unset($password);
    }
    if(!empty('email') && !empty('password'))
    {
        $qry = mysqli_query($con, "SELECT `id` FROM `teacher` WHERE `email` = '".$_REQUEST['email']."' AND `token`= '".$_REQUEST['token']."'");
        // if ($qry) {
            //print_r($qry);die();
            $r = mysqli_fetch_array($qry);
            //print_r($r);die();
            $qry1 = mysqli_query($con, "UPDATE `teacher` SET `validate` = '1' WHERE `id` = '".$r['id']."'");
	        //$qry1_exec = mysqli_query($con, $qry1);
        if($qry1)
        {
            header('location: teacher-profile.php');;
        }
        else{
            echo "Failed";
        }
    }   
?>