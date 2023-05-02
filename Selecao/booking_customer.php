<?php
session_start();
include 'connection.php';
if(!isset($_SESSION['id']))
{
  header('location:login.php');
}
else
{
  $result=mysqli_query($con,"SELECT turf_id, turf_name, turf_place, image, amount FROM `turf`");

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
@-webkit-keyframes mover
 {
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
.regi
{
    padding-left:12cm;
    padding:10px 15px 10px 15px ;
    left:50%;
    border-radius:15px;
    background-color:blue;
    color:white;
}
.regi:hover
{
    background-color:green;
    color:white;
    transition:0.3s;
}
table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		th 
    {
			background-color: #4CAF50;
			color: white;
		}
		tr:hover 
    {
    background-color: #f5f5f5;
    }

    
      .container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

    
    .card
    {

      border:1px solid black;
      justify-content:space-evenly;
      margin:10px;

    }

  .center
   { 
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.move{
  text-align: center;
}

.nova{
  background-color:lightgreen;

  color:white;
  
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
        <h1><a href="index.html" > <img src="https://sportscafe.in/img/es3-cfit-s100/scweb/modules/static/aboutus/our-story/story/Reports.png" alt="" class="img-fluid">&nbsp;    Ver<sp1>wand</sp1><sp2>eln</sp2></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.html"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto " href="userhome.php"> HOME  </a></li>
          <li><a class="nav-link scrollto " href="customer_profile.php"> VIEW PROFILE  </a></li>
          <li><a class="nav-link scrollto active " href="booking_customer.php"> VIEW TURF </a></li>
          <li><a class="nav-link scrollto" href="feedback.php"> FEED BACK</a></li>
          <li><a class="nav-link scrollto" href="notificationcustomer.php"> VIEW NOTIFICATION </a></li>
        <li><a class="top" href="logout.php"> LOGOUT </a> <li>
          
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
          <h2 class="animate__animated animate__fadeInDown"> <I> select turfs down below </i></span></h2>
          <p class="animate__animated fanimate__adeInUp">"select from varities of different turfs "</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto"> scroll down </a>
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
    <?php
			while ($row = mysqli_fetch_assoc($result))
       {
        ?>
        <div class="container">
  <div class="row">
    <?php
      // Loop through the query results to generate cards
      while ($row = mysqli_fetch_assoc($result))
       {
    ?>
    <div class="col-md-4">
      <div class="card" style="border-radius:40px;">
        <div class="form-group mt-4 move">
          <?php echo '<img src="./images/' . $row["image"] . '" alt="customer image" height="200px" width="500px" class="center">'; ?><br>
          <h3 class="tittle" style="color:black;"><?php echo "TURF ID: " . $row["turf_id"] . "<br>"; ?></h3><br>
          <h4 class="tittle" style="color:black;"><?php echo "Turf name: " . $row["turf_name"] . "<br>"; ?></h4><br>
          <h5 class="tittle" style="color:green;"><?php echo "Turf place: " . $row["turf_place"] . "<br>"; ?></h5><br>
          <h6 class="tittle" style="color:black;"> <?php echo "Amount: " . $row["amount"] . "<br>"; ?></h6><br>
          <a class="btn btn-primary nova" style="margin-bottom:10px;" href="booknow.php?id=<?php echo $row['turf_id'] ?>"> BOOK NOW </a><br>
        </div>
      </div>
    </div>
    <?php
      }
    ?>
  </div>
</div>


    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- End Footer -->

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
    function valid()
    {
        var customer_name=document.getElementById("name").value;
        var dob=document.getElementById("dob").value;
        var username=document.getElementById("username").value;
        var password=document.getElementById("password").value;
        var confirmpassword=document.getElementById("confirmpassword").value;
        var email=document.getElementById("email").value;
        var address=document.getElementById("address").value;
        var contact=document.getElementById("contact").value;
    
        if ( name=="")
        {
            document.getElementById("sp1").innerHTML="enter your full name ";
            return false;
        }
       if ( dob=="")
       {
        document.getElementById("sp2").innerHTML="enter your date of birth";
         return false; 
    }
       if ( username=="")
       {
        document.getElementById("sp3").innerHTML="enter your username";
        return false;
       }
       if ( password=="")
       {
        document.getElementById("sp4").innerHTML="enter your password";
        return false;;
       }
       if ( confirmpassword=="")
       {
        documnet.getElementById("sp5").innerHTML="confirm your password";
        return false;
       }
       if ( email=="")
       {
document.getElementById("sp6").innerHTML="enter your email id ";
return false;
       }
       if ( address=="")
       {
        document.getElementById("sp7").innerHTML="enter your address";
        return false;
       }
       if ( contact=="")
       {
        document.getElementById("sp8").innerHTML="enter your contact number ";
        return false;
       }
       return true;
    }
      function clearmsg(sp)
      {
        document.getElementById(sp).innerHTML="";
      }
      </script>

</body>

</html>

<?php } ?>