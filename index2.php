<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>

<!-- HTML code for the appointment page goes here -->

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ceylonese|| Home Page</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- Style -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Viewport for responsiveness -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <?php include_once('includes/header2.php'); ?>

  <!-- home page  -->
  <div class="hero-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h1 class="hero-title">Welcome to the Ceylonese<i></i></h1>
          <p class="hero-text"><strong>BRIDAL <i></i>, HAIR <i></i>, BEAUTY <i></i>, AYURVEDIC<i></i>.</strong></p>
          <p class="hero-text2"><strong>GLAMOUR & NATURAL BEAUTY</strong></p>
          <a href="login.php" class="btn btn-default">Make an Appointment <i class="fa fa-bookmark-o"></i></a>
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

  <h2 class="mission_vision-title">Misson & Vision</h2>

  <!-- mission vision section -->
  <section class="mission-vision">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="mission">
            <h3>Our Mission <i class="fa fa-user-secret"></i></h3>
            <p>At our salon, our mission is to deliver exceptional beauty services that emphasize the power of Ayurvedic and natural treatments...</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="vision">
            <h3>Our Vision <i class="fa fa-opencart"></i></h3>
            <p>Our vision is to become a leading salon that offers exceptional Ayurvedic and natural beauty treatments...</p>
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
      <li> <i class="fa fa-check-circle-o"></i> <b>Bridal Services:</b> Our bridal services focus on enhancing your natural beauty...</li>
      <li> <i class="fa fa-check-circle-o"></i> <b>Hair Styling:</b> Our stylists specialize in creating beautiful hairstyles...</li>
      <li> <i class="fa fa-check-circle-o"></i> <b>Makeup:</b> Our makeup services use Ayurvedic and natural ingredients...</li>
      <li> <i class="fa fa-check-circle-o"></i> <b>Natural Hair Coloring:</b> If you're looking for a fresh new look...</li>
      <li> <i class="fa fa-check-circle-o"></i> <b>Facials & Skin Care:</b> Our facials are designed to rejuvenate your skin...</li>
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
          <a href="login.php" class="btn btn-white">Make an Appointment <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- book appointment section end -->

  <?php include_once('includes/footer.php'); ?>

  <style>
    /* Enhanced mobile-friendly styles */
    @media (max-width: 767px) {
      /* Header and Logo improvements */
      .header {
        padding: 10px 0;
      }

      .header .container {
        padding: 0 15px;
      }

      .header .row {
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .header .col-lg-4 {
        width: 100%;
        text-align: center;
        margin-bottom: 15px;
      }

      .header img {
        max-width: 180px;
        height: auto;
        display: block;
        margin: 0 auto;
      }

      .header .col-lg-8 {
        width: 100%;
      }

      /* Navigation improvements */
      .navigation {
        width: 100%;
      }

      #navigation ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 0;
        margin: 0;
        list-style: none;
      }

      #navigation ul li {
        margin: 5px;
      }

      #navigation ul li a {
        padding: 8px 12px;
        font-size: 14px;
      }

      /* Hero section improvements */
      .hero-section {
        padding: 30px 0;
        text-align: center;
      }
      
      .hero-section h1.hero-title {
        font-size: 24px;
        line-height: 1.3;
        margin-bottom: 15px;
      }

      .hero-section p.hero-text,
      .hero-section p.hero-text2 {
        font-size: 14px;
        margin-bottom: 10px;
      }

      /* Services section improvements */
      .service {
        margin-bottom: 30px;
        padding: 15px;
      }

      .service img {
        width: 100%;
        height: auto;
        margin-bottom: 15px;
      }

      /* Mission & Vision section */
      .mission, .vision {
        margin-bottom: 20px;
        padding: 15px;
      }

      /* What We Do section */
      .what-we-do {
        padding: 20px;
      }

      .what-we-do ul li {
        font-size: 14px;
        padding: 8px 0;
        display: flex;
        align-items: flex-start;
      }

      .what-we-do ul li i {
        margin-right: 10px;
        margin-top: 3px;
      }

      /* Why Choose Us section */
      .why-choose-item {
        margin-bottom: 25px;
        text-align: center;
        padding: 15px;
      }

      /* Gallery improvements */
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
        margin-bottom: 0;
      }

      .gallery-container img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
      }

      .gallery-container img:hover {
        transform: scale(1.02);
      }

      /* CTA section improvements */
      .space-small {
        padding: 30px 0;
      }

      .cta-title {
        font-size: 20px;
        text-align: center;
        margin-bottom: 10px;
      }

      .cta-sub-title {
        text-align: center;
        margin-bottom: 20px;
      }

      .btn.btn-white {
        display: block;
        width: 100%;
        text-align: center;
        padding: 12px;
        font-size: 16px;
      }

      /* General responsive improvements */
      .container {
        padding-left: 15px;
        padding-right: 15px;
      }

      .row {
        margin-left: -15px;
        margin-right: -15px;
      }

      h2 {
        font-size: 24px;
        margin-bottom: 20px;
      }

      .well-block {
        padding: 20px;
      }
    }

    /* Additional breakpoint for very small devices */
    @media (max-width: 480px) {
      .header img {
        max-width: 150px;
      }

      #navigation ul {
        flex-direction: column;
        align-items: center;
      }

      #navigation ul li {
        width: 100%;
        text-align: center;
        margin: 5px 0;
      }

      .hero-section h1.hero-title {
        font-size: 20px;
      }

      .gallery-container .col-xs-6 {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .gallery-container img {
        height: 250px;
      }

      .what-we-do ul li {
        font-size: 13px;
      }
    }

    /* Add these new styles for header responsiveness */
    .header {
        padding: 10px 0;
    }

    .logo-link {
        display: block;
    }

    .logo-img {
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 767px) {
        /* Logo styles */
        .logo-img {
            max-height: 60px;
            margin-left: 0 !important; /* Remove negative margin on mobile */
            display: block;
            margin: 0 auto;
        }

        /* Navigation styles */
        .navbar-toggle {
            display: block;
            float: right;
            margin: 10px 15px;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 9px 10px;
        }

        .navbar-toggle .icon-bar {
            display: block;
            width: 22px;
            height: 2px;
            background-color: #888;
            margin: 4px 0;
        }

        #navigation {
            display: none;
            width: 100%;
            margin-top: 10px;
        }

        #navigation.show {
            display: block;
        }

        #navigation ul {
            padding: 0;
            margin: 0;
            list-style: none;
            background-color: #fff;
        }

        #navigation ul li {
            display: block;
            margin: 0;
            border-bottom: 1px solid #eee;
        }

        #navigation ul li a {
            padding: 12px 15px;
            display: block;
            color: #333;
            text-decoration: none;
        }

        /* Header container adjustments */
        .header .container {
            padding: 0 15px;
        }

        .header .row {
            margin: 0;
        }

        .col-xs-12 {
            padding: 0;
        }

        /* Navigation container */
        .navigation {
            position: relative;
            margin-top: 10px;
        }
    }

    /* Additional styles for very small devices */
    @media (max-width: 480px) {
        .logo-img {
            max-height: 50px;
        }
    }

    /* Add this script to handle mobile menu toggle */
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.querySelector('.navbar-toggle');
            const nav = document.getElementById('navigation');
            
            if(toggle && nav) {
                toggle.addEventListener('click', function() {
                    nav.classList.toggle('show');
                });
            }
        });
    </script>
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
