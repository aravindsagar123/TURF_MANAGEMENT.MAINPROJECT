<?php
session_start();
include 'connection.php';
$data=mysqli_query($con,"SELECT * FROM  customer_registration");
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
tr,th,td
        {
           border:2px solid black;
           border-collapse:collapse;
           padding-top:5px
           text-align:center;
        }
        table{
            padding-top:10px;
        }
        .one{
            padding-top:25px;
        }
        .btn1{
            background-color:blue;
        }
        #styledtable{
        
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
#styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

#styled-table th,
#styled-table td {
    padding: 12px 15px;
}
#styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

#styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

#styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
   #styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}    
th,tr,td{
      text-align:center;
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
        <li><a class="nav-link scrollto " href="adminhome.php">HOME </a></li>
          <li><a class="nav-link scrollto active" href="customertable.php"> CUSTOMER </a></li>
          <li><a class="nav-link scrollto" href="ownertable.php">OWNER </a></li>
          <li><a class="nav-link scrollto" href="feedbackadmin.php"> FEEDBACK  </a></li>
          <li><a class="nav-link scrollto" href="viewturf_admin.php"> TURF </a></li>
          <li><a class="nav-link scrollto" href="send_notification.php"> SEND NOTIFICATION </a></li>
          <li><a class="nav-link scrollto" href="change_password.php"> CHANGE PASSWORD</a></li>
        <li><a class="top" href="logout.php"> LOGOUT</a> <li>
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
          <h2 class="animate__animated animate__fadeInDown"> CUSTOMER TABLE  </span></h2>
          <p class="animate__animated fanimate__adeInUp">" scroll down to select and get status of different turfs in the current page . "</p>
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
<div class="one">
    <center><table class="table table-bordered" style="width:85%"; id="styledtable">
        <tr class="active-row">
            <th>CUSTOMER NAME</th>
            <th> DOB </th>
            <th> EMAIL </th>
            <th> CONTACT </th>
            <th> ADDRESS </th>
            <th> IMAGE</th>
            

</tr>
<?php
while($row= mysqli_fetch_assoc($data))
{
    ?> 
    <tr>
        <td><?php echo $row['customer_name'];?></td>
        <td><?php echo $row['dob'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['contact'];?></td>
        <td><?php echo $row['address'];?></td>
        <td><img src="./images/<?php echo $row['image'];?>"height="100px" width="100px" alt="image not found"></td>
        
        <td>
          <?php
          if($row['aproval_status']==0)
          {
            ?>
            <a class="btn btn-primary" href="customerupdate_status.php?id=<?php echo $row['customer_id'];?>">approve</a>
            <?php
          }
          elseif($row['aproval_status']==1)
          {
            
            ?>
            <button class="btn btn-danger"> approved </button>
            
            <script>window.location.assgin('customertable.php');</script>
            <?php
          }
          ?>
          </td>
        </tr>
        <?php
}


?>
</table></center>
</div>
</section>
    

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
    function valid()
    {
        var approvebutton = document.getElementById("approve");
    }
</body>

</html>






