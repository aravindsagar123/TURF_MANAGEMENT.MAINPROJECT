<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $owner_name=$_POST['fullname'];
    $username=$_POST['username'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $password=$_POST['password'];
    $unencrypted_password="$password";
    $hash=password_hash($unencrypted_password,PASSWORD_DEFAULT);
    $pic=$_FILES['f1']['name'];
    if($pic!="")
    {
      $filearray=pathinfo($_FILES['f1']['name']);
      $file1=rand();
      $file_ext=$filearray["extension"];
      $filenew=$file1.".".$file_ext;
      move_uploaded_file($_FILES['f1']['tmp_name'],"images/". $filenew);
    }
    else
    {
      echo" <script>alert('try again there is no image ')</script>";
    }
    mysqli_query($con,"INSERT INTO `owner_registration`(`owner_name`, `address`, `email`, `contact`, `dob`,`aproval_status`,`image`) VALUES ('$owner_name','$address','$email','$contact','$dob','0','$filenew')");
   $log=mysqli_insert_id($con);
   $sql=mysqli_query($con,"INSERT INTO `login`( `login_id`,`username`, `password`, `type`) VALUES ('$log','$username','$hash','owner')");
   if($sql)
   {
    echo'<script>alert("registered successfully");</script>';
    header('location:owner_registration.php');
    ?>
    <script>window.location.assgin('owner_registration.php');</script>
    <?php
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
    .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link
{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover
{
    border: none;
}
.register .nav-tabs .nav-link.active
{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading
{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
.card {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
    
    background-image: url("https://images.unsplash.com/photo-1556056504-5c7696c4c28d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=676&q=80");
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100%;
    background-color: rgba(0, 0, 0, 0.3);
  background-size: 200vh;
  }

  .form-group {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 10px;
  }
  label {
    margin-bottom: 5px;
  }

  input,
  textarea,
  select {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
  }

  .button-group {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }
  button {
    background-color: #343A40;
  border-radius: 4px;  
  color: #fff;
  cursor: pointer;
  padding: 8px 16px;
  }

  button:hover {
    background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet, red);
  animation:slidebg 2s linear infinite;
  transform: 0.3s;
  }

 
  h1{
    color: red;
  }
  label{
    color:white;
  }
  #about{
    
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
        <h1><a href="index.html" > <img src="https://sportscafe.in/img/es3-cfit-s100/scweb/modules/static/aboutus/our-story/story/Reports.png" alt="" class="img-fluid">&nbsp;    Ver<sp1>wand</sp1><sp2>eln</sp2></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.html"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          
          <li><a class="nav-link scrollto" href="login.php">Login</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          
          <li><a class="nav-link scrollto" href="#contact"> Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel" >

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"> welcome to owners  registration page   </span></h2>
          <p class="animate__animated fanimate__adeInUp">"please login to access the  login page . "</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">register now </a>
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

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
  <div class="container">
    <Form method="POST" enctype="multipart/form-data"  required >
      <div class="card">
        <h1>OWNER REGISTRATION</h1>
        <div class="form-group">
          <label for="fullname"> FULL NAME:</label>
          <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" onkeyup="clearmsg('sp1')" value="" ><br><span style="color:red;" id="sp1"></span>
        </div>
        <div class="form-group">
          <label for="username"> USERNAME:</label>
          <input type="text" id="username" name="username" placeholder="Enter your user name" onkeyup="clearmsg('sp2')" value="" ><br><span style="color:red;" id="sp2"></span> 
        </div>
        <div class="form-group">
          <label for="email"> EMAIL:</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" onkeyup="clearmsg('sp3')" value="" ><br><span style="color:red;" id="sp3"></span>
        </div>
        <div class="form-group">
          <label for="contact"> CONTACT NUMBER:</label>
          <input type="tel" id="contact" name="contact" placeholder="Enter your contact number" onkeyup="clearmsg('sp4')" value="" ><br><span style="color:red;" id="sp4"></span>
        </div>
        <div class="form-group">
          <label for="password "> PASSWORD :</label>
          <input type="pasword " id="password" name="password" placeholder=" Enter your password *" onkeyup="clearmsg('sp5')" value="" ><br><span style="color:red;" id="sp5"></span> 
        </div>
        <div class="form-group">
          <label for="dob"> DATE OF BIRTH:</label>
          <input type="date" id="dob" name="dob"  onkeyup="clearmsg('sp6')" value="" required ><br><span style="color:red;" id="sp6"></span>
        </div>
        <div class="form-group">
          <label for="address"> ADDRESS:</label>
          <textarea id="address" name="address" placeholder="Enter your address" onkeyup="clearmsg('sp7')" value=""></textarea><span style="color:red;" id="sp7"></span>
        </div>
        
        <div class="form-group">
          <label for="image"> IMAGE:</label>
          <input type="file" class="image" id="f1" name="f1" onkeyup="clearmsg('sp8')" value="" ><br><span style="color:red;" id="sp8"></span>
        </div>
        <div class="button-group" style="margin-bottom:10px;">
        <button type="submit" name="submit" value="submit" onclick="return validateForm()" >Submit</button>
      </div>
    </div>
      
      
      </div>
</Form>
  </div>
</section><!-- End Cta Section -->

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
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Team</h2>
          <p>Our Hardworking Team</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>vengeri , near panama road kozhikode kerala </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>aravindsagar201544@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 6282552805</p>
              </div>

            </div>

          </div>

          
        </div>

      </div>
    </section><!-- End Contact Section -->

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
  var fullName = document.getElementById("fullname").value;
  var userName = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var contact = document.getElementById("contact").value;
  var password = document.getElementById("password").value;
  // var dob = document.getElementById("dob").value;
  var address = document.getElementById("address").value;

  if (fullName=="")
  {
    document.getElementById("sp1").innerHTML = "Enter your full name";
    return false; 
  }
  
  if (userName=="")
  {
    document.getElementById("sp2").innerHTML = "Enter your username";
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
  
  if (password=="")
  {
    document.getElementById("sp5").innerHTML = "Enter your password";
    return false; 
  }
  
  // if (dob=="")
  // {
  //   document.getElementById("sp6").innerHTML = "Enter your date of birth";
  //   return false; 
  // }
  
  if (address=="")
  {
    document.getElementById("sp7").innerHTML = "Enter your address";
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