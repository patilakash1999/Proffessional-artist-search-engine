<?php
error_reporting(0);
session_start();
include('include/config.php');
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
            <?php if(strlen($_SESSION['login'])==1){ ?><ul>

			<?php $sql=mysqli_query($con,"select categoryName from category ");
while ($rw=mysqli_fetch_array($sql)) {
  
  ?>
  <li value="<?php echo htmlentities($rw['categoryName']);?>"><a href="team.php?viewid=<?php echo htmlentities($rw['categoryName']);?>"><?php echo htmlentities($rw['categoryName']);?></a></li>
<?php
}
?>
            </ul><?php } ?>
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
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Proffessional Artists Search Engine</span></h2>
              <p class="animate__animated animate__fadeInUp"></p>
              <a href="http://localhost/proffessionalartistssearchengine/visitors/" class="btn-get-started animate__animated animate__fadeInUp scrollto">Explore Artists</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Proffessional Artists Search Engine</h2>
              <p class="animate__animated animate__fadeInUp"></p>
              <a href="http://localhost/proffessionalartistssearchengine/visitors/" class="btn-get-started animate__animated animate__fadeInUp scrollto">Explore Artists</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"></p>
              <a href="http://localhost/proffessionalartistssearchengine/visitors/" class="btn-get-started animate__animated animate__fadeInUp scrollto">Explore Artists</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
 <!-- <main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Professional Artists</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Artists</li>
          </ol>
        </div>

      </div>
    </section>

    <section id="team" class="team ">
      <div class="container">

        <div class="row">

<?php $query=mysqli_query($con,"select * from users where status=1");
$cnt=1;
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
    </section>
  </main>--><!-- End #main -->

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