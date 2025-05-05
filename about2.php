<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ceylonese || Home Page</title>
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

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">About us</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">About us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="space-medium bg-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <img src="images/about-img.jpg" alt="" class="img-responsive">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="well-block">
                        <?php
                        $ret = mysqli_query($con, "select * from tblpage where PageType='aboutus' ");
                        $cnt = 1;
                        while ($row = mysqli_fetch_array($ret)) {
                        ?>
                            <h1><?php echo $row['PageTitle']; ?></h1>
                            <h5 class="small-title">Best experience ever</h5>
                            <p><?php echo $row['PageDescription']; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once('includes/footer2.php'); ?>
<style> /* Add to your css/style.css */

/* Mobile Responsiveness */
@media (max-width: 767px) {
    .page-header .page-caption h2 {
        font-size: 24px;
    }

    .page-header .page-caption .page-breadcrumb ol li {
        font-size: 14px;
    }

    .page-header .page-caption .page-breadcrumb ol li a {
        font-size: 14px;
    }

    .well-block h1 {
        font-size: 24px;
    }

    .well-block h5 {
        font-size: 16px;
    }

    .well-block p {
        font-size: 14px;
    }

    .img-responsive {
        width: 100%;
        height: auto;
    }

    .container {
        padding-left: 10px;
        padding-right: 10px;
    }
}
</style>
</body>

</html>
