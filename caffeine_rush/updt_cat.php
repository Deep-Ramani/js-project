<?php  
	include("dbcnt.php");
	$id = $_POST['cat_id'];
	if(isset($_POST['updtcgr'])){
		$sql = mysqli_query($con, "SELECT * FROM category WHERE category_id='$id' "); 
		if(mysqli_num_rows($sql) === 1){ 
			$row = mysqli_fetch_array($sql); 

			$_SESSION['id'] = $row['category_id']; 
			$_SESSION['name'] = $row['category_name']; 

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
			<div class="col-lg-12"><h1 class="h1prfrm">UPDATE CATEGORY</h1></div>
			<div class="col-lg-2"></div>
			<div class="col-lg-8 col-md-12">
				<!-- product form -->
				<div class="panel panel-default form">
					<div class="panel-heading">
						<div class="pull-left">update Products</div>
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
								<form class="form-horizontal" action="insert_upcat.php" method="post">
									<!-- Title -->
									<div class="form-group">
										<label class="control-label col-lg-2" for="title">Category Id</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="title" value="<?php echo $_SESSION['id']; ?>" name="cr_id" readonly>
										</div>
									</div>
									<!-- Content -->
									<div class="form-group">
										<label class="control-label col-lg-2" for="content">Category Name</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="content" value="<?php echo $_SESSION['name']; ?>" name="cr_name">
										</div>
									</div>

									<!-- Buttons -->
									<div class="form-group">
										<!-- Buttons -->
										<div class="col-lg-offset-2 col-lg-9">
											<button type="submit" class="btn btn-primary" name="insert_updtd">Update</button>
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
	    $.backstretch("assets/img/backgrounds/16.jpg");
	   
	    
	    
	});
	</script>

</body>

</html>
<?php 
		}
		else{

?>

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1 style="text-align: center;">Oops! data is not found...</h1>
	</body>
	</html>
<?php  
		}
	}
	else{	
		echo "123";
	}
?>