<?php
  session_start();
  $_SESSION["currentPage"] = 16;
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
  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="adminpage.php">Home</a></li>
            <li><i class="fa fa-table"></i>Table</li>
            <li><i class="fa fa-th-list"></i>All Users</li>
          </ol>
        </div>
      </div>
      <!-- page start-->

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Registerd User
            </header>

            <table class="table table-striped table-advance table-hover">
              <tbody>
                <tr>
                  <th><i class="icon_book_alt"></i> First Name</th>
                  <th><i class="icon_book_alt"></i> Last Name</th>
                  <th><i class="icon_mail_alt"></i> Email</th>
                  <th><i class="icon_lock-open_alt"></i> Password</th>
                  <th><i class="icon_mobile"></i> Phone No</th>
                </tr>
                <?php 

                  include("dbcnt.php");
                  $result = mysqli_query($con, "SELECT first_name,last_name,email,password,phone_no from users"); 
                  if($result -> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo "<tr><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td><td>".$row["phone_no"]."</td></tr>";
                    }
                  }
                ?>
                <!-- <tr>
                  <td>Payal</td>
                  <td>Kapadiya</td>
                  <td>payalkapadiya@gmail.com</td>
                  <td>payalkapadiya</td>
                  <td>511-175-7115</td>
                </tr>
                <tr>
                  <td>Bhavesh</td>
                  <td>Chhatrala</td>
                  <td>bhaveshchhatrala@gmail.com</td>
                  <td>bhaveshchhatrala</td>
                  <td>511-175-7115</td>
                </tr>
                <tr>
                  <td>Krishna</td>
                  <td>Parmar</td>
                  <td>krishnaparmar@gmail.com</td>
                  <td>krishnaparmar</td>
                  <td>970-147-5550</td>
                </tr>
                <tr>
                  <td>Hemang</td>
                  <td>Chath</td>
                  <td>hemangchath@gmail.com</td>
                  <td>hemangchath</td>
                  <td>934-118-6046</td>
                </tr>
                <tr>
                  <td>Mayur</td>
                  <td>Bharthera</td>
                  <td>mayurbharthera@gmail.com</td>
                  <td>mayurbharthera</td>
                  <td>338-081-8817</td>
                </tr>
                <tr>
                  <td>Krunal</td>
                  <td>Khatra</td>
                  <td>krunalkhatra@gmail.com</td>
                  <td>krunalkhatra</td>
                  <td>945-547-5302</td>
                </tr>
                <tr>
                  <td>Deep</td>
                  <td>Ramani</td>
                  <td>deepramani@gmail.com</td>
                  <td>deepramani</td>
                  <td>176-026-5992</td>
                </tr>
                <tr>
                  <td>Nishit</td>
                  <td>Amrutiya</td>
                  <td>nishitamrutiya@gmail.com</td>
                  <td>nishitamrutiya</td>
                  <td>724-639-4784</td>
                </tr>
                <tr>
                  <td>Biren</td>
                  <td>Chauhan</td>
                  <td>birenchauhan@gmail.com</td>
                  <td>birenchauhan</td>
                  <td>180-456-0056</td>
                </tr>
                <tr>
                  <td>Prince</td>
                  <td>Bhut</td>
                  <td>princebhut@gmail.com</td>
                  <td>princebhut</td>
                  <td>690-601-1922</td>
                </tr>
                <tr>
                  <td>Ravi</td>
                  <td>Raychura</td>
                  <td>raviraychura@gmail.com</td>
                  <td>raviraychura</td>
                  <td>922-810-0915</td>
                </tr> -->
                
              </tbody>
            </table>
          </section>
        </div>
      </div>
 <!-- page end-->
    </section>
  </section>
  <!--main content end-->

</section>
<!-- container section end -->
<!-- javascripts -->
<script src="admin-js/jquery.js"></script>
<script src="admin-js/bootstrap.min.js"></script>


<script src="admin-js/jquery.nicescroll.js" type="text/javascript"></script>
<!--custome script for all page-->
<script src="admin-js/scripts.js"></script>


</body>

</html>
