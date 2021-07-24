<?php include_once "../connection.php"; ?>


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
    <link rel="stylesheet" href="../style.css">
</head>
<style>
  .related-course{
    background-color:rgb(250, 249, 249);
  }
</style>
<body>
<?php include_once "../layout/navbar.php"; ?>

<!-- Query for manupulating courses -->
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


                          $qry3= mysqli_query($con, "SELECT * FROM `courses` WHERE `id` = '".$_REQUEST['id']."' ");
                          $row3 = mysqli_fetch_array($qry3);

                          $qry4 = mysqli_query($con, "SELECT * FROM `teacher` WHERE `id` = '".$row3['teacherid']."' ");
                          $teacher = mysqli_fetch_array($qry4);

                          //echo (rand(10, 100));
                          //echo $teacher['name'];die();
                          
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Course Details</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="course-details col-lg-8">
            <img src="../assets/img/course-details.jpg" class="img-fluid" alt="">
            <h3>Learn <?php print_r($row3['name']); ?> from scratch</h3>
            <p>
            <?php print_r($row3['description']); ?>
            </p>
          </div>
          <div class="col-lg-4">

            <div class="course-info d-flex justify-content-between align-items-center">
              
              <h5>Educator</h5>
              <?php echo "<h3><a href=#>".$teacher['name']."</a></h3>" ?>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Course Fee</h5>
              <p><?php print_r($row3['coursefee']); ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Students joined</h5>
              <p>3000</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Schedule</h5>
              <p>5.00 pm - 7.00 pm</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Cource Details Section -->

   

<!-- ======= Related Courses Section ======= -->

    <section id="popular-courses" class="related-course courses">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <p class="course-heading">Related Courses</p>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="course-item">
                  <img src="../assets/img/course-1.jpg" class="img-fluid" alt="...">
                  <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4><?php print_r($row['name'])?></h4>
                      <p class="price"><?php print_r($row['coursefee'])?></p>
                    </div>
                        
                    <h3><a href="course/course-details.php"><?php print_r($row['name'])?></a></h3>
                    <p><?php print_r($row['description'])?></p>
                  </div>
                </div>
              </div> <!-- End Course Item-->

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="course-item">
                  <img src="../assets/img/course-2.jpg" class="img-fluid" alt="...">
                  <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4><?php print_r($row1['name'])?></h4>
                      <p class="price"><?php print_r($row1['coursefee'])?></p>
                    </div>

                    <h3><a href="course/course-details.php"><?php print_r($row1['name'])?></a></h3>
                    <p><?php print_r($row1['description'])?></p>
                   
                  </div>
                </div>
              </div> <!-- End Course Item-->

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="course-item">
                  <img src="../assets/img/course-3.jpg" class="img-fluid" alt="...">
                  <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4><?php print_r($row2['name'])?></h4>
                      <p class="price"><?php print_r($row2['coursefee'])?></p>
                    </div>

                    <h3><a href="course/course-details.php"><?php print_r($row2['name'])?></a></h3>
                    <p><?php print_r($row['description'])?></p>
                    
                  </div>
                </div>
              </div> <!-- End Course Item-->
            </div>
          </div>
        </section><!-- End related Courses Section -->
  </main><!-- End #main -->

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
<script src="../assets/js/main.js"></script>
</body>
</html>