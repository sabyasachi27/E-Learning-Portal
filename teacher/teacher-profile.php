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
    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
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
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="teacher-profile.php">StudyLand</a>
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

<!-- ======= Home Section ======= -->
<section id="home" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>StudyLand</span></h1>
      <h3>Come and teach with us</h3>
      <h4>Become an instructor and change lives — including your own</h4>
    </div>
</section> 

<!-- ======= Reasons to start Section ======= -->
<section id="values" class="values">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>So many reasons to start</h2>
  </header>

  <div class="row">

    <div class="col-lg-4">
      <div class="box" data-aos="fade-up" data-aos-delay="200">
        <img src="../assets/img/knowledge.jpg" class="img-fluid" alt="">
        <h3>Inspire learners</h3>
        <p class="size-change">Teach what you know and help learners explore their interests, gain new skills, and advance their careers.</p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0">
      <div class="box" data-aos="fade-up" data-aos-delay="400">
        <img src="../assets/img/values-1.png" class="img-fluid" alt="">
        <h3>Teach your way</h3>
        <p class="size-change">Publish the course you want, in the way you want, and always have of control your own content.</p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0">
      <div class="box" data-aos="fade-up" data-aos-delay="600">
        <img src="../assets/img/reward.jpeg" class="img-fluid" alt="">
        <h3>Get rewarded</h3>
        <p class="size-change">Expand your professional network, build your expertise, and earn money on each paid enrollment.</p>
      </div>
    </div>

  </div>

</div>

</section><!-- End Reasons to start Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
            <i class="fa fa-smile-o"></i>
              <div>
                <p>4.7k</p>
                <p>Students</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fa fa-users" style="color: #bb0852;"></i>
              <div>
                <p>1.8k</p>
                <p>Educators</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
            <i class="fa fa-desktop" style="color: #ee6c20;"></i>
              <div>
                <p>100+</p>
                <p>Courses</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fa fa-video-camera" style="color: #15be56;"></i>
              <div>
                <p>400+</p>
                <p>Video lectures</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

<!-- steps to start section -->
<section id="steps" class="steps-to-start">
  <div class="step-container">
    <div class="step-heading">
      <h2>How to start</h2>
    </div>
    <div class="count">
      <div id="one">1</div>
      <div id="two">2</div>
      <div id="three">3</div>
    </div>
    <div class="content first">
      <h1>Plan Curriculum</h1>
      <p>You start with your passion and knowledge. Then choose a promising topic with the help of our Marketplace Insights tool.
         The way that you teach — what you bring to it — is up to you.</p>
      <button id="myButton">Get Started</button>
    </div>
    <div class="content second">
      <h1>Record Video</h1>
      <p>Use basic tools like a smartphone or a DSLR camera. Add a good microphone and you’re ready to start.
         If you don’t like being on camera, just capture your screen.</p>
      <button id="myButton">Get Started</button>
    </div>
    <div class="content third">
      <h1>Launch Course</h1>
      <p>Gather your first ratings, reviews by promoting your course through social media and professional networks.
         Your course will be discoverable in our marketplace where you earn revenue from each paid enrollment.</p>
      <button id="myButton" >Get Started</button>
    </div>
  </div>
</section>

<!-- Testimonial Section -->
<section class="testimonial-sec text-gray-600 body-font">
  <div class="txt-align container testimonial-title">
      <h2>What are they saying</h2>
    </div>
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="../assets/img/testimonials-1.jpg">
          <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
          <span class="inline-block h-1 w-10 rounded bg-blue-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">SUBHRAJIT NAYAK</h2>
          <p class="text-gray-500">UI Develeoper</p>
        </div>
      </div>
      <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="../assets/img/testimonials-2.jpg">
          <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
          <span class="inline-block h-1 w-10 rounded bg-blue-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">SABYASACHI MAZUMDER</h2>
          <p class="text-gray-500">Software Develeoper</p>
        </div>
      </div>
      <div class="lg:w-1/3 lg:mb-0 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="../assets/img/testimonials-3.jpg">
          <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
          <span class="inline-block h-1 w-10 rounded bg-blue-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">SHYBAL GHOSH</h2>
          <p class="text-gray-500">Tester</p>
        </div>
      </div>
    </div>
  </div>
</section> <!--End Testimonial Section -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>StudyLand</h3>
          <p>
            Diamond Harbour Rd, Thakurpukur <br>
            Kolkata-700063<br>
            West Bengal <br><br>
            <strong>Phone:</strong> +91 9876543210 <br>
            <strong>Email:</strong> contact@gmail.com<br>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="fa fa-dot-circle-o"></i> <a href="#">Home</a></li>
            <li><i class="fa fa-dot-circle-o"></i> <a href="#">About us</a></li>
            <li><i class="fa fa-dot-circle-o"></i> <a href="#">Course</a></li>
            <li><i class="fa fa-dot-circle-o"></i> <a href="#">Terms of service</a></li>
            <li><i class="fa fa-dot-circle-o"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="fa fa-dot-circle-o"></i> <a href="#">Programming</a></li>
            <li><i class="fa fa-dot-circle-o"></i> <a href="#">Web Development</a></li>
            <li><i class="fa fa-dot-circle-o"></i> <a href="#">SCC Exams</a></li>
            <li><i class="fa fa-dot-circle-o"></i> <a href="#">NEET UG</a></li>
            <li><i class="fa fa-dot-circle-o"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Social Networks</h4>
          <p>Now you can join us on social media platforms to stay updated to our latest news</p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-skype"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="copyright-sec py-4">
    <div class="copyright">
      &copy; Copyright <strong><span>StudyLand</span></strong>. All Rights Reserved
    </div>
  </div>
  </footer><!-- End Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa fa-angle-up"></i></a> 

<script>
  function menuToggle()
  {
    const toggleMenu = document.querySelector('.menu');
    toggleMenu.classList.toggle('active'); 
  }
</script> 
<script>
  // steps to start
const one = document.querySelector('#one');
const two = document.querySelector('#two');
const three = document.querySelector('#three');
// Now addEventListener
one.addEventListener('click', () => {
  document.querySelector('.first').style.display = "block";
  document.querySelector('.second').style.display = "none";
  document.querySelector('.third').style.display = "none";
  one.classList.add('active');
  two.classList.remove('active');
  three.classList.remove('active');
});

two.addEventListener('click', () => {
  document.querySelector('.first').style.display = "none";
  document.querySelector('.second').style.display = "block";
  document.querySelector('.third').style.display = "none";
  one.classList.remove('active');
  two.classList.add('active');
  three.classList.remove('active');
});

three.addEventListener('click', () => {
  document.querySelector('.first').style.display = "none";
  document.querySelector('.second').style.display = "none";
  document.querySelector('.third').style.display = "block";
  one.classList.remove('active');
  two.classList.remove('active');
  three.classList.add('active');
});
</script>
<script>
  document.getElementById('myButton').onclick = function (){
    location.href = "course-manupulate.php";
  };
</script> 
<script src="../assets/js/main.js"></script>
</body>
<!-- this div is for the buttons -->
<!-- <table border="1">
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
<a href="../course/insert-course.php">Add</a> -->
            <!-- <button class="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href = "registeras.php">Register</a></button>
            <button class="btn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><a href = "loginAs.php">LoginAs</a></button> -->
        
</html>