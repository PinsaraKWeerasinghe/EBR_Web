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
        <title>Add Maintainer | Spark</title>

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
                        <li><a href="issues.php">Issues</a></li>
                        <li class="active"><a href="maintainers.php">Maintainers</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->


    <div class="page-title" style="background-image: url(images/page-title.png)">
        <h1>Add Maintainer</h1>
    </div>

    <section id="contact-page">
        <div class="container">
<!--            <div class="large-title text-center">        -->
<!--                <h2>Drop Your Message</h2>-->
<!--                <p>All users on MySpace will know that there are millions of people out there. Every day <br> besides so many people joining this community.</p>-->
<!--            </div> -->
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form name="contact-form" method="post" action="addmaintainertodb.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Username *</label>
                            <input type="text" name="username" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>First Name *</label>
                            <input type="text" name="firstname" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Last Name *</label>
                            <input type="text" name="lastname" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input name="mobno" type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>NIC</label>
                            <input name="age" type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Password *</label>
                                <input type="password" name="password" class="form-control" required="required">
                            </div>
                            <label>Gender</label>

                            <select name="gender" class="form-control" required="required">
                                <option value="Select Gender">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Permanent Address</label>
                            <textarea name="address" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Add Maintainer</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->


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

