<?php include_once "../connection.php"; ?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//checking duplication
$q1 = mysqli_query($con, "SELECT `id` FROM `student` WHERE `email` = '" . $_REQUEST['email'] . "' UNION SELECT `id` FROM `teacher` WHERE `email` = '" . $_REQUEST['email'] . "'");
$num = mysqli_num_rows($q1);
if ($num == 0) {

    //validation
    $output = '';
    if ($_POST) {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            if ($email == '')
                unset($email);
        }
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
            if ($password == '')
                unset($password);
        }
        if (!empty('email') && !empty('password')) {
            $password = password_hash($password, PASSWORD_DEFAULT);

            function getToken($len = 32)
            {
                return substr(md5(openssl_random_pseudo_bytes(20)), -$len);
            }
            $token = getToken(10);

            $path = "../uploads/" . $_FILES["image"]["name"];
            $tmp = $_FILES["image"]["tmp_name"];
            move_uploaded_file($tmp, $path);

            $qry = "INSERT INTO `teacher` VALUES (NULL, '" . $path . "', '" . $_REQUEST['name'] . "', '" . $_POST['email'] . "', '" . $password . "', '" . $_REQUEST['mobile'] . "', 'active', '" . $token . "', '0')";

            //$qry = "INSERT INTO `user` VALUES (NULL, '".$_POST['email']."', '".$password."', '".$token."', '0')";
            $qry_exec = mysqli_query($con, $qry);
            if ($qry_exec) {


                //validation
                require '../vendor/autoload.php';

                $mail = new PHPMailer(true);
                $mail->IsSMTP(); // enable SMTP
                $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
                $mail->SMTPAuth = true; // authentication enabled
                $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 465; // or 587
                $mail->IsHTML(true);
                $mail->Username = "mystudyland.edu@gmail.com";
                $mail->Password = "StudyLand7458";

                try {
                    $mail->SetFrom('mystudyland.edu@gmail.com', 'User registration');
                    $mail->AddAddress($_POST['email']);

                    $mail->IsHTML(true);
                    $mail->Subject = 'Confirm Email';
                    $mail->Body = 'Activate your email:
                    <a href ="http://localhost/StudyLand/teacher/valid-teachers.php?email=' . $email . '&token=' . $token . '">Click Here</a>';

                    $mail->send();
                    $output = 'Message sent';
                } catch (Exception $e) {
                    echo "Message could not sent!", $mail->ErrorInfo;
                }



                $qry1 = mysqli_query($con, "SELECT `id` FROM `teacher` WHERE `email` = '" . $_REQUEST['email'] . "'");
                session_start();

                $user = mysqli_fetch_array($qry1);
                // print_r($user);
                $_SESSION['id'] = $num['id'];

                echo "Register Successful";
                header('location: teacher-profile.php');
            } else {
                echo "Register Unsuccessful";
            }

            //     // header('location: index.php');
            //     echo "Successful";
            // } else {
            //     echo "Failed";
            // }

            // require 'vendor/autoload.php';

            // $mail = new PHPMailer(true);
            // $mail->IsSMTP(); // enable SMTP
            // $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            // $mail->SMTPAuth = true; // authentication enabled
            // $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            // $mail->Host = "smtp.gmail.com";
            // $mail->Port = 465; // or 587
            // $mail->IsHTML(true);
            // $mail->Username = "mystudyland.edu@gmail.com";
            // $mail->Password = "StudyLand7458";

            // try {
            //     $mail->SetFrom('mystudyland.edu@gmail.com', 'User registration');
            //     $mail->AddAddress($_POST['email']);

            //     $mail->IsHTML(true);
            //     $mail->Subject = 'Confirm Email';
            //     $mail->Body = 'Activate your email:
            // <a href ="http://localhost/StudyLand/valid.php?email=' . $email . '&token=' . $token . '">Click Here</a>';

            //     $mail->send();
            //     $output = 'Message sent';
            // } catch (Exception $e) {
            //     echo "Message could not sent!", $mail->ErrorInfo;
            // }
        }
    }

    //running query for inserting data
    // $path = "../uploads/" . $_FILES["image"]["name"];
    // $tmp = $_FILES["image"]["tmp_name"];
    // move_uploaded_file($tmp, $path);

    // //$qry = "INSERT INTO `teacher` VALUES (NULL, '" . $path . "', '" . $_REQUEST['name'] . "', '" . $_REQUEST['email'] . "', '" . $_REQUEST['password'] . "', '" . $_REQUEST['mobile'] . "', 'active')";
    // $qry_exec = mysqli_query($con, $qry);

    // if ($qry_exec) {
    //     $qry1 = mysqli_query($con, "SELECT `id` FROM `teacher` WHERE `email` = '" . $_REQUEST['email'] . "'");
    //     session_start();

    //     $user = mysqli_fetch_array($qry1);
    //     // print_r($user);
    //     $_SESSION['id'] = $num['id'];

    //     echo "Register Successful";
    //     header('location: teacher-profile.php');
    // } else {
    //     echo "Register Unsuccessful";
    // }
} else {
    // echo "Email already existed, Please try to login.";
    header('location: register-teacher.php?status=Email already existed, Please try to login.');
}

?>