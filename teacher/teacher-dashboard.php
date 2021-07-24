<!-- =====Establishing connection===== -->
<?php include_once "../connection.php"; ?>

<?php
		//print_r($_REQUEST['id']);
		$qr = 	"SELECT 
					*
				FROM 
					`teacher`
				WHERE 
					`id` = ".$_REQUEST['id'];

		$q1 = mysqli_query($con, $qr);

		$teacher= mysqli_fetch_array($q1);
		//echo ''.$qr;

		// echo 'Name : '.$teacher['name'];
		// echo '<br>';

		// echo 'Email : '.$teacher['email']; 
		// echo '<br>';

		// echo 'Phone Number : '.$teacher['mobnumber']; 
		// echo '<br>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="teacher-dashboard.css" rel="stylesheet">
	<title>teacher dashboard</title>
</head>
<body>
<div class="outer-container">
        <div class="upper-container">
            <img src="../assets/img/profile-photo.jpg" alt="...">
        </div>
        <div class="lower-container">
            <div class="name"><?php print_r($teacher['name']);?></div>
            <div class="profile">Teacher</div>
            <a href="#"><div class="email"><?php print_r($teacher['email']);?></div></a>
            <div class="phone"><?php print_r($teacher['mobnumber']);?></div>
            <p>Teaching courses</p>
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