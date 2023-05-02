<?php
session_start();
include 'connection.php';
$id1=$_GET['id'];
$data=mysqli_query($con,"SELECT * FROM `owner_registration` WHERE owner_id='$id1'");
$row=mysqli_fetch_assoc($data);
if(isset($_POST['submit'])) 
{
 $owner_name = $_POST['owner_name'];
 $address = $_POST['address'];
 $email = $_POST['email'];
 $contact = $_POST['contact'];
 $dob = $_POST['dob'];
 $pic =$_FILES['f1']['name'];
      if($pic!="")
    {
      $filearray=pathinfo($_FILES['f1']['name']);
      $file1=rand();
      $file_ext=$filearray["extension"];
      $filenew=$file1.".".$file_ext;
      move_uploaded_file($_FILES['f1']['tmp_name'],"images/".$filenew);
    }
    else
    {
      echo"<script> alert('try again')</script>";
    }
    mysqli_query($con,"UPDATE owner_registration SET owner_name = '$owner_name', address = '$address', email = '$email', contact = '$contact', dob = '$dob', image ='$filenew' WHERE owner_id = '$id1'");
    echo " <script>alert('upadated successfully')</script>";
    header('location:ownerprofile.php');
  }
?>
</html>
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
/* fallback for old browsers */
background:green;
/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, green, green);
/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
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
.button{
     background-color:blue;
     color:white;
     border-radius:10px;
    
}
.btn{
    text-align:center;
}
.container
{
    padding-left:25px;
    text-align:center;
    justify-content:space-between;
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
          <li><a class="nav-link scrollto " href="ownerprofile.php">view  Profile </a></li>
          <li><a class="nav-link scrollto" href="turf.php"> Register Turf </a></li>
          <li><a class="nav-link scrollto" href="view_turf.php"> View Turf </a></li>
          <li><a class="nav-link scrollto  " href="viewbooking_owner.php">view booked turf </a></li>
          <li><a class="nav-link scrollto" href="viewbooking_owner.php"> view booking </a></li>
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
          <h2 class="animate__animated animate__fadeInDown"> EDIT YOUR PROFILE </span></h2>
          <p class="animate__animated fanimate__adeInUp">" scroll down to edit the profile page  "</p>
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
<div class="container">
    <div class="card">
<form method="POST" enctype="multipart/form-data" onsubmit="return validateForm()" required>
<input type="hidden" name="owner_id" value="<?php echo $owner_id; ?>"><BR>
<h2><CENTER> EDIT PROFILE</CENTER> </H2><BR>
<div class="form-group mt-4">
<label for="owner_name">Owner Name:</label>
<input type="text" id="owner_name" name="owner_name" value="<?php echo $row['owner_name']; ?>" style="width:250px" onkeyup="clearmsg('sp1')"><br><span style="color:red;" id="sp1"></span>
</div>
<div class="form group mt-4">
<label for="address">Address:</label>
<input id="address" name="address" value="<?php echo $row['address']; ?>" onkeyup="clearmsg('sp2')"><br><span style="color:red;" id="sp2"></span>
</div>
<div class="form group mt-4">
<label for="email">Email:</label>
<input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" onkeyup="clearmsg('sp3')"><br><span style="color:red;" id="sp3"></span>
</div>
<div class="form group mt-4">
<label for="contact">Contact:</label>
<input type="text" id="contact" name="contact" value="<?php echo $row['contact']; ?>" onkeyup="clearmsg('sp4')"><br><span style="color:red;" id="sp4"></span>
</div>
<div class="form group mt-4">
<label for="dob">Date of Birth:</label>
<input type="date" id="dob" name="dob" placeholder="date of birth" value="<?php echo $row['dob']; ?>" onkeyup="clearmsg('sp5')"><br><span style="color:red;" id="sp5"></span>
</div>
<div class=" form-group mt-4">
<input type="file" name="f1" required >
  </div>
<div class="btn">
    <button class="button" type="submit" name="submit" onclick="return validateForm()" > update </button>
</div>
</div>
</div>
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
  
     <script>
          function validateForm() 
{
  var ownername = document.getElementById("owner_name").value;
  var address = document.getElementById("address").value;
  var email = document.getElementById("email").value;
  var contact = document.getElementById("contact").value;
  var dob = document.getElementById("dob").value;
 

  if (ownername=="")
  {
    document.getElementById("sp1").innerHTML = "Enter your full name";
    return false; 
  }
  
  if (address=="")
  {
    document.getElementById("sp2").innerHTML = "Enter your address";
    return false; 
  }
  
  if (email=="")
  {
    document.getElementById("sp3").innerHTML = "Enter your email id";
    return false; 
  }
  
  if (contact=="")
  {
    document.getElementById("sp4").innerHTML = "Enter your contact no";
    return false; 
  }
  
  if (dob=="")
  {
    document.getElementById("sp5").innerHTML = "Enter your date of birth ";
    return false; 
  }      
  return true;
}

function clearmsg(sp)
{
  document.getElementById(sp).innerHTML = "";
}
          </script>
  
</body>

</html>