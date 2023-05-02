<?php
session_start();
include 'connection.php';
if(isset($_POST['submit']))
{
    $turf_name=$_POST['turf_name'];
    $turf_place=$_POST['turf_place'];
    $amount = $_POST['price'];
    
    
    $pic=$_FILES['f1']['name'];
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
    $id1=$_SESSION['id'];
    $sql="INSERT INTO `turf`( `turf_name`, `turf_place`, `image`, `amount`, `owner_id`) VALUES ('$turf_name','$turf_place','$filenew','$amount','$id1')";
  
    
    if (mysqli_query($con, $sql))
     {
        echo " <script>alert('Data uploaded successfully.')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    header('location:turf.php');
    mysqli_close($con);
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
.form-group{
    border-radius: 2cm;
}
label{

}
#about{
      background-color:white;
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
        <li><a class="nav-link scrollto" href="ownerhome.php"> HOME </a></li>
          <li><a class="nav-link scrollto " href="ownerprofile.php"> VIEW PROFILE  </a></li>
          <li><a class="nav-link scrollto active" href="turf.php"> REGISTER TURF </a></li>
          <li><a class="nav-link scrollto" href="view_turf.php"> VIEW TURF</a></li>
          <li><a class="nav-link scrollto  " href="viewbooking_owner.php"> VIEW BOOKED TURF  </a></li>
        
        <li><a class="top" href="logout.php">LOG OUT</a> <li>
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
          <h2 class="animate__animated animate__fadeInDown"> TURF STATUS  </span></h2>
          <p class="animate__animated fanimate__adeInUp">"  TO  upload or view turf click the bottom link button "</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto"> upload now </a>
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
<section id="about">
    <div class="container">
        <form method="POST" enctype="multipart/form-data"  onsubmit="return validateForm()" required >
            <table class="table table-bordered">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> turf name :</label>
                        <input type="text" id="turf_name" name="turf_name" class="form-control"  aria-describedby="emailHelp" placeholder="Enter your turf name*" width="25px" onkeyup="clearmsg('sp1')"><br><span style="color:red;" id="sp1"></span>
                        <small id="emailHelp"  class="form-text text-muted"></small>
                      </div><br>
                      <div class="form-group">
                        <label for="exampleInputPassword1"> turf place :</label>
                        <input type="text" id="turf_place"  name="turf_place" class="form-control" placeholder="enter your turf place *" onkeyup="clearmsg('sp2')"><br><span style="color:red;" id="sp2"></span>
                      </div><br>
                      <label for="exampleInputEmail1"> price : </label>
                      <input type="text"id="price"  name="price" class="form-control"  aria-describedby="emailHelp" placeholder="Enter your price *" width="25px" onkeyup="clearmsg('sp3')"><br><span style="color:red;" id="sp3"></span>
                      <small id="emailHelp" class="form-text text-muted"></small>
                    </div><br>
                    
                      <div class="form-group">
                        <label for="exampleFormControlFile1"> Example file input </label>
                        <input type="file" name="f1" class="" id="" accpet=".jpg, .jpeg, .pdf" value="">
                      </div><br>

                      
                      <button type="submit" class="btn btn-primary" name="submit" onclick="return validateForm()"> Submit </button><br>
                                </div>
            </table>
            
        </form>
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
    <!-- End Testimonials Section -->

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
  var turfname = document.getElementById("turf_name").value;
  var turfplace = document.getElementById("turf_place").value;
  var price= document.getElementById("price").value;
  
  if ( turfname=="")
  {
    document.getElementById("sp1").innerHTML = "Enter your turf name ";
    return false; 
  }
  
  if ( turfplace=="")
  {
    document.getElementById("sp2").innerHTML = "Enter your turf place ";
    return false; 
  }
  
  if ( price=="")
  {
    document.getElementById("sp3").innerHTML = "Enter your price ";
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