<?php
  session_start();
  $_SESSION["currentPage"] = 11;
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
            <h3 class="page-header"><i class="icon_genius"></i> reviews</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="adminpage.php">Home</a></li>
              <li><i class="icon_genius"></i>reviews</li>

            </div>
          </div>
          <section class="work py-5 my-lg-5">
            <div class="container">
                
              <?php  
                include("dbcnt.php");
                $result = mysqli_query($con,"SELECT username,review from reviews"); 
                if ($result == ""){
                  echo '<div class="errdiv">
                      <i class="icon_close_alt icon"></i>
                      <p class="icontxt"> &nbsp;THERE IS NO ANY REVIEWS AVALABLE NOW...</p>
                    </div>';
                }
                else{

                  if($result -> num_rows > 0){
                    $i=1;
                    while($row = $result-> fetch_assoc()){
                      if (($i % 2) == 0 ){
                        echo '<div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 order">
                                  <div class="notify-img"><img src="images/shop/3rd.jpeg" class="image-responsive"></div>
                                  <div class="notify-text text-left">
                                    <h2><b>~'.$row["username"].'~</b></h2>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row["review"].'</p>
                                  </div>
                                </div>
                              </div>';
                      }
                      else{
                        echo '<div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 order1">
                                  <div class="notify-img"><img src="images/shop/3rd.jpeg" class="image-responsive"></div>
                                  <div class="notify-text text-left">
                                    <h2><b>~'.$row["username"].'~</b></h2>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row["review"].' </p>
                                  </div>
                                </div>
                              </div>';
                      }
                      
                      $i++;
                    }
                  }
                }
              ?>
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
