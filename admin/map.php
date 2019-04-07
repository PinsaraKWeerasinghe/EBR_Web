

<?php
$lat=$_GET["lat"];
$long=$_GET["long"];


?>






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
        <title>Location | Spark</title>

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
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="issues.php">Issues</a></li>
                        <li><a href="maintainers.php">Maintainers</a></li>

                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>
    <!--/header-->


    <div class="page-title" style="background-image: url(images/page-title.png)">
        <h1>Incident Location</h1>
    </div>
    <section  id="feature">
        <div class="container">
            <div class="center fadeInDown">

                <div class="table-bordered">

                </div>
                <!DOCTYPE html>
                <html>
                <head>
                    <style>
                        /* Set the size of the div element that contains the map */
                        #map {
                            height: 800px;  /* The height is 400 pixels */
                            width: 100%;  /* The width is the width of the web page */
                        }
                    </style>
                </head>
                <body>
                <!--The div element for the map -->
                <div id="map"></div>
                <script>
                    // Initialize and add the map
                    function initMap() {
                        // The location of Uluru
                        var uluru = {lat: <?php echo "$lat"?>, lng: <?php echo "$long"?>};
                        // The map, centered at Uluru
                        var map = new google.maps.Map(
                            document.getElementById('map'), {zoom: 4, center: uluru});
                        // The marker, positioned at Uluru
                        var marker = new google.maps.Marker({position: uluru, map: map});
                    }
                </script>
                <!--Load the API from the specified URL
                * The async attribute allows the browser to render the page while the API loads
                * The key parameter will contain your own API key (which is not needed for this tutorial)
                * The callback parameter executes the initMap() function
                -->
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkrMe3uOOyCXYjCli8P-pxoOLPVI0Fre0&callback=initMap">
                </script>
                </body>
                </html>



            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->





    <!--/#content-->
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


    echo "<script type=\"text/javascript\">location.href = '../index.php'</script>";
}


?>
