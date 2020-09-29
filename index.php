<?php include ('data.php')  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Onedu </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
 <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +91 7003402129
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html"><img src="educa.jpg"><span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
         
          <li class="drop-down"><a href="#services ">Academics</a>
           <ul>
              <li class="drop-down"><a href="#">Departments</a>
               
              </li>
              <li class="drop-down"><a href="#">Syllabus</a>
              <ul>
              
              
            </ul></li>
              <li><a href="#">Research and Development</a></li>
              <li><a href="#">Attendance Management</a></li>
              
              
            </ul>
          </li>
          
          <li><a href="#register">Register</a></li>
          <li><a href="#bulletin">Bulletion Board</a></li>

          <li><a href="#Examination">Examination</a></li>
          <li><a href="#Online_resoures">Online Resources</a></li>
          
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container cla" data-aos="zoom-out" data-aos-delay="100" >
      <h1>Welcome to <span>Onedu</spa>
      </h1>
      <br>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

   
    <section id="register" class="skills">
      

      <form action="data.php" method="post">
        <?php include('error.php') ?>
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="name"><b>Enter Your Name</b></label>
    <input type="text" maxlength="30" placeholder="Enter Your Name" name="name" id="name" required>
    <label for="email"><b>Email</b></label>
    <input type="text" size="30" placeholder="Enter Email" name="email" id="email" required>
    <label for="Phone"><b>Enter Phone Number</b><br></label>
    <input type="Phone" name="Enter Your Phone Number" name="phone" id="phone" required><br>
    

    <label for="psw"><b>Password</b></label>
    <input type="password" minlength="8" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" minlength="8" placeholder="Repeat Password" name="rpsw" id="pswrepeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
    </section><!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <section id="bulletin" class="counts">
      <div class="container" data-aos="fade-up">

       <p><b><h1 style="text-align: center;color: brown;size: 20px;">BULLETIN BOARD</h1></b></p>
       <div class="sty">
        <marquee direction="up">
        <h3>All Classes are suspended due to Covid-19 Pandemic till further notice.</h3><br>
        <h3>Class 6 class has been rechudeled . New dates will be given soon.</h3><br>
        <h3>Please pay your remaining dues till month September. </h3><br>
        <h3>Download Online Resorces available.  </h3>
       </div>
     </marquee>
      </div>
    </section><!-- End Counts Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="design">

        <caption><p><h1 style="text-align: center;color: blue;border: 20px; size:50px;"><u>Time Table</u></h1></p></caption>
      <table class="design" background=url('img_girl.jpg');>
        
         
        <tr>
          <th></th>
          <th>
          Monday
        </th>
        <th>
          Tuesday
        </th>
        <th>
          Wednesday
        </th>
        <th>
          Thursday
        </th>
        <th>
          Friday
        </th>
        <th>
          Saturday
        </th>
        <th>
          Sunday
        </th>
      </tr>
        <tr>
          <td>Period1</td>
          <td>History</td>
          <td>Language 1</td>
          <td> Language 2
            </td>
          <td>Maths</td>
          <td>Basic Science</td>
          <td>Maths</td>
          <td></td>
        </tr>
        <tr>
          <td>Period2</td>
          <td>Language 1</td>
          <td>Maths</td>
          <td>Work Edu</td>
          <td>History</td>
          <td>Geogerphy</td>
          <td>History</td>
          <td>F</td>
        </tr>
        <tr>
          <td>Period3</td>
          <td>Work Edu</td>
          <td>History</td>
          <td>Maths</td>
          <td>Basic Science</td>
          <td>Language 1</td>
          <td>Language 2</td>
          <td>R</td>
        </tr>
        <tr>
          <td>Period4</td>
          <td>Geogerphy</td>
          <td>Language 2</td>
          <td>Language 1</td>
          <td>History</td>
          <td>Maths</td>
          <td>Work Edu</td>
          <td>E</td>
        </tr>
        <tr>
          <td>Period5</td>
          <td>Language 2</td>
          <td>Geogerphy</td>
          <td>Geogerphy</td>
          <td>Language 2</td>
          <td>History</td>
          <td>Basic Science</td>
          <td>E</td>
        </tr>
        <tr>
          <td>Period6</td>
          <td>Maths</td>
          <td>Basic Science</td>
          <td>History</td>
          <td>Geogerphy</td>
          <td>Language 2</td>
          <td>Nil</td>
          <td></td>
        </tr>
      
      </table></div>
        
    </section><!-- End About Section -->

    <!-- ======= Enter new student details ======= -->
    

    
   

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Onedu</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by Monish Ghosh
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<!--<script>
  $(document).ready(function(){
    $('free,#nom').keyup(function(){
      var textValue1=$('$free').val();
      var textValue2=$('$nom').val();
      $('tamt').val(textValue1 * textValue2);
    });
  });

</script>*/-->
