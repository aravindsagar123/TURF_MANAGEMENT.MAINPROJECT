<?php
session_start();
include 'connection.php';
$result = mysqli_query($con,"SELECT * FROM customer_registration");
if (isset($_POST['send'])) 
{
  
  $notification = $_POST['notification'];

  
  $customer_id = $_POST['customer_id'];

  
  $sql = "INSERT INTO `notification` (`customer_id`, `notification`) VALUES ('$customer_id', '$notification')";
  if (mysqli_query($con, $sql)) 
  {
    echo '<script>alert("Notification sent successfully")</script>';
  } else {
    echo "Error sending notification: " . mysqli_error($con);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    sp1{
      color:red;
    }
    sp2
    {
      color:blue;
    }
    sp15{
        color:black;
    }
    .gradient-custom-2 {

background:green;

background: -webkit-linear-gradient(to right, green, green);


background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
.button1{
    padding:15px;
    border-radius:25px;
    color:black;
    background-color:white;
}
.button1:hover{
    background-color:blue;
    color:white;
    transition:0.2s;
}
.button2{
    padding:15px;
    border-radius:25px;
    color:black;
    background-color:white;
}
.button2:hover{
    background-color:green;
    color:white;
    transition:0.4s;
}
.nova{
    padding-left:75px;
    
}
.form
{
    padding:10px;
    border-radius:15px;
}
.top
{
    padding:5px;
    border-radius:10px;
    background-color:blue;
    color:white;
    padding-left:5px;
}
.top:hover{
    backgroung-color:orange;
    transtion:0.5s;
}
.nova{
  text-align:centre;
  padding-bottom:10px;
}
    </style>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Selecao Bootstrap Template - Index </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">Ver<sp1>wand</sp1><sp2>eln</sp2></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero"> Home </a></li>
          <li><a class="nav-link scrollto " href="customertable.php"> customer </a></li>
          <li><a class="nav-link scrollto" href="ownertable.php"> owner </a></li>
          <li><a class="nav-link scrollto" href="feedbackadmin.php"> feedback </a></li>
          <li><a class="nav-link scrollto" href="viewturf_admin.php"> Turf </a></li>
          <li><a class="nav-link scrollto active " href="send_notification.php"> send notification</a></li>
          <li><a class="nav-link scrollto" href="change_password.php"> change password </a></li>
        <li><a class="top" href="logout.php">logout</a> <li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"> send notification  </span></h2>
          <p class="animate__animated fanimate__adeInUp">" send notification to customers  "</p>
          <a href="#main" class="btn-get-started animate__animated animate__fadeInUp scrollto"> scroll down </a>
        </div>
      </div>

      <!-- Slide 2 -->
      

      <!-- Slide 3 -->
      
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="lightgreen">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="green">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="violet">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">
<section id="main">
    <form method="POST">
    <div class="container">
        <div class="card" style="width:50%; margin-left:250px;">
        <h2><center> SENT NOTIFICATION </CENTER></h2>
            <div class="form-group mt-4">
              <div class="nova">
                
             <?php
              echo "<select name='customer_id'>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<option value='" . $row['customer_id'] . "'>" . $row['customer_name'] . " (ID: " . $row['customer_id'] . ")</option>";
}
echo "</select>";
?>

</div>
        </div>
        <div class="form-group mt-4">
        <div class="nova">
          <label> notification : </label>
        <input  type="text" class="notification" name="notification" value="notification">
</div>
        </div>
        <div class="form-group mt-4">
        <div class="nova">
                 <input type="submit" class="btn btn-primary" name="send" value="send" >
</div>
        </div>
</div>

</div>
</form>
</section>
    <!-- ======= About Section ======= -->
    <!-- End About Section -->

    <!-- ======= Features Section ======= -->
    
    <!-- ======= Cta Section ======= -->
   
    <!-- ======= Services Section ======= -->
   <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    ><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3> var<sp1>wer</sp1><sp2>dlen</sp2></h3>
      <p> we provide the best of the best in this city </p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><sp15>verwendiln</sp15></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
          Designed by <a href="https://bootstrapmade.com/"> BootstrapMade </a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>