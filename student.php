
<?php 

session_start();
if(isset($_SESSION['username'])){
	$_SESSION['msg']="You must log in to view this page";
  $semail=$_SESSION['username'];

    $sname=$_SESSION['name'];
    $sphone=$_SESSION['phone_no'];
	//header("location: login.html");

}

if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.html");
}

 ?>


  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Homepage</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/educa.jpg" rel="icon">
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
  <style>
table {
  width:100%;
  padding-left: 50px
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
</style>

</head>

<body>
 <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:monishghosh7@gmail.com">contact@example.com</a>
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

      <h1 class="logo mr-auto"><a href="#"><img src="assets/img/educa.jpg"><span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          
         
          <li class="drop-down"><a href="#services ">Academics</a>
           <ul>
              <li class="drop-down"><a href="#">Class</a>
               
              </li>
              <li class="drop-down"><a href="#">Syllabus</a>
              <ul>
              
              
            </ul></li>
              <li><a href="#">Research and Development</a></li>
              <li><a href="#">Attendance Management</a></li>
              
              
            </ul>
          </li>
          
          
          <li><a href="#timetable">Time table</a></li>

          <li><a href="#Examination">Examination</a></li>
          <li><a href="#Online_resoures">Online Resources</a></li>
          
          <li><a href="#profile">My Profile</a></li>
          <li class="drop-down"><?php echo $sname ?> 
    
  
<ul>
  <li><a href="login.html?logout='1'">logout</a></li>
</ul>
</li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= login======= -->
  <br><br><br><br><br><br>
  
 
  
    <!-- ======= Footer ======= -->
  <section id="profile">
    <p style="padding-right: 1000px;">
    <div class="form_des" style="padding-right:  400px;padding-left: 200px;">
    <h3 style="border:5px double black;padding-left: 350px;padding-bottom: 10px;padding-top: 10px">My Profile </h3>
    <h4><p style="border:5px double black;padding: 10px;">Name : <?php echo $sname ?></p>
       <p style="border:5px double black;padding: 10px;"> E-mail : <?php echo $semail ?></p></p>
       <p style="border:5px double black;padding: 10px;"> Phone no : <?php echo $sphone ?></p>
      </h4>
    
</div></p>

  </section>

<!-----------------------------online resources--------------------
  -------------------------------------->
  <section id="Online_resoures">
    

  </section>
    

        <section id="timetable" class="about section-bg">
      <div class="design">

        <caption><p><h1 style="text-align: center;color: blue;border: 20px; size:50px;"><u>Time Table</u></h1></p></caption>
      <table class="design" background=url('img_girl.jpg'); "; id="t01";>
        
         
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
        
    </section><!-- End Time table Section -->

  	<!--if the user login print the information about him-->

  


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
  <?php 
   
   //session_destroy();
 //header('location:login.html') ?>
 </body>
 </html>