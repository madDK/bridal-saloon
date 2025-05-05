<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>

<?php
  // Start a PHP session.
  session_start();

  // Check if the user is logged in.
  if (!isset($_SESSION['username'])) {
    // If the user is not logged in, redirect to the login page.
    header("Location: index2.php");
    
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ceylonese Management System || Home Page</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- Style -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <?php include_once('includes/header.php'); ?>

<!-- home page  -->
<div class="hero-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h1 class="hero-title">Welcome to the Ceylonese<i></i></h1>
          <p class="hero-text"><strong>BRIDAL <i></i>, HAIR <i></i>, BEAUTY <i></i>, AYURVEDIC<i></i>.</strong></p>
          <p class="hero-text2"><strong>GLAMOUR & NATURAL BEAUTY</strong></p>
          <a href="appointment.php" class="btn btn-default">Make an Appointment <i class="fa fa-bookmark-o"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- home page end -->

  <!-- about us section-->
  <div class="space-medium bg-default">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><img src="images/about-img.jpg" alt="" class="img-responsive"></div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
          <div class="well-block">
            <?php
            $ret = mysqli_query($con, "select * from tblpage where PageType='aboutus' ");
            $cnt = 1;
            while ($row = mysqli_fetch_array($ret)) {
            ?>
            <h1>
              <?php echo $row['PageTitle']; ?>
            </h1>
            <h5 class="small-title">best experience ever</h5>
            <p>
              <?php echo $row['PageDescription']; ?>
            </p>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- about us section end-->

  <h2 class="mission_vision-title">Mission & Vision</h2>

  <!-- mission vision section -->
  <section class="mission-vision">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="mission">
            <h3>Our Mission <i class="fa fa-user-secret"></i></h3>
            <p>At our salon management system, our mission is to provide top-notch salon services to our clients by using high-quality products, providing personalized attention, and creating a relaxing atmosphere. We strive to exceed our clients' expectations by staying up-to-date with the latest trends and techniques, while also maintaining an eco-friendly and sustainable approach to our business.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="vision">
            <h3>Our Vision <i class="fa fa-opencart"></i></h3>
            <p>Our vision is to become a leading salon management system by empowering salon owners to streamline their operations, enhance their customer experiences, and increase their profitability. We aim to achieve this vision by leveraging cutting-edge technology, fostering a culture of innovation and collaboration, and providing unparalleled customer service to our clients.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- mission vision end -->

  <!-- what we do section -->
  <div class="what-we-do">
    <h2>What We Do</h2>
    <ul>
      <li> <i class="fa fa-check-circle-o"></i> <b>Haircuts:</b> Our stylists and barbers are experts in men's haircuts, from classic cuts to modern styles. We take the time to understand your individual style and preferences, so you can trust us to deliver the perfect cut every time.</li>
      <li> <i class="fa fa-check-circle-o"></i><b> Beard and Mustache Grooming: </b> Whether you're looking to keep your beard neat and tidy or want to try out a new style, our barbers have the skills and expertise to help you achieve the perfect look.</li>
      <li> <i class="fa fa-check-circle-o"></i> <b>Shaves:</b> There's nothing like a hot towel shave to leave you feeling refreshed and rejuvenated. Our barbers use the latest techniques and premium products to give you the closest, smoothest shave possible.</li>
      <li> <i class="fa fa-check-circle-o"></i> <b>Coloring:</b> Whether you want to cover up gray hair or try out a new look, our stylists can help you achieve the perfect hair color to suit your style and personality.</li>
      <li> <i class="fa fa-check-circle-o"></i><b> Styling: </b>From special occasions to everyday looks, our stylists can help you achieve the perfect style to suit any occasion. We use the latest techniques and products to ensure that your hair looks great all day.</li>
    </ul>
  </div>
  <!-- what we do section end -->

   <!-- why choose us section -->
   <section id="why-choose">
    <div class="container">
      <h2 class="section-title">Why Choose Us?</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="why-choose-item">
            <i class="fa fa-scissors"></i>
            <h3>Experienced Stylists</h3>
            <p>Our stylists have years of experience...</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="why-choose-item">
            <i class="fa fa-trophy"></i>
            <h3>Quality Service</h3>
            <p>We pride ourselves on providing top-notch service...</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="why-choose-item">
            <i class="fa fa-money"></i>
            <h3>Affordable Prices</h3>
            <p>Our prices are competitive and we offer a variety of packages...</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- why choose us section end-->

  <!-- our services section -->
  <section class="services">
    <div class="container">
      <h2>Our Services</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="service">
            <img src="images/hair.jpg" alt="Haircut">
            <h3>Bridal</h3>
            <p>Bridal works encompass the art of creating stunning wedding attire...</p>
            <a href="service-list2.php" class="btn">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service">
            <img src="images/color.jpg" alt="Color">
            <h3>Hair Styling & Coloring</h3>
            <p>Hair styling and coloring transform your look...</p>
            <a href="service-list2.php" class="btn">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service">
            <img src="images/style.jpg" alt="Styling">
            <h3>Makeup & Styling</h3>
            <p>Makeup enhances natural beauty...</p>
            <a href="service-list2.php" class="btn">View More <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- our services section end-->

  <!-- photo gallery section -->
  <section class="gallery">
    <h2>Photo Gallery</h2>
    <div class="gallery-container row">
      <div class="col-xs-6 col-sm-4 mb-3"><img src="images/portfolio-1.jpg" alt="Photo 1" class="img-responsive img-thumbnail"></div>
      <div class="col-xs-6 col-sm-4 mb-3"><img src="images/portfolio-2.jpg" alt="Photo 2" class="img-responsive img-thumbnail"></div>
      <div class="col-xs-6 col-sm-4 mb-3"><img src="images/portfolio-3.jpg" alt="Photo 3" class="img-responsive img-thumbnail"></div>
      <div class="col-xs-6 col-sm-4 mb-3"><img src="images/color.jpg" alt="Photo 4" class="img-responsive img-thumbnail"></div>
      <div class="col-xs-6 col-sm-4 mb-3"><img src="images/portfolio-4.jpg" alt="Photo 5" class="img-responsive img-thumbnail"></div>
      <div class="col-xs-6 col-sm-4 mb-3"><img src="images/portfolio-5.jpg" alt="Photo 6" class="img-responsive img-thumbnail"></div>
    </div>
  </section>
  <!-- photo gallery section end -->

  <!-- book appointment section -->
  <div class="space-small bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-7 col-md-8 col-xs-12">
          <h1 class="cta-title">Book your online Appointment</h1>
          <p class="cta-sub-title">Make an online appointment easily</p>
        </div>
        <div class="col-lg-4 col-sm-5 col-md-4 col-xs-12">
          <a href="appointment.php" class="btn btn-white">Make an Appointment <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- book appointment section end -->

  <?php include_once('includes/footer.php'); ?>

  <style>
    /* Add to your css/style.css */
@media (max-width: 767px) {
  .hero-section h1.hero-title {
    font-size: 24px;
  }

  .hero-section p.hero-text,
  .hero-section p.hero-text2 {
    font-size: 14px;
  }

  .hero-section .btn {
    padding: 10px 20px;
    font-size: 14px;
  }

  .service h3,
  .why-choose-item h3 {
    font-size: 16px;
  }

  .service p,
  .why-choose-item p {
    font-size: 14px;
  }

  /* Gallery Mobile Styles */
  .gallery {
    padding: 15px;
  }

  .gallery h2 {
    font-size: 24px;
    text-align: center;
    margin-bottom: 20px;
  }

  .gallery-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    margin: 0;
  }

  .gallery-container .col-xs-6,
  .gallery-container .col-sm-4 {
    flex: 0 0 calc(50% - 10px);
    max-width: calc(50% - 10px);
    padding: 0;
  }

  .gallery-container img {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
  }

  .gallery-container img:hover {
    transform: scale(1.02);
  }

  .what-we-do ul li {
    font-size: 14px;
    padding: 10px 0;
  }

  .cta-title {
    font-size: 20px;
    text-align: center;
  }

  .btn.btn-white {
    display: block;
    width: 100%;
    text-align: center;
    margin-top: 15px;
  }

  /* Mission & Vision Section Mobile Styles */
  .mission_vision-title {
    font-size: 24px;
    text-align: center;
    margin: 20px 0;
  }

  .mission-vision {
    padding: 20px 0;
  }

  .mission-vision .col-md-6 {
    margin-bottom: 30px;
  }

  .mission, .vision {
    padding: 20px;
    margin: 10px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  }

  .mission h3, .vision h3 {
    font-size: 20px;
    margin-bottom: 15px;
  }

  .mission p, .vision p {
    font-size: 14px;
    line-height: 1.6;
  }

  .mission i, .vision i {
    margin-right: 8px;
  }

  /* Logo Mobile Styles */
  .logo-img {
    max-width: 200px;
    height: auto;
    display: block;
    margin: 0 auto;
  }

  .header .col-lg-4 {
    text-align: center;
    margin-bottom: 15px;
  }
}
  </style>
</body>

</html>

