<?php 
  session_start();
 ?><!DOCTYPE html>
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

  <link href="admin-css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="ico/logo1.ico">


</head>

<body>
  <!-- container section start -->
  <section id="container" class="">

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
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="adminpage.php">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <a href="basic_table.php"><div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count">51</div>
              <div class="title">Register User</div>
            </div>
            <!--/.info-box-->
          </div></a>
          <!--/.col-->


          <a href="admin-order.php"><div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-truck"></i>
              <div class="count">12</div>
              <div class="title">Cake Order</div>
            </div>
            <!--/.info-box-->
          </div></a>
          <!--/.col-->

          <a href="table-booking.php"><div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-book"></i>
              <div class="count">3</div>
              <div class="title">Book Table</div>
            </div>
            <!--/.info-box-->
          </div></a>
          <!--/.col-->

          <a href="reviews.php"><div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count">2577</div>
              <div class="title">Reviews</div>
            </div>
            <!--/.info-box-->
          </div></a>
          <!--/.col-->

        </div>
        <!--/.row-->



        <!-- Today status end -->



        <div class="row">

          <div class="col-lg-9 col-md-12">
            <!-- product form -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Delete Products</div>
                <div class="widget-icons pull-right">
                  <span class="wminimize" onclick="display()"><i class="fa fa-chevron-up" id="rotate"></i></span>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>  
              <div class="panel-body" id="product-panel">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" action="deleteprdct.php" method="post">
                      <!-- Title -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Product Id</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="title" name="d_id">
                        </div>
                      </div>
                      <!-- Content -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content" >Product Name</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="content" disabled>
                        </div>
                      </div>
                      <!-- Cateogry -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Category</label>
                        <div class="col-lg-10">
                          <select class="form-control" disabled>
                            <option value="">- Choose Cateogry -</option>
                            <option value="1">coffee</option>
                            <option value="2">tea</option>
                            <option value="3">milkshake</option>
                            <option value="4">cake</option>
                          </select>
                        </div>
                      </div>
                      <!-- Tags -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="tags" >price</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="tags" disabled>
                        </div>
                      </div>

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary" name="d_btn">Delete</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>

            </div>
            <!-- end product form -->
            <!-- special items -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Delete Category</div>
                <div class="widget-icons pull-right">
                  <span class="wminimize" onclick="display1()"><i class="fa fa-chevron-up" id="rotate-1"></i></span>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>  
              <div class="panel-body" id="cat-panel">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" action="deletecategory.php" method="post">
                      <!-- Title -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Category Id</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="title" name="dlt_cat">
                        </div>
                      </div> 
                      <!-- Content -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content" >Category Name</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="content" disabled>
                        </div>
                      </div>
                      <!-- Tags -->

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary" name="dlt_cat_btn">Delete</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>

            </div>
            <!-- special items -->

            <div class = "button-upd">
              <div>
                <form action="updlt.php" method="post">
                  <button type="submit" class="btn btn-primary button" name="update">Update Products</button>
                  <button type="submit" class="btn btn-danger button" name="add">Add Products</button>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-3">

            <div class="social-box google-plus">
              <i class="fa fa-google-plus"></i>
              <ul>
                <li>
                  <strong>869</strong>
                  <span>followers</span>
                </li>
                <li>
                  <strong>256</strong>
                  <span>circles</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->
          <div class="col-md-3">

            <div class="social-box facebook">
              <i class="fa fa-facebook"></i>
              <ul>
                <li>
                  <strong>1.5k</strong>
                  <span>friends</span>
                </li>
                <li>
                  <strong>45</strong>
                  <span>feeds</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->
          </div>

          <!--/col-->
          <div class="col-md-3">

            <div class="social-box instagram">
              <i class="fa fa-instagram"></i>
              <ul>
                <li>
                  <strong>1.3k</strong>
                  <span>followers</span>
                </li>
                <li>
                  <strong>2562</strong>
                  <span>Hash Tags</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->

        </div>
      </section>
    </section>
  </section>
  

  <script src="admin-js/jquery.js"></script>
  <script src="admin-js/bootstrap.min.js"></script>
  <script src="admin-js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="admin-js/scroll-scripts.js"></script>
  <script src="admin-js/scripts.js"></script>
  <script type="text/javascript">
    function display(e){
      var panel = document.getElementById('product-panel');
      var spin = document.getElementById('rotate');
      if(panel.style.display == "block" || panel.style.display == ""){
        panel.style.display = "none";
        spin.style.transform = "rotate(180deg)";
      } else{
        panel.style.display = "block";
        spin.style.transform = "rotate(0deg)";
      }
    }
    function display1(e){
      var panel = document.getElementById('cat-panel');
      var spin = document.getElementById('rotate-1');
      if(panel.style.display == "block" || panel.style.display == ""){
        panel.style.display = "none";
        spin.style.transform = "rotate(180deg)";
      } else{
        panel.style.display = "block";
        spin.style.transform = "rotate(0deg)";
      }
    }
  </script>
</body>

</html>
