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
    <link rel="stylesheet" href="profile-style.css">
    <script src="../assets/js/main.js"></script>
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
      <a class="navbar-brand" href="stud-profile.php">StudyLand</a>
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
      <!-- ======SEARCH BUTTON====== -->
      <!-- <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search courses">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
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
				`student`
			WHERE 
				`id` = ".$_SESSION['id'];

	$q1 = mysqli_query($con, $qr);
 

	$student= mysqli_fetch_array($q1);
 
  echo "<ul>";
  echo "<li><i class='fa fa-envelope-o'></i><a href=student-dashboard.php?id=".$student['id'].">Dashboard</a></li>";
  echo "<li><i class='fa fa-pencil-square-o'></i><a href=edit-profile.php?id=".$student['id'].">Edit Profile</a></li>";
  echo "<li><i class='fa fa-sign-out'></i><a href=../logout.php?id=".$student['id'].">Logout</a></li>";
echo "</ul>";
  ?>
  
    </div> 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- ======Start of Home Section====== -->
<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">University and college students, 
        <br class="hidden lg:inline-block">learn job-ready skills with StudyLand
      </h1>
      <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">View Progress</button>
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="../assets/img/students-cartoon.jpg">
    </div>
  </div>
</section><!-- ======End of Home Section====== -->

<!-- ======Start of Feature Section====== -->
<section class="sec-background text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Master in-demand skills quickly</h1>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
      <!-- first div -->
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Learn from top instructors</h2>
          <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
          <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>

      <!-- second div -->
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
            <circle cx="6" cy="6" r="3"></circle>
            <circle cx="6" cy="18" r="3"></circle>
            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Earn and share a valued certificate</h2>
          <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
          <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>

      <!-- third div -->
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Gain skills through hands-on learning</h2>
          <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
          <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>

    </div>
  </div>
</section><!-- ======End of Feature Section====== -->

<!-- Querry for manupulating courses -->
<?php 

                        $q1 = mysqli_query($con, "SELECT `id` FROM `courses` ");
                        $num = mysqli_num_rows($q1);
                          $a = rand(1, $num);
                          $b = rand(1, $num);
                          $c = rand(1, $num);
                         $qry= mysqli_query($con, "SELECT * FROM `courses` WHERE `id` = '".$a."' ");
                          $row = mysqli_fetch_array($qry);

                          $qry1 = mysqli_query($con, "SELECT * FROM `courses` WHERE `id` = '".$b."' ");
                          $row1 = mysqli_fetch_array($qry1);

                          $qry2= mysqli_query($con, "SELECT * FROM `courses` WHERE `id` = '".$c."' ");
                          $row2 = mysqli_fetch_array($qry2);


                          //$qry3= mysqli_query($con, "SELECT * FROM `courses` WHERE `id` = '".$_REQUEST['id']."' ");
                          //$row3 = mysqli_fetch_array($qry3);

                          //$qry4 = mysqli_query($con, "SELECT * FROM `teacher` WHERE `id` = '".$row3['user_id']."' ");
                          //$teacher = mysqli_fetch_array($qry4);

                          //echo (rand(10, 100));
                          //echo $teacher['name'];die();
                          
?>

<!-- ======Start Ecommerce Home Section====== -->
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
      <div class="section-title">
          <p class="course-heading">Available Courses</p>
      </div>
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
         <?php echo "<img alt=ecommerce class=object-cover object-center w-full h-full block src= ".$row['image'].">" ; ?>
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1"><?php print_r($row['name']);?></h3> <!-- course name-->
          <h2 class="text-gray-900 title-font text-lg font-medium"><?php print_r($row['description']);?></h2>  <!-- content name-->
          <button class="buy-btn">$<?php print_r($row['coursefee']);?></button>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/421x261">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
          <button class="buy-btn">$21.15</button>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/422x262">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
          <button class="buy-btn">$12.40</button>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/423x263">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
          <button class="buy-btn">$18.40</button>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/424x264">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
          <button class="buy-btn">$16.00</button>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/425x265">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
          <button class="buy-btn">$21.15</button>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/427x267">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
          <button class="buy-btn">$12.00</button>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/428x268">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
          <button class="buy-btn">$18.40</button>
        </div>
      </div>
    </div>
  </div>
</section><!-- ======End of Ecommerce Section====== -->

<!-- Start statistic Section -->
<section class="statistic-sec body-font">
  <div class="container-stats container px-5 py-24 mx-auto">
    <h2 class="heading">We have achieved so far</h2>
    <div class="flex flex-wrap -m-4 text-center">
      <div class="p-4 sm:w-1/4 w-1/2">
        <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">4.7K</h2>
        <p class="leading-relaxed">Students</p>
      </div>
      <div class="p-4 sm:w-1/4 w-1/2">
        <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">1.8K</h2>
        <p class="leading-relaxed">Educators</p>
      </div>
      <div class="p-4 sm:w-1/4 w-1/2">
        <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">100+</h2>
        <p class="leading-relaxed">Courses</p>
      </div>
      <div class="p-4 sm:w-1/4 w-1/2">
        <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">400+</h2>
        <p class="leading-relaxed">Video lecture</p>
      </div>
    </div>
  </div>
</section><!-- End statistic Section -->

<!-- Testimonial Section -->
<section class="testimonial-sec text-gray-600 body-font">
  <div class="container testimonial-title">
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

<script src="../assets/js/main.js"></script>

<?php
	
	// $qr = 	"SELECT 
	// 			*
	// 		FROM 
	// 			`student`
	// 		WHERE 
	// 			`id` = ".$_SESSION['id'];

	// $q1 = mysqli_query($con, $qr);

	// $student= mysqli_fetch_array($q1);
  //   //echo ''.$qr;

	//  echo 'Welcome to your profile '.$student['name'];
	//  echo '<br>';

	//  echo 'Email: '.$student['email']; 
	//  echo '<br>';

	 

  //    echo "Login Success";

?>
            <!-- <button class="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href = "registeras.php">Register</a></button>
            <button class="btn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><a href = "loginAs.php">LoginAs</a></button> --> 
</body>      
</html>
