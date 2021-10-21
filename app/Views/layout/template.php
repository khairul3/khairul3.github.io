<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cloud Advisory - AWS Architecture Design, Cloud Security, Automation, Cloud Native, Infrastructures Management">
    <meta name="author" content="Victor GRENU">

    <title>King of shrimp</title>

    <!-- Bootstrap Core CSS -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <!-- Theme CSS -->
    <link href="./css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sintony&display=swap" rel="stylesheet">

    <link rel="manifest" href="../img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./img/ms-icon-144x144.png">


</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top" data-aos="fade-down" data-aos-offset="200" data-aos-duration="1000">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Show navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#product">Product</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#services">Service</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Content section -->
    <?= $this->renderSection('content'); ?>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact <span>Us</span></h2>
            <div class="contact-content">
                <div class="card">
                    <div class="box" id="address">
                        <i class="fa fa-cloud"></i>
                        <div class="title2">Address</div>
                        <p>Indonesia / Kalimantan Selatan</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box" id="btn-modal-email">
                        <i class="fa fa-envelope"></i>
                        <div class="title2">Email</div>
                        <p>kingof_shrimp@gmail.com</p>
                        <p>(click for sending us a message)</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box" id="instagram">
                        <i class="fa fa-instagram"></i>
                        <div class="title2">Instagram</div>
                        <p>@kingof_shrimp</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row center">
                <ul class="list-inline social-buttons">
                    <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li><a href="" target="_blank"><i class="fa fa-github"></i></a>
                    </li>
                    <li><a href="" target="_blank"><i class="fa fa-medium"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="./vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous">
    </script>

    <!-- Contact Form JavaScript -->
    <script src="./js/jqBootstrapValidation.js"></script>
    <script src="./js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="./js/agency.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>

</html>