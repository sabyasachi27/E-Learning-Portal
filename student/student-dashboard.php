<?php include_once "../connection.php"; ?>

<?php
    //print_r($_REQUEST['id']);
    $qr = 	"SELECT 
				*
			FROM 
				`student`
			WHERE 
				`id` = ".$_REQUEST['id'];

	$q1 = mysqli_query($con, $qr);

	$student= mysqli_fetch_array($q1);
    //echo ''.$qr;

	 echo 'Name : '.$student['name'];
	 echo '<br>';

	 echo 'Email : '.$student['email']; 
	 echo '<br>';

     echo 'Phone Number : '.$student['mobnumber']; 
	 echo '<br>';
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Student-Profile</title>
</head>
<body>
    <div class="outer-container">
        <div class="upper-container">
            <img src="../assets/img/profile-photo.jpg" alt="...">
        </div>
        <div class="lower-container">
            <div class="name"><?php print_r($student['name']);?></div>
            <div class="profile">Student</div>
            <a href="#"><div class="email"><?php print_r($student['email']);?></div></a>
            <div class="phone"><?php print_r($student['mobnumber']);?></div>
            <p>Selected courses</p>
            <div class="table-chart">
                <table class="table table-striped table-hover">
                    <thead id="tab-head1">
                      <tr>
                        <th>Courses</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody id="tab-body2">
                      <tr>
                        <td>Computer Science</td>
                        <td>Paid</td>
                      </tr>
                      <tr>
                        <td>Chemistry</td>
                        <td>Free</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</body>
</html>