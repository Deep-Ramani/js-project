<?php
  session_start();
  $_SESSION["currentPage"] = 13;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">


  <title>Caffeine Rush ~Admin~</title>

  <!-- Bootstrap CSS -->
  <link href="admin-css/bootstrap.min.css" rel="stylesheet">

  <!-- bootstrap theme -->
  <link href="admin-css/bootstrap-theme.css" rel="stylesheet">
  <!-- external css -->
  <!-- font icon -->
  <link href="admin-css/elegant-icons-style.css" rel="stylesheet" />
  <link href="admin-css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="admin-css/style.css" rel="stylesheet">

  <link href="admin-css/style-responsive.css" rel="stylesheet" />
  <link rel="shortcut icon" href="ico/logo1.ico">

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <?php
    include("admin-header.php");
    ?>
    <!--header end-->

    <!--sidebar start-->
   <?php 
    include("admin-aside.php");
  ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_pencil"></i> orders</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="adminpage.php">Home</a></li>
              <li><i class="icon_pencil"></i>orders  </li>

            </div>
          </div>
          <section class="work py-5 my-lg-5">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 order">
                  <div class="notify-img"><img src="images/shop/3rd.jpeg" class="image-responsive"></div>
                  <div class="notify-text text-left">
                    <h2><b>~Priya Joshi~</b></h2>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Has been ordered 1 Rainbow Vanilla. </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 order1">
                  <div class="notify-img"><img src="images/shop/3rd.jpeg" class="image-responsive"></div>
                  <div class="notify-text text-left">
                    <h2><b>~Biren Chauhan~</b></h2>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Has been ordered 1 Fruit Almond and 1 Stovetop Raspberry. </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 order">
                  <div class="notify-img"><img src="images/shop/3rd.jpeg" class="image-responsive"></div>
                  <div class="notify-text text-left">
                    <h2><b>~Dixita Hapaliya~</b></h2>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Has been ordered 1 Purple Marble and 2 Gummy Bear. </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 order1">
                  <div class="notify-img"><img src="images/shop/3rd.jpeg" class="image-responsive"></div>
                  <div class="notify-text text-left">
                    <h2><b>~Bhut Prince~</b></h2>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Has been ordered 1 Rainbow Vanilla. </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 order">
                  <div class="notify-img"><img src="images/shop/3rd.jpeg" class="image-responsive"></div>
                  <div class="notify-text text-left">
                    <h2><b>~Rushi Kapuriya~</b></h2>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Has been ordered 1 Black Cherry and 1 Straw Mousse.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 order1">
                  <div class="notify-img"><img src="images/shop/3rd.jpeg" class="image-responsive"></div>
                  <div class="notify-text text-left">
                    <h2><b>~Deep Ramani~</b></h2>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Has been ordered 1 Blue Mermaid. </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 order">
                  <div class="notify-img"><img src="images/shop/3rd.jpeg" class="image-responsive"></div>
                  <div class="notify-text text-left">
                    <h2><b>~Kishan Kamani ~</b></h2>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Has been ordered 1 Blue Bucks. </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- page end-->
        </section>
      </section>
      <!--main content end-->

    </section>
    <!-- container section end -->

    <script src="admin-js/jquery.js"></script>
    <script src="admin-js/bootstrap.min.js"></script>
    <script src="admin-js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="admin-js/scripts.js"></script>
  </body>

  </html>
