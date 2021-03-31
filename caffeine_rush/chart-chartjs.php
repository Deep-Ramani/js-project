<?php
  session_start();
  $_SESSION["currentPage"] = 14;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">


  <title>Charts | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="admin-css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="admin-css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
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
          <h3 class="page-header"><i class="icon_piechart"></i> Chart</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="adminpage.php">Home</a></li>
            <li><i class="icon_piechart"></i>Chart</li>

          </ol>
        </div>
      </div>
      <div class="row">
        <!-- chart morris start -->
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              <h3>General Chart</Char>
              </header>
              <div class="panel-body">
                <div class="tab-pane" id="chartjs">
                  <div class="row">
                    <!-- Line -->
                    <div class="col-lg-6">
                      <section class="panel">
                        <header class="panel-heading">
                          Line
                        </header>
                        <div class="panel-body text-center">
                          <canvas id="line" height="300" width="450"></canvas>
                        </div>
                      </section>
                    </div>
                    <!-- Bar -->
                    <div class="col-lg-6">
                      <section class="panel">
                        <header class="panel-heading">
                          Bar
                        </header>
                        <div class="panel-body text-center">
                          <canvas id="bar" height="300" width="500"></canvas>
                        </div>
                      </section>
                    </div>
                  </div>
                  <div class="row">
                    <!-- Radar -->
                    <div class="col-lg-6">
                      <section class="panel">
                        <header class="panel-heading">
                          Radar
                        </header>
                        <div class="panel-body text-center">
                          <canvas id="radar" height="300" width="400"></canvas>
                        </div>
                      </section>
                    </div>
                    <!-- Polar Area -->
                    <div class="col-lg-6">
                      <section class="panel">
                        <header class="panel-heading">
                          Polar Area
                        </header>
                        <div class="panel-body text-center">
                          <canvas id="polarArea" height="300" width="400"></canvas>
                        </div>
                      </section>
                    </div>
                  </div>
                  <div class="row">

                    <!-- Pie -->
                    <div class="col-lg-6">
                      <section class="panel">
                        <header class="panel-heading">
                          Pie
                        </header>
                        <div class="panel-body text-center">
                          <canvas id="pie" height="300" width="400"></canvas>
                        </div>
                      </section>
                    </div>
                    <!-- Doughnut -->
                    <div class="col-lg-6">
                      <section class="panel">
                        <header class="panel-heading">
                          Doughnut
                        </header>
                        <div class="panel-body text-center">
                          <canvas id="doughnut" height="300" width="400"></canvas>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <!-- chart morris start -->
      </div>
    </section>
    <!--main content end-->

  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="admin-js/jquery.js"></script>
  <script src="admin-js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <!-- <script src="admin-js/jquery.scrollTo.min.js"></script> -->
  <script src="admin-js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- chartjs -->
  <script src="assets1/chart-master/Chart.js"></script>
  <!-- custom chart script for this page only-->
  <script src="admin-js/chartjs-custom.js"></script>
  <!--custome script for all page-->
  <script src="admin-js/scripts.js"></script>

</body>
</html>
