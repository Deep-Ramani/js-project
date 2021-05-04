<?php
session_start();
$_SESSION["currentPage"] = 10;
include("dbcnt.php");

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

        


         

         



        <!-- Today status end -->



        <div class="row">

          <div class="col-lg-9 col-md-12">
            <!-- product form -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Add Products</div>
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
                    <!-- -----------------------------------------------                      -->
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                      <!-- Title -->
                     
                      <!-- Content -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Product Name</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="content" name="p_name" required>
                        </div>
                      </div>
                      <!-- Cateogry -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Category</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="p_cat" required>
                            <option value="">- Choose Cateogry -</option>
                            <option value="coffee">coffee</option>
                            <option value="tea">tea</option>
                            <option value="milkshake">milkshake</option>
                            <option value="cake">cake</option>
                          </select>
                        </div>
                      </div>
                      <!-- Tags -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">price</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="tags" name="p_price" required>
                        </div>
                      </div>

                      <!-- Image upload -->
                      <div class="form-group">
                      <label class="control-label col-lg-2" for="tags">Choose Image</label>
                      <div class="col-lg-10">
                          <input type="file" class="form-control" id="tags" name="p_img" required>
                        </div>
                      </div>

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <input type="submit" class="btn btn-primary" name="add_pr" value="Submit">
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                      </div>
                    </form>
                    <?php 

                    if (isset($_POST['add_pr'])){
                      $pnm=$_POST['p_name'];
                      $pcat=$_POST['p_cat'];
                      $pprc=$_POST['p_price'];
                      $pimg = "";

                      if(isset($_FILES['p_img'])){

                        if($_FILES['p_img']['error'] == "0"){
                          $target="product_imgs/".basename($_FILES['p_img']['name']);
                          if(move_uploaded_file($_FILES['p_img']['tmp_name'],$target)) {
                            $fname = "product_imgs/".basename($_FILES['p_img']['name']);
                            $pimg = $_FILES['p_img']['name'];	
                          }
                        }
                        else{
                          $msg = "Image Not Uploaded!";
                          $pimg = "";	
                    
                        }

                      }

                     

                      $qr = "insert into products (product_name, category, price, image) values('$pnm','$pcat','$pprc','$pimg')";
                      mysqli_query($con,$qr);
                          
                          //header("location:adminpage.php");
                    }
                    ?>
                    <!-- ------------------------------------------- -->                  
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
                <div class="pull-left">Add Category</div>
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
                    <!-- --------------------------------------------------------- -->                    
                    <form class="form-horizontal" action="addcat.php" method="post">
                      <!-- Title -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Category Id</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="title" required name="newcatid">
                        </div>
                      </div>
                      <!-- Content -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Category Name</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="content" required name="newcatnm">
                        </div>
                      </div>
                      <!-- Tags -->

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary" name="addcat">Add</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                      </div>
                    </form>
                    <!-- -------------------------------------- -->
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
                <button type="submit" class="btn btn-danger button" name="delete">Delete Products</button>
              </form>
            </div>
          </div>
          
          
        </div>

        <?php
$cakecount = "";
$teacount = "";
$milkshakecount = "";
$coffeecount = "";
$ucount = "";

	
	$m = mysqli_query($con,"select count(*) from products where category = 'milkshake'");
	$c = mysqli_query($con,"select count(*) from products where category = 'coffee'");
	$t = mysqli_query($con,"select count(*) from products where category = 'tea'");
  $ck = mysqli_query($con,"select count(*) from products where category = 'cake'");
  $uc = mysqli_query($con,"select count(*) from users");

  if(mysqli_num_rows($uc) > 0){
		$mr = mysqli_fetch_array($uc);
		$ucount = $mr[0];
	}              
	if(mysqli_num_rows($m) > 0){
		$mr = mysqli_fetch_array($m);
		$milkshakecount = $mr[0];
	}
	if(mysqli_num_rows($c) > 0){
		$mr = mysqli_fetch_array($c);
		$coffeecount = $mr[0];
	}
	if(mysqli_num_rows($t) > 0){
		$mr = mysqli_fetch_array($t);
		$teacount = $mr[0];
	}
  if(mysqli_num_rows($ck) > 0){
		$mr = mysqli_fetch_array($ck);
		$cakecount = $mr[0];
	}
	


?>

        <div class="row">
          <a href="basic_table.php"><div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

            <div class="info-box green-bg">
            <div class="title" style="font-size: 18px;">Registered User</div>
              <i class="fa fa-cubes"></i>
              <div class="count"><?=$ucount?></div>
            </div>
            </a>
            
            <div class="info-box green-bg">
            <div class="title" style="font-size: 18px;">Cakes</div>
              <i class="fa fa-cubes"></i>
              <div class="count"><?=$cakecount?></div>
            </div>
            

            <div class="info-box green-bg">
            <div class="title" style="font-size: 18px;">Milkshakes</div>
              <i class="fa fa-cubes"></i> 
              <div class="count"><?=$milkshakecount?></div>
            </div>

            <div class="info-box green-bg">
            <div class="title" style="font-size: 18px;">Coffee</div>
              <i class="fa fa-cubes"></i>
              <div class="count"><?=$coffeecount?></div>
            </div>

            <div class="info-box green-bg">
            <div class="title" style="font-size: 18px;">Tea</div>
              <i class="fa fa-cubes"></i> 
              <div class="count"><?=$teacount?></div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/col-->

      </div>
    </section>
  </section>
</section>

<script src="admin-js/jquery.js"></script>
<script src="admin-js/bootstrap.min.js"></script>
<script src="admin-js/jquery.nicescroll.js" type="text/javascript"></script>
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
