
<?php
session_start();
if(!isset($_SESSION["email"]))
{
    header("location:student_login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Industry wide an Industrial Category Bootstrap Responsive Website Template  | Home :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Industry wide Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />


    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <!--//web-fonts-->
    <!--//fonts-->
    <!-- js -->
</head>
<body>
<!-- banner -->
<div class="banner" id="home">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="w3-logo">
                <h1><a href="index.html">Industry wide</a></h1>
            </div>
            <!-- navigation -->
            <nav class="navbar navbar-default ayanEffects ayanHoverEffect_7">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="active" href="Welcome.php">Home</a></li>
                        <li><a href="home_student.php">Edit-My-Profile</a></li>
                        <li><a href="blockallot.php">Allotement of Block</a></li>
                        <li><a href="logoutstudent.php">Student-Logout</a></li>
                                            </ul>
                </div><!-- /.navbar-collapse -->

            </nav>
            <div class="clearfix"></div>
            <!-- //navigation -->
        </div>
    </header>
    <!-- //header -->
    <!-- banner-text -->
    <div class="banner-text">
        <div class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <div class="slider-info">
                        <h3>what you can imagine we can create.</h3>
                        <p> We work on the forefront of innovation and technology.</p>
                    </div>

                </li>
                <li>

                    <div class="slider-info">
                        <h3>SOLVE CHALLENGES OF FIELD SERVICE WITH MOBILITY</h3>
                        <p>Imagine the possibilities of what we can do for u.</p>
                    </div>
                    >
                </li>
                <li>

                    <div class="slider-info">
                        <h3>what you can imagine we can create.</h3>
                        <p>We work on the forefront of innovation and technology.</p>
                    </div>

                </li>
                <li>

                    <div class="slider-info">
                        <h3>SOLVE CHALLENGES OF FIELD SERVICE WITH MOBILITY</h3>
                        <p> .</p>
                    </div>
                    
                </li>

            </ul>

        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //banner -->


