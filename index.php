<?php include_once "connection.php"; ?>
<?php 
  session_start();
  print_r($_SESSION);
  if (isset($_SESSION['id'])) {
		if($_SESSION['role']=='teacher')
    {
      header('location: teacher/teacher-profile.php');
    }
    else{
      header('location: student/stud-profile.php');
    }
	}
  // die();
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
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include_once "layout/navbar.php"; ?>
<!-- <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">StudyLand</a>
    </div>
 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#home">Home</a></li>
        <li><a href="#about">About Us</a></li>
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
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><b>Register</b><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="student/register-student.php">Learner</a></li>
            <li><a href="teacher/register-teacher.php">Teacher</a></li>
          </ul>
        </li>  
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								 <form class="form" role="form" method="post" action="login-acc.php" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required name="email">
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2"  placeholder="Password" required name ="password">
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
                    <div style="color: red;">
			              <?php
				                if(isset($_REQUEST['status'])) {
					              echo $_REQUEST['status'];
				                }
			              ?>
		                </div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 </form>
							</div>
							<div class="bottom text-center">
								New here ? <a href="registeras.php"><b>Register</b></a>
							</div>
					 </div>
				</li>
			</ul>
        </li>
      </ul>
    </div>
  </div>
</nav> -->
<!-- Query for manupulating courses -->
<?php 
                          
                  
                        //   $a = rand(1, 5);
                        //   $b = rand(1, 5);
                        //  $c = rand(1, 5);
                        //  $qry= mysqli_query($con, "SELECT * FROM `courses` WHERE `id` = '".$a."' ");
                        //   $row = mysqli_fetch_array($qry);

                        //   $qry1 = mysqli_query($con, "SELECT * FROM `courses` WHERE `id` = '".$b."' ");
                        //   $row1 = mysqli_fetch_array($qry1);

                        //   $qry2= mysqli_query($con, "SELECT * FROM `courses` WHERE `id` = '".$c."' ");
                        //   $row2 = mysqli_fetch_array($qry2);
                        //  //echo (rand(10, 100));
                        //   //print_r ($row);
                  
                          
                          ?>

<!-- ======Start of Home Section====== -->
<section id="home" class="d-flex align-items-center">
<div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>StudyLand</span></h1>
      <h3>Education is the most powerful weapon which you can use to change the world</h3>
      <div class="d-flex">
        <a href="#" class="btn-get-started">Get Started</a>
      </div>
    </div>
</section> 

<main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="">Daily live classes</a></h4>
              <p class="description">You can chat with educators, ask them questions, answer live polls, and get your doubts cleared-
                all while the class is going on
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <h4 class="title"><a href="">Practice and revise</a></h4>
              <p class="description">Learning isn't just limited to classes with our practice section,
                 mock tests and lecture notes shared as PDFs for your revision</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">Learn anytime, anywhere</a></h4>
              <p class="description">One subscription gets you access to all our live and recorded classes to watch from the comfort of any of your devices</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <h4 class="title"><a href="">Score higher</a></h4>
              <p class="description">We provide you the guarantee of scoring higher, We have best teachers available and they will make you enjoy learning </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

     <!-- ======= About Section ======= -->
     <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3>Find Out More <span>About Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                  <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                  <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                </div>
              </li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <p class="course-heading">Popular Courses</p>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="course-item">
                  <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
                  <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4><?php print_r($row['name']);?></h4>
                      <p class="price"><?php print_r($row['coursefee']);?></p>
                    </div>

                    <?php echo "<h3><a href=course/course-details.php?id=".$row['id'].">".$row['name']."</a></h3>" ?>
                    <p><?php print_r($row['description']);?></p>
                  </div>
                </div>
              </div> <!-- End Course Item-->

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="course-item">
                  <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
                  <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4><?php print_r($row1['name']);?></h4>
                      <p class="price"><?php print_r($row1['coursefee']);?></p>
                    </div>

                    <?php echo "<h3><a href=course/course-details.php?id=".$row1['id'].">".$row1['name']."</a></h3>" ?>
                    <p><?php print_r($row1['description']);?></p>
                   
                  </div>
                </div>
              </div> <!-- End Course Item-->

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="course-item">
                  <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
                  <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4><?php print_r($row2['name']);?></h4>
                      <p class="price"><?php print_r($row2['coursefee']);?></p>
                    </div>

                    <?php echo "<h3><a href=course/course-details.php?id=".$row2['id'].">".$row2['name']."</a></h3>" ?>
                    <p><?php print_r($row2['description']);?></p>
                    
                  </div>
                </div>
              </div> <!-- End Course Item-->
            </div>
          </div>
        </section><!-- End Popular Courses Section -->
  
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
  <section class="text-gray-600 body-font">
  <div class=" testimonial-title">
      <p>What are they saying</p>
    </div>
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="assets/img/testimonials-1.jpg">
          <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
          <span class="inline-block h-1 w-10 rounded bg-blue-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">SARA WILLSON</h2>
          <p class="text-gray-500">Senior Product Designer</p>
        </div>
      </div>
      <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="assets/img/testimonials-2.jpg">
          <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
          <span class="inline-block h-1 w-10 rounded bg-blue-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">ALPER KAMU</h2>
          <p class="text-gray-500">UI Develeoper</p>
        </div>
      </div>
      <div class="lg:w-1/3 lg:mb-0 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="assets/img/testimonials-3.jpg">
          <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
          <span class="inline-block h-1 w-10 rounded bg-blue-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HENRY LETHAM</h2>
          <p class="text-gray-500">CTO</p>
        </div>
      </div>
    </div>
  </div>
</section> <!--End Testimonial Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
            <i class="fa fa-map-marker"></i>
              <h3>Our Address</h3>
              <p>Diamond Harbour Rd,Thakurpukur, Kolkata-700063</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
            <i class="fa fa-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
            <i class="fa fa-phone"></i>
              <h3>Call Us</h3>
              <p>+91 9876543210</p>
            </div>
          </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.058975331527!2d88.30559331490886!3d22.46441798523857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027a8bc7db49ed%3A0xf7ab6bbe6079d673!2sVivekananda%20College!5e0!3m2!1sen!2sin!4v1624975763630!5m2!1sen!2sin" frameborder="0" width="100%" height="384px" style="border:1;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          <div class="col-lg-6">
            <form action="#" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

</main><!-- End main Section -->

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

  <div class="container py-4">
    <div class="copyright">
      &copy; Copyright <strong><span>StudyLand</span></strong>. All Rights Reserved
    </div>
  </div>
  </footer><!-- End Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa fa-angle-up"></i></a>
  
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>

                <p style="color: red;">
			            <?php
				              if(isset($_REQUEST['status'])) {
					            echo $_REQUEST['status'];
                      // echo $_REQUEST[$q1];
				              }
			            ?>
		            </p>
<!-- this div is for the buttons -->
       
            <!-- <button class="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href = "registeras.php">Register</a></button>
            <button class="btn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><a href = "loginAs.php">LoginAs</a></button> -->
        
</html>