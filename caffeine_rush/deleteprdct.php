<?php  
include("dbcnt.php");
$d_id = $_POST['d_id'];
if(isset($_POST['d_btn'])){
	$sql = mysqli_query($con, "SELECT * FROM products WHERE product_id='$d_id' "); 
	if(mysqli_num_rows($sql) === 1){ 
		$row = mysqli_fetch_array($sql); 

		$_SESSION['id'] = $row['product_id']; 
		$_SESSION['name'] = $row['product_name']; 
		$_SESSION['cat'] = $row['category']; 
		$_SESSION['price'] = $row['price']; 

	
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

	<link href="admin-css/bodyootstrap.min.css" rel="stylesheet">
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
	<section id="container" class="container">



		<!--main content start-->

		<!--/.row-->



		<!-- Today status end -->



		<div class="row">
			<div class="col-lg-12"><h1 class="h1prfrm">DELETE PRODUCT</h1></div>
			<div class="col-lg-2"></div>
			<div class="col-lg-8 col-md-12">
				<!-- product form -->
				<div class="panel panel-default form">
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
								<!-- ------------------------------------------------------- -->
								<form class="form-horizontal" action="delete_prdt.php" method="post">
									<!-- Title -->
									<div class="form-group">
										<label class="control-label col-lg-2" for="title">Product Id</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="title" value="<?php echo $_SESSION['id']; ?>" name="prdct_id" readonly>
										</div>
									</div>
									<!-- Content -->
									<div class="form-group">
										<label class="control-label col-lg-2" for="content">Product Name</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="content" value="<?php echo $_SESSION['name']; ?>" name="pr_name" readonly>
										</div>
									</div>
									<!-- Cateogry -->

									<div class="form-group">
										<label class="control-label col-lg-2">Category</label>
										<div class="col-lg-10">
											<select class="form-control" value="<?php echo $_SESSION['cat'];?>" name="pr_category" disabled>
												<option value="">- Choose Cateogry -</option>
												<option value="coffee" 
													<?php if ($_SESSION['cat'] == "coffee") {  ?> selected <?php } ?> >coffee</option>
												<option value="tea"
													<?php if ($_SESSION['cat'] == "tea") { ?> selected <?php } ?>  >tea</option>
												<option value="milkshake"
													<?php if ($_SESSION['cat'] == "milkshake") { ?> selected <?php } ?> 
												>milkshake</option>
												<option value="cake"
													<?php if ($_SESSION['cat'] == "cake") { ?> selected <?php } ?> 
												>cake</option>
											</select>
										</div>
									</div>
									<!-- Tags -->
									<div class="form-group">
										<label class="control-label col-lg-2" for="tags">price</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="tags" value="<?php echo $_SESSION['price']; ?>" name="pr_price" readonly>
										</div>
									</div>

									<!-- Buttons -->
									<div class="form-group">
										<!-- Buttons -->
										<div class="col-lg-offset-2 col-lg-9">
											<button type="submit" class="btn btn-primary" name="delete_prdt">Delete</button>
											<button type="reset" class="btn btn-default">Reset</button>
										</div>
									</div>
								</form>
								<!-- ------------------------------------------- -->
							</div>


						</div>
						<div class="widget-foot">
							<!-- Footer goes here -->
						</div>
					</div>

				</div>
				<!-- end product form -->
			</div>
			<div class="col-lg-2"></div>
		</div>
	</section>






	<!--/col-->

	<!--/col-->


	<script src="admin-js/jquery.js"></script>
	<script src="admin-js/bootstrap.min.js"></script>
	<script src="admin-js/jquery.nicescroll.js" type="text/javascript"></script>
	<script src="admin-js/scripts.js"></script>
	<script src="assets/js/jquery.backstretch.min.js"></script>
	<script>
	    jQuery(document).ready(function() {
	    
	    /*
	        Fullscreen background
	    */
	    $.backstretch("assets/img/backgrounds/15.jpg");
	   
	    
	    
	});
	</script>

</body>

</html>
<?php 
		}
		else{
			echo "<script>window.location.href = 'errorpage.php'</script>";
		}
	}else{	
		echo "123";
	}
?>