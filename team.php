<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
$viewid=$_GET['viewid'];
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
            <li><?php echo $viewid; ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team ">
      <div class="container">

        <div class="row">
<?php 
$query=mysqli_query($con,"select * from users where categoryName='".$_GET['viewid']."' and status=1");

while($row=mysqli_fetch_array($query))
{
?>	
          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="users/userimages/<?php echo htmlentities($row['userImage']);?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><a href="team-details.php?uid=<?php echo htmlentities($row['fullName']);?>"><?php echo htmlentities($row['fullName']);?></a></h4>
                <p><?php echo htmlentities($row['categoryName']);?></p>
                <p><?php echo htmlentities($row['State']);?></p>
                <span></span>
                <div class="social">
                  <a href="<?php echo htmlentities($row['twitter']);?>"><i class="ri-twitter-fill"></i></a>
                  <a href="<?php echo htmlentities($row['instagram']);?>"><i class="ri-facebook-fill"></i></a>
                  <a href="<?php echo htmlentities($row['facebook']);?>"><i class="ri-instagram-fill"></i></a>
                  <a href="<?php echo htmlentities($row['linkedin']);?>"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
				
              </div>
            </div>
          </div>
<?php } ?>
          
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
<?php } ?>