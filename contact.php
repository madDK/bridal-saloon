<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ceylonese || Contact Page</title>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Viewport meta tag for responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        /* Ensure the button is responsive */
        .contact-btn {
            width: 50%; /* Full width on small screens */
            padding: 1px; /* Padding for better touchability */
            font-size: 16px; /* Readable font size */
            text-align: center; /* Center text inside the button */
        }

        /* Mobile-specific adjustments */
        @media (max-width: 767px) {
            .contact-btn {
                width: 50%; /* Make sure the button takes up the full width on mobile */
                font-size: 12px; /* Slightly smaller font size for mobile */
                padding: 12px; /* Adjust padding for mobile */
            }
        }
    </style>

</head>

<body>
    <?php include_once('includes/header2.php');?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">Contact us</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Contact us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="widget widget-contact">
                         <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                        <h3 class="widget-title">Contact Info <i class="fa fa-address-book"></i></h3>
                        <address>
                            <strong><i class="fa fa-location-arrow"></i> Address: </strong>
                            <?php  echo $row['PageDescription'];?>
                           <br><br>
                            <strong><i class="fa fa-phone-square"></i> Phone no:</strong> <a href="tel:9435059030"><?php echo $row['MobileNumber']; ?></a>
                        </address>
                        <address>
                            <strong> <i class="fa fa-envelope"></i> Email: </strong>
                            <a href="mailto:aayurdhafoundation@gmail.com"><?php  echo $row['Email'];?></a>
                        </address>
                        <address>
                            <strong> <i class="fa fa-clock-o"></i> Timing: </strong>
                            <?php  echo $row['Timing'];?>
                        </address>
                    <?php } ?>
                    </div>
                    <div class="widget widget-social">
                        <div class="social-circle">
                            <a href="https://www.facebook.com/chalani1fernand" class="#"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/ceylonese_bridal" class="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="well-block">
                                <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                <h1><?php  echo $row['PageTitle'];?></h1>
                                <h5 class="small-title">Best experience ever</h5>
                                <p><?php  echo $row['PageDescription'];?></p>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enquiry Section -->
    <section class="enquiry">
        <div class="enquiry-section">
            <div class="enquiry-form">
                <form novalidate>
                    <h2>Send us an enquiry </h2>
                    <label for="name">Name <i class="fa fa-user"></i></label>
                    <input type="text" id="name" name="name" required>

                    <label for="phone">Phone <i class="fa fa-phone"></i></label>
                    <input type="tel" id="phone" name="phone" required>

                    <label for="email">Email <i class="fa fa-envelope"></i></label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message <i class="fa fa-comments" aria-hidden="true"></i></label>
                    <textarea id="message" name="message" required></textarea>

                    <a class="contact-btn btn btn-primary btn-block" href="thanks-enquiry.php"> 
                        <span class="txt">Send a Message <i class="fa fa-location-arrow"></i></span>
                    </a>
                </form>
            </div>

            <div class="col-xl-6">
                <div class="donate-one__right">
                    <div class="donate-one__img">
                        <iframe width="600" height="500" id="gmap_canvas"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d494.70659939590985!2d80.6206435!3d7.2802886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae36983acea916b%3A0xe8677ab990adbe7b!2sSalon%20Ceylonese!5e0!3m2!1sen!2slk!4v1743850080058!5m2!1sen!2slk"                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('includes/footer2.php');?>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>
</body>

</html>
