<?php include_once "../connection.php"; ?>
<?php
	
	session_start();
	if (!isset($_SESSION['id'])) {
		header('location: ../index.php');
	}
?>
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#" style="height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="description" content="A studing portal for students. It contains well written, well thought and well explained computer science and programming articles, quizzes and practice/competitive programming/company interview Questions.">
    <link rel="shortcut icon" src="112-book-morph-outline-edited.json" type="image/x-icon">
    <meta name="theme-color" content="#308D46">
    <meta property="og:image" content="112-book-morph-outline-edited.json">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">
    <script async="" src="//cse.google.com/adsense/search/async-ads.js"></script>
   <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <!-- jQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <!-- Bootstrap JS -->
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
    <script async="" src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.1.14/require.min.js"></script>
    <script async="" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <title>Only Studies | Learning Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="teacher-profile.css">
</head>

<body>
<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="stud-profile.php">E Learning Portal</a>
    </div>
 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search courses">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <div class="action">
    <div class="profile" onclick="menuToggle();">
      <img src="../assets/img/man.png">
    </div>
    <div class="menu">
      <!-- <ul>
        <li><i class="fa fa-envelope-o"></i><a href="#">Dashboard</a></li>
        <li><i class="fa fa-pencil-square-o"></i><a href="edit-profile.php">Edit Profile</a></li>
        <li><i class="fa fa-sign-out"></i><a href="../index.php">Logout</a></li>
      </ul>   -->
    <?php
	
	$qr = 	"SELECT 
				*
			FROM 
				`teacher`
			WHERE 
				`id` = ".$_SESSION['id'];

	$q1 = mysqli_query($con, $qr);
 

	$teacher= mysqli_fetch_array($q1);
 
  echo "<ul>";
  echo "<li><i class='fa fa-envelope-o'></i><a href=teacher-dashboard.php?id=".$teacher['id'].">Dashboard</a></li>";
  echo "<li><i class='fa fa-pencil-square-o'></i><a href=edit-profile.php?id=".$teacher['id'].">Edit Profile</a></li>";
  echo "<li><i class='fa fa-sign-out'></i><a href=../logout.php?id=".$teacher['id'].">Logout</a></li>";
echo "</ul>";
  ?>
  
    </div> 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<section id="home">
<h1>Welcome to our site</h1>
<p>Do you get caught everytime you try to cheat? Then don't worry you are in the right place.</p> 
<p>We give our students the best training which will help then to become cheater <b>pro max</b>.Success will automatically touch your feet!</P>
</section> 
<script>
  function menuToggle()
  {
    const toggleMenu = document.querySelector('.menu');
    toggleMenu.classList.toggle('active'); 
  }
</script>  
</body>
<!-- this div is for the buttons -->
<table border="1">
	<tr>
		<th>ID</th>
		<th>user id</th>
		<th>Course Name</th>
    <th>Course Description</th>
    <th>Course Image</th>
    <th>Course Type</th>
    <th>Course Fee</th>
		<th>Delete</th>
		<th>Update</th>
		
	</tr>

<?php
	
	$qr = 	"SELECT 
				*
			FROM 
				`teacher`
			WHERE 
				`id` = ".$_SESSION['id'];

	$q1 = mysqli_query($con, $qr);

	$teacher= mysqli_fetch_array($q1);
    //echo ''.$qr;

	 echo 'Welcome to your profile '.$teacher['name'];
	 echo '<br>';

	 echo 'Email: '.$teacher['email']; 
	 echo '<br>';

	 

     echo "Login Success";

     $qry1 = mysqli_query($con, "SELECT * FROM `courses` WHERE `status` = 'active'");
     //print_r($qry1);
while($row = mysqli_fetch_array($qry1)) {
  
	
	if($teacher['id'] === $row['user_id']){
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['user_id']."</td>";
		echo "<td><a href=../contents/contents.php?id=".$row['id'].">".$row['name']."</a></td>";
    echo "<td>".$row['description']."</td>";
    echo "<td><img src='".$row['image']."' width = '100'></td>";
    echo "<td>".$row['type']."</td>";
    echo "<td>".$row['coursefee']."</td>";
		echo "<td><a href=../course/delete-course.php?id=".$row['id'].">Delete</a></td>";
		echo "<td><a href=../course/update-course.php?id=".$row['id'].">Update</a></td>";
		//echo "<td><a href=../contents/update-contents.php?id=".$row['id'].">Edit</a></td>";
	echo "</tr>";
}
else {
	echo "<br><br>Please Insert your contents . Currently you don't have any contents";
}

	}

  

?>
<br><br>
<a href="../course/insert-course.php">Add</a>
            <!-- <button class="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href = "registeras.php">Register</a></button>
            <button class="btn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><a href = "loginAs.php">LoginAs</a></button> -->
        
</html>