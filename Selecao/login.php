<?php
session_start();
include 'connection.php';
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];

$data=mysqli_query($con,"SELECT * FROM `login` WHERE username='$username' ");
    if($data)
    {
        $row=mysqli_fetch_assoc($data);
        $hash=password_verify($password,$row['password']);
        $count=mysqli_num_rows($data);
        $type = $row['type'];
        if ($count==1 && $type == 'admin' && $hash==$password)
        {
          $_SESSION['id']=$_row['login_id'];
          $id=$_SESSION['id'];
            header("location:adminhome.php");
        }
      elseif($count==1 && $type == 'customer' && $hash==$password)
      {
        $_SESSION['id']=$row['login_id'];
        $id=$_SESSION['id'];
        $ara=mysqli_query($con,"SELECT `aproval_status` FROM `customer_registration` WHERE `customer_id`='$id'");   
        $row1=mysqli_fetch_assoc($ara);
        if ($row1['aproval_status']==1)  
        {
          header("location:userhome.php");
        } 
        else
        {
           echo " you need admin approval ";
        }
      }
        elseif($count==1 && $type == 'owner' && $hash==$password)
        {
          $_SESSION['id']=$row['login_id'];
          $id=$_SESSION['id'];
          $ara=mysqli_query($con, "SELECT `aproval_status` FROM `owner_registration` WHERE `owner_id`='$id'");
          $row1=mysqli_fetch_assoc($ara);
          if ($row1['aproval_status']==1)  
        {
          header("location:ownerhome.php");
        } 
        else
        {
           echo " you need admin approval ";
        }
        }
        else 
          {
            echo "invalid id and password";
          }
        }
    }
    ?>    

<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
#bt1{
  padding:10px;
  border-radius:10px;
  
  color:white;

}
#bt1:hover{
  background-color:green;
  transition:0.7s;
  color:white;
}
#bt2{
  padding:10px;
  border-radius:10px;

  color:white;
}
#bt2:hover
{
  background-color:red;
  transition:0.7s;
  color:white;
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          
          <li><a class="nav-link scrollto" href="#about">Login</a></li>
          <li><a class="nav-link scrollto" href="#team"></a></li>
          
          <li><a class="nav-link scrollto" href="#contact"> </a></li>
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
          <h2 class="animate__animated animate__fadeInDown"> welcome to the login page  </span></h2>
          <p class="animate__animated fanimate__adeInUp">"please login to access the booking page . "</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto"> Login</a>
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
  <div class="row">
    <div class="card" style="width:400px;margin-left:250px;">
      <div class="card-title">
      <form method="POST" required >
        <h2> login form  </h2>  
        <form>  
            <div class="form-group"> <label for="email"> User Name</label> <input type="email" class="form-control" name="username" placeholder="Enter username * " style="width:350px" required> </div> <br> 
            <div class="form-group"> <label for="password"> Password</label> <input type="password" class="form-control" name="password" placeholder="Enter password *" style="width:350px" required> </div> <br> 
            <select class="form-select" aria-label="Default select example" name="type" style="width:350px" >
  <option selected> select type </option>
  <option value="admin">admin</option>
  <option value="customer">customer</option>
  <option value="owner">owner</option>
</select><br>
            <div class="checkbox"> <label><input type="checkbox"> Remember me</label> </div>
             <button type="submit" class="btn btn-primary p-1" name="submit"> Submit </button> </form> <br> 
           <div class="btn">
           <a href="customer_registration.php"> <button class="btn btn-primary p-1" id="bt1"> customer </button></a>
           <a href="owner_registration.php"> <button class="btn btn-primary p-1" id="bt2"> owner</button></a>
</div>
    </div>  
</form>
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

</body>

</html>