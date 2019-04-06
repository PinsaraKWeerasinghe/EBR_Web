<?php

session_start();

if(isset($_SESSION['uname'])){

?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home | Corlate</title>

        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/owl.carousel.min.css" rel="stylesheet">
        <link href="css/icomoon.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">


    </head>
    <!--/head-->

    <body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">

                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="social" style="padding-right: 30px">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/CeylonElectricityBoard/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/www_ceb_lk?lang=en"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/ceylon-electricity-board-ceb"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.ceb.lk/"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                            <div class="search">
                                <a href="index.php"><input  style="background: #ffce00"  type="button" value="Hi! <?php echo $_SESSION['uname']?>">   </a>
                                <a href="../logout.php"><input style="background: #ffce00" type="button" value="Log Out"></button></a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img style="height: 70px" src="images/logo.png" alt="logo"></a>
                    <a class="navbar-brand" href="index.php"><img style="height: 70px" src="images/Spark-Logo.png" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active" ><a href="index.php">Home</a></li>
                        <li ><a href="issues.php">Issues</a></li>
                        <li><a href="maintainers.php">Maintainers</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>
    <!--/header-->

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Service is First !</h1>
                                    <div class="animation animated-item-2">
                                        Maintainer is a not Just profession. It is a Service.<br>Again think... Service is first !
                                    </div>
                                    <a class="btn-slide animation animated-item-3" href="issues.php">Issues</a>
                                    <a class="btn-slide white animation animated-item-3" href="maintainers.php">Maintainers</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Give High Priority to the Customer !</h1>
                                    <div class="animation animated-item-2">
                                        Try to complete customer requirement...
                                    </div>
                                    <a class="btn-slide animation animated-item-3" href="issues.php">Issues</a>
                                    <a class="btn-slide white animation animated-item-3" href="maintainers.php">Maintainers</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Give High Priority to the Customer !</h1>
                                    <div class="animation animated-item-2">
                                        Responsibilities of the maintainers are keep customer happy.
                                    </div>
                                    <a class="btn-slide animation animated-item-3" href="issues.php">Issues</a>
                                    <a class="btn-slide white animation animated-item-3" href="maintainers.php">Maintainers</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <!--/#main-slider-->

    <section id="feature">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Spark Service Station</h2>
                <p class="lead">This is Spark. Main Task of this application Give the Best Service to the Customer.<br></p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <h2>Fast</h2>
                            <p>Fast Transportation service help to mainers to give their service very quickly.</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <h2>Easy</h2>
                            <p>Easy Mobile application help to report very easily. Online Desk is give reliable service.</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <h2>Good Condition</h2>
                            <p>All maintainers are well practiced. Everyone has at least 2 years of experience. </p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-arrows"></i>
                            </div>
                            <h2>Customer is first</h2>
                            <p>Motto is also that. All services do for customers.</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                </div>
                <!--/.services-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->

<!--  -->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; Spark. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    </body>

    </html>





    <?php



}else{


    echo "<script type=\"text/javascript\">location.href = 'Login/index.php'</script>";
}


?>






