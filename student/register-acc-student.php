<?php include_once "..\connection.php"; ?>

<?php 

    //checking duplication
    $q1 = mysqli_query($con, "SELECT `id` FROM `student` WHERE `email` = '".$_REQUEST['email']."' UNION SELECT `id` FROM `teacher` WHERE `email` = '".$_REQUEST['email']."'");
    $num = mysqli_num_rows($q1);
    
    if($num == 0) {

        //running query for inserting data
        $path = "../uploads/".$_FILES["image"]["name"];
        $tmp = $_FILES["image"]["tmp_name"];
        move_uploaded_file($tmp, $path);

        $qry = "INSERT INTO `student` VALUES (NULL, '".$path."', '".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."', '".$_REQUEST['mobile']."', 'active')";
        $qry_exec = mysqli_query($con, $qry);
        
        if($qry_exec)
        {
            $qry1=mysqli_query($con, "SELECT `id` FROM `student` WHERE `email` = '".$_REQUEST['email']."'");
            session_start();

		$user = mysqli_fetch_array($qry1);
		// print_r($user);
		$_SESSION['id'] = $num['id'];

            echo "Register Successful";
            header('location: stud-profile.php');
        }
        else
        {
            echo "Register Unsuccessful";
        }
    }
    else {
        // echo "Email already existed, Please try to login.";
        header('location: register-student.php?status=Email already existed, Please try to login.');
    }

?>