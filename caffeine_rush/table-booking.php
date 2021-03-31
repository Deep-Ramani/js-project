<?php
  session_start();
  $_SESSION["currentPage"] = 12;
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
            <h3 class="page-header"><i class="icon_chat_alt"></i> table booking</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="adminpage.php">Home</a></li>
              <li><i class="icon_chat_alt"></i>table booking  </li>

            </div>
          </div>
          <section class="work py-5 my-lg-5">
            <div class="container">
             

              <?php  
                include("dbcnt.php");
                  $result = mysqli_query($con,"SELECT customer_name, phone_no, email,b_date, time_from, time_to, persons from table_booking"); 
                  if ($result == ""){
                    echo '<div class="errdiv">
                      <i class="icon_close_alt icon"></i>
                      <p class="icontxt"> &nbsp;THERE IS NO ANY BOOKING AVALABLE NOW...</p>
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
                                      <h2><b>~'.$row["customer_name"].'~</b></h2>
                                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Has been Booked table for '.$row["persons"].' persons for '.$row["time_from"].' to '.$row["time_to"].' for '.$row["b_date"].'. </p>
                                    </div>
                                  </div>
                                </div>';
                        } 
                        else{
                          echo '<div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 order1">
                                    <div class="notify-img"><img src="images/shop/3rd.jpeg" class="image-responsive"></div>
                                    <div class="notify-text text-left">
                                      <h2><b>~'.$row["customer_name"].'~</b></h2>
                                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Has been Booked table for '.$row["persons"].' persons for '.$row["time_from"].' to '.$row["time_to"].' for '.$row["b_date"].'. </p>
                                    </div>
                                  </div>
                                </div>';
                        }
                        $i++;
                      }
                    }
                  }
                ?>





              <!-- <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 order">
                  <div class="notify-img"><img src="images/shop/3rd.jpeg" class="image-responsive"></div>
                  <div class="notify-text text-left">
                    <h2><b>~Bhavesh Chhatrala~</b></h2>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Has been Requested for 2 persons for 10:00am to 12:00am for 1511512. </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 order1">
                  <div class="notify-img"><img src="images/shop/3rd.jpeg" class="image-responsive"></div>
                  <div class="notify-text text-left">
                    <h2><b>~Payal Kapadiya~</b></h2>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Has been Requested for 5 persons for 08:30am to 10:00am. </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 order">
                  <div class="notify-img"><img src="images/shop/3rd.jpeg" class="image-responsive"></div>
                  <div class="notify-text text-left">
                    <h2><b>~Krishna Parmar~</b></h2>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Has been Requested for 2 persons for 10:00am to 11:00am. </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 order1">
                  <div class="notify-img"><img src="images/shop/3rd.jpeg" class="image-responsive"></div>
                  <div class="notify-text text-left">
                    <h2><b>~Hemang chath~</b></h2>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Has been Requested for 4 persons for 04:00pm to 06:00pm. </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 order">
                  <div class="notify-img"><img src="images/shop/3rd.jpeg" class="image-responsive"></div>
                  <div class="notify-text text-left">
                    <h2><b>~Mayur Bharthera~</b></h2>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Has been Requested for 3 persons for 10:00am to 12:00am.</p>
                  </div>
                </div>
              </div> -->
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
