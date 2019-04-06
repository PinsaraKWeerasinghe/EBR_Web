<?php

session_start();

if(isset($_SESSION['uname'])){
    $incidentid=$_GET["id"];

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
                    <a class="navbar-brand" href="index.html"><img style="height: 70px" src="images/logo.png" alt="logo"></a>
                    <a class="navbar-brand" href="index.html"><img style="height: 70px" src="images/Spark-Logo.png" alt="logo"></a>
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




                    
                </div>
                <?php
                $mysql_host="localhost";
                $mysql_user="root";

                $con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");


                $_query="SELECT * FROM incident WHERE incident_id=$incidentid";
                $is_query_run=mysqli_query($con,$_query);


                while($query_execute=mysqli_fetch_assoc($is_query_run)){
                    $user=$query_execute["user_id"];
                    $type=$query_execute["insident_type"];
                    $comment=$query_execute["comment"];
                    $state=$query_execute["state"];
                    $lat=$query_execute["lat"];
                    $lng=$query_execute["lng"];
                    $image=$query_execute["imagepath"];
                }

                mysqli_close($con);

                $mysql_host="localhost";
                $mysql_user="root";

                $con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");


                $_query="SELECT * FROM User WHERE user_id=$user";
                $is_query_run=mysqli_query($con,$_query);


                while($query_execute=mysqli_fetch_assoc($is_query_run)){
                    $fname=$query_execute["first_name"];
                    $lname=$query_execute["last_name"];
                    $accno=$query_execute["account_no"];
                    $email=$query_execute["email"];
                    $mobno=$query_execute["mobile_no"];
                }

                mysqli_close($con);


                ?>


                <div class="page-title" style="background-image: url(images/page-title.png)">
                    <h1>Incident Description</h1>
                </div>

                <section id="contact-page">
                    <div class="container">
                        <div class="large-title text-center">
                            <h2>Report NO: <?php echo"$incidentid"?></h2>
                            <p>Here is the decription about this incident.<br> besides so many people joining this community.</p>
                        </div>
                        <div class="row contact-wrap">
                            <div class="status alert alert-success" style="display: none"></div>
                            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                                <div class="col-sm-5 col-sm-offset-1">
                                    <div class="form-group">
                                        <label>Reporter Name</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Repoter Mobile Number</label>

                                    </div>
                                    <div class="form-group">
                                        <label>Reporter email Address</label>

                                    </div>
                                    <div class="form-group">
                                        <label>Repoter Electricity Account Number</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Report Type</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Description of Report</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Current State of the incident</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Location Cordinates</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Incident Photograph</label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label><?php echo":"," ","$fname"," ","$lname"?></label>

                                    </div>
                                    <div class="form-group">
                                        <label><?php echo":"," ","$mobno"?></label>

                                    </div>
                                    <div class="form-group">
                                        <label><?php echo":"," ","$email"?></label>

                                    </div>

                                    <div class="form-group">
                                        <label><?php echo":"," ","$accno"?></label>

                                    </div>
                                    <div class="form-group">
                                        <label><?php echo":"," ","$type"?></label>

                                    </div>
                                    <div class="form-group">
                                        <label><?php echo":"," ","$comment"?></label>

                                    </div>
                                    <div class="form-group">
                                        <label><?php echo":"," ","$state"?></label>

                                    </div>
                                    <div class="form-group">
                                        <label><?php echo":"," ","Longitude : ","$lng","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","&nbsp","Latitude : ","$lat"?></label>

                                    </div>

                                    <div class="form-group">
                                        <label><?php echo"<img src='data:image/png;base64,$image'>"?></label>

                                    </div>


                                </div>
                            </form>
                        </div><!--/.row-->
                    </div><!--/.container-->
                </section><!--/#contact-page-->




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
