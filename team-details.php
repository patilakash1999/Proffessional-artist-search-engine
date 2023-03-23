<?php
session_start();
include('include/config.php');
$uid=$_GET['uid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Professional Artist Search Engine </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">PASEMS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
		  <li class="dropdown"><a href="#"><span>Category</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

			<?php $sql=mysqli_query($con,"select categoryName from category ");
while ($rw=mysqli_fetch_array($sql)) {
  
  ?>
  <li value="<?php echo htmlentities($rw['categoryName']);?>"><a href="team.php?viewid=<?php echo htmlentities($rw['categoryName']);?>"><?php echo htmlentities($rw['categoryName']);?></a></li>
<?php
}
?>
            </ul>
          </li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="admin" class="getstarted">Admin</a></li>
          <li><a href="users" class="getstarted">Artists</a></li>
          <li><a href="visitors" class="getstarted">Visitors</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Professional Artists</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><?php echo $uid; ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="services" class="services ">
      <div class="container">

        <div class="row">
<?php 
$query=mysqli_query($con,"select * from users where fullName='".$_GET['uid']."'");

while($row=mysqli_fetch_array($query))
{
?>
          <!--<div class="col-lg-12">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><a href="team-details.php?uid=<?php echo htmlentities($row['fullName']);?>"><?php echo htmlentities($row['fullName']);?></a></h4>
                <p><?php echo htmlentities($row['categoryName']);?></p>
                <p><?php echo htmlentities($row['State']);?></p>
                <span></span>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
				
              <a href="#breadcrumbs" class="btn-get-started animate__animated animate__fadeInUp scrollto">Explore Artists</a>
              </div>
            </div>
          </div>-->
		  <div class="row">
          <div class="col-md-4">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Artist Photo</a></h4>
              <p><img src="users/userimages/<?php echo htmlentities($row['userImage']);?>" class="img-fluid" alt=""></p>
            </div>
          </div>		  
          <div class="col-md-8">
		  <div class="row">
          <div class="col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Artist Name</a></h4>
              <p><?php echo htmlentities($row['fullName']);?></p>
            </div>
          </div>
          <div class="col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Category</a></h4>
              <p><?php echo htmlentities($row['categoryName']);?></p>
            </div>
          </div>
          <div class="col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">Contact Number</a></h4>
              <p><?php echo htmlentities($row['contactNo']);?></p>
            </div>
          </div>
          </div>
		  <div class="row">
          <div class="col-md-12 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Artist Services</a></h4>
              <p><?php echo htmlentities($row['servicedetails']);?></p>
            </div>
          </div>
          </div>
        </div><!--
		  <div class="row">
          <div class="col-md-3">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Artist Email ID</a></h4>
              <p><?php echo htmlentities($row['userEmail']);?></p>
            </div>
          </div>
          <div class="col-md-3 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Artist Address</a></h4>
              <p><?php echo htmlentities($row['address']);?></p>
            </div>
          </div>
          <div class="col-md-3 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">State</a></h4>
              <p><?php echo htmlentities($row['State']);?></p>
            </div>
          </div>
          <div class="col-md-3 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">Pincode</a></h4>
              <p><?php echo htmlentities($row['pincode']);?></p>
            </div>
          </div>
        </div>-->
		  <div class="row">
          <div class="col-md-3">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Facebook ID</a></h4>
              <p><a href="<?php echo htmlentities($row['facebook']);?>"><?php echo htmlentities($row['facebook']);?></a></p>
            </div>
          </div>
          <div class="col-md-3 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Instagram ID</a></h4>
              <p><a href="<?php echo htmlentities($row['instagram']);?>"><?php echo htmlentities($row['instagram']);?></a></p>
            </div>
          </div>
          <div class="col-md-3 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Twitter ID</a></h4>
              <p><a href="<?php echo htmlentities($row['twitter']);?>"><?php echo htmlentities($row['twitter']);?></a></p>
            </div>
          </div>
          <div class="col-md-3 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">LinkedIn ID</a></h4>
              <p><a href="<?php echo htmlentities($row['linkedin']);?>"><?php echo htmlentities($row['linkedin']);?></a></p>
            </div>
          </div>
        </div>
		  
<?php }    ?>        

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PASEMS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Students</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>