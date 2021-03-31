<?php  
	include("dbcnt.php");
	$dlt_id = $_POST['prdct_id'];

	if(isset($_POST['delete_prdt'])){
		mysqli_query($con, "delete from products where product_id = '$dlt_id'");

		// echo '<script>alert("Data Has Been Deleted Successfully!!!");';	
		// echo "window.location.href = 'deletecat.php';</script>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>204 Error page</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/errorpage.css" />
	<link rel="shortcut icon" href="assets/ico/logo1.ico">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<div id="notfound">
		<div class="err-img"><img src="assets/img/backgrounds/404.png"></div>
		<div class="notfound">
			<div class="notfound-404">
				<h1>data</h1>
				<h2>has been deleted</h2>
			</div>
			<a onClick="redirect()">Go TO Previous Page</a>
		</div>
	</div>
<script type="text/javascript">
	var redirect = function(){
		window.location.href = 'pr_table.php';
	}
</script>

	<!-- <script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/jquery.backstretch.min.js"></script>
	<script>
	    jQuery(document).ready(function() {
	    
	    /*
	        Fullscreen background
	    */
	    $.backstretch("assets/img/backgrounds/17.1.jpg");
	   
	    
	    
	});
	</script> -->

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>





<?php 
	}
	else{
		echo "123";
	}
?>