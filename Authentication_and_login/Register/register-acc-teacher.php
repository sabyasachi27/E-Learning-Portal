<?php include_once "connection.php"; ?>

<?php

    //checking duplication
    $q1 = mysqli_query($con, "SELECT `id` FROM `teacher` WHERE `email` = '".$_REQUEST['email']."'");
    $num = mysqli_num_rows($q1);
    if($num == 0) {

        //running query for inserting data
        $qry = "INSERT INTO `teacher` VALUES (NULL, '".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."', '".$_REQUEST['mobno']."', 'active')";
        $qry_exec = mysqli_query($con, $qry);

        if($qry_exec)
        {
            //echo "Register Successful";
            header('location: Authentication_and_login\Login\login.php');
        }
        else    
        {
            echo "register unccessful";
        }
    }
    else {
        echo "Email already existed, Please try to login.";
    }
    

?>