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
    <!-- Viewport for responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php include_once('includes/header2.php'); ?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">Message</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Message</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="message-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Message from Admin</h2>
                            <div class="message-content">
                                <?php
                                $file = 'admin/message.txt';
                                if (file_exists($file)) {
                                    $message = file_get_contents($file);
                                    echo "<p>$message</p>";
                                } else {
                                    echo "<p>No message to display.</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        body {
            background-color: #f5f5f5;
        }

        .page-header {
            background-color: #007bff;
            color: #fff;
            padding: 20px 0;
        }

        .page-caption {
            text-align: center;
        }

        .page-title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .breadcrumb {
            background-color: transparent;
            font-size: 18px;
        }

        .breadcrumb-item a {
            color: #fff;
            transition: all 0.2s ease;
        }

        .breadcrumb-item.active {
            color: #fff;
        }

        .card {
            background-color: #fff;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 0 auto;
            max-width: 809px;
            padding: 40px;
            text-align: center;
            transition: all 0.2s ease;
            margin-top: 48px;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        }

        .card-title {
            color: #007bff;
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 30px;
            transition: all 0.2s ease;
        }

        .card-title:hover {
            color: #0056b3;
        }

        .message-content {
            font-size: 20px;
            line-height: 1.5;
            margin-top: 20px;
        }

        .message-content p {
            margin-bottom: 0;
            margin-left: 15px;
            color: #ff0000;
            font-weight: 390;
        }

        @media screen and (max-width: 767px) {
            .card-title {
                font-size: 20px;
            }

            .message-content {
                font-size: 16px;
            }
        }
    </style>

    <?php include_once('includes/footer2.php'); ?>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>
</body>

</html>
