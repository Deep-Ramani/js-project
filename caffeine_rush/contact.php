<?php
	session_start();
	$_SESSION["currentPage"] = 4;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Caffeine Rush | The Happy Hours</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<!-- <script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script> -->
	<!--// Meta tag Keywords -->
	
	<!-- css files -->
	<link rel="shortcut icon" href="ico/logo1.ico">
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
	<!-- //css files -->

	<!-- fonts -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Kirang+Haerang" rel="stylesheet"> -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet"> -->
	<!-- fonts -->
	
</head>

<body>

<!-- Navigation -->
<?php
	include("header.php");
?>
<!-- //Navigation -->

<!-- inner page banner -->
<section class="inner_banner">
	<div class="dot1">
	</div>
</section>
<!-- inner page banner -->

<!-- contact -->
<section class="contact py-5">
	<h1 class="heading text-center text-uppercase mb-5"> Get In Touch </h1>
	<div class="map">
		<div class="mapouter">
			<div class="gmap_canvas">
				<iframe width="1080" height="550" id="gmap_canvas" src="https://maps.google.com/maps?q=imperial%20palace%20rajkot&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
			</div>
		</div>
		<div class="main_grid_contact">
			<div class="form">
				<h2 class="text-capitalize mb-2">send us a message</h2>
				<form action="#" method="post">
					<div class="input-group">
						<input type="text" class="margin2" name="name" placeholder="first name" required>
						<input type="text" name="name" placeholder="last name" required>
					</div>
					<div class="input-group">
						<input type="email" class="margin2" name="email" placeholder="mail@example.com"  required>
						<input type="text" name="number" placeholder="phone number"  required>
					</div>
					<div class="input-group">
						<textarea rows="4" cols="50" placeholder="message"></textarea>
					</div>
					<div class="input-group1">
						<button class="btn btn-success">Send <span class="glyphicon glyphicon-send"></span></button>
					</div>
				</form>
			</div>
			<div class="w3ls-contact">
				<h3 class="text-capitalize mb-3">contact Information</h3>
				<p class="">Contact us for order your products. To know about more offers contact us on following contact number or send mails.</p>
				<address>	  
					<p class="my-3"><span class="fas fa-map-marker-alt"></span> Caffeine Rush,<span> Yagnik Road, Rjt 360002, Gujrat.</span> </p>
					<p class="my-3"><span class="fas fa-mobile-alt"></span> +91 962-420-9757 <br> &thinsp; &thinsp;&thinsp;&thinsp;&thinsp;&thinsp;+91 968-728-7468 </p>
					<p class="my-3"><span class="fas fa-envelope-open"></span> <a href="mailto:mail@example.com">caffein.rush@gmail.com</a><br> </p>
				</address>
				<div class="w3_agileits_social_media mt-3 text-center">
					<ul>
						<li><a href="#" class="wthree_facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
						<li><a href="#" class="wthree_dribbble"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#" class="wthree_behance"><i class="fab fa-google" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //contact -->

<!-- Newsletter -->
<section class="newsletter text-center py-5">
	<div class="container">
		<h3 class="heading text-center text-uppercase mb-5"> thank you </h3>
		
		<div class="subscribe_inner">
			<p class="mb-4">Hope you enjoy our services. Thanks for visiting our site. Enjoy and Keep ordering. </p>
			<form action="#" method="post">
				<input type="email" placeholder="Enter your email address" required>
				<input type="submit" class="mt-3" value="Subscribe">
			</form>
			<!-- <div class="social mt-5">
				<h4>Follow us</h4>
				<ul class="d-flex mt-3 justify-content-center">
					<li class="mx-2"><a href="#"><span class="fab fa-facebook"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-instagram"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-google"></span></a></li>
				</ul>
			</div> -->
		</div>
		
	</div>
</section>
<!-- //Newsletter -->


<!-- footer -->
<?php
	include("footer.php");
?>
<!-- footer -->






		
<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->	
	
	<!-- search-bar -->
	<script src="js/main.js"></script>
	<!-- //search-bar -->
	
	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	
	<script src="admin-js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="admin-js/scroll-scripts.js"></script>
</body>
</html>