<?php
	session_start();
	$_SESSION["currentPage"] = 3;
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
	<!-- //css files -->

	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />


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

<!-- How we Work -->
<section class="work py-5 my-lg-5">
	<div class="container">
	<h1 class="heading text-center text-uppercase mb-5"> How We Work </h1>
		<div class="row">
			<div class="col-lg-3 col-sm-6 grid1">
				<img src="images/2.png" alt="" class="img-fluid mb-3">
				<h3 class="my-2">Book Table</h3>
				<p class="">We provides the table booking service. You can book your table in advance by online or else by call.</p>
				<p></p>
			</div>
			<div class="col-lg-3 col-sm-6 grid1">
				<img src="images/1.png" alt="" class="img-fluid mb-3">
				<h3 class="my-2">Pickup Delivery</h3>
				<p class="">Yes, we also provides pickup delivery. You can order online or else by call and can pickup from our shop.</p>
				<p></p>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-sm-5 grid1">
				<img src="images/3.png" alt="" class="img-fluid mb-3">
				<h3 class="my-2">Home Delivery</h3>
				<p class="">We provides free home delivery only on cake's order. You can order your favourite cake online or else by call. </p>
				<p></p>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-sm-5 grid2">
				<img src="images/shop/2nd.jpg" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<!-- //How we Work -->



<!-- Testimonials -->
<section class="w3-agile-test-monials py-5">
	<div class="container client-review-head">
		<h3 class="heading text-center text-uppercase mb-5"> Best Reviews </h3>
		<div class="sreen-gallery-cursual">
			<div id="owl-demo" class="owl-carousel">
				 <div class="item-owl">
					<div class="test-review">
					   <p> <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>It's a nice cafe in rajkot which comes as a surprise and once you try I bet you, one can't resist and you'll come often to try more.<span><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
					  
					  <h5>Tejas Chauhan</h5>
					  <p class="date">2 days ago</p>
					</div>
				</div>
				 <div class="item-owl">
					<div class="test-review">
					 <p> <span><i class="fa fa-quote-left" aria-hidden="true"></i></span> I’m a cafe stalker and this one was a jackpot! Its such a cute cafe, perfect for a breakfast and coffee. Love their spread. It falls a little on the costlier side but totally worth it.<span><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
						
						 <h5>Bhargav Bhagiya</h5>
						  <p class="date">4 days ago</p>
					</div>
				</div>
				 <div class="item-owl">
					<div class="test-review">
						 <p> <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>The caffeine rush has really very preety😍 delicious variety of cake and drinks😋 I ordered cold coffee😚 that was really very amazing🤗 I love the place😋 one has to visit...very worthful.<span><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
						
						 <h5>Dhaval Hariyani</h5>
						  <p class="date">1 day ago</p>
					</div>
				</div>
				<div class="item-owl">
					<div class="test-review">
						 <p> <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>Perfect coffee and delicious milkshake. Plus super friendly service. We were just passing through. Damn I would love their coffee everyday!<span><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
						
						 <h5>Ajay Devgan</h5>
						  <p class="date">19 days ago</p>
					</div>
				</div>
				<div class="item-owl">
					<div class="test-review">
						 <p> <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>Strange menu, but the best staff.. great venue... very original decor... would suggest better options and a more organised menu... do not get rid of staff..<span><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
						
						 <h5>Virat Kohli</h5>
						  <p class="date">14 days ago</p>
					</div>
				</div>
			</div>
		<!--//screen-gallery-->
		</div>
	</div>
</section>
<!-- //Testimonials -->


<section class="work py-5 my-lg-5">
	<div class="container">
	<h1 class="heading text-center text-uppercase mb-5"> Our branches </h1>
		<div class="row">
			<div class="col-lg-6 col-sm-6 grid1">
				<img src="images/shop/3rd.jpeg" alt="" class="shopimg">
			</div>
			<div class="col-lg-6 col-sm-6 grid1">
				<!-- <img src="images/shop/slogo.jpg" alt="	" class="img-fluid mb-3"> -->
				<h3 class="my-2"><u>Caffeine Rush, Rajkot.</u></h3>
				<h2> Ratings</h2>
				<p class="stars1"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>☆</span></p>
				<p>4.0</p>
				<p class=""><span class="fas fa-map-marker-alt"> </span>Opp. Imperial Palace, Doctor Yagnik Road, Jagnath Plot, Rajkot, Gujarat 360001.</p>
				<p class="my-3"><span class="fas fa-mobile-alt"></span> +91 962-420-9757 <br> &thinsp; &thinsp;&thinsp;+91 968-728-7468 </p>
				<p></p>
				<p class="my-3"><span class="fas fa-envelope-open"></span> <a href="mailto:mail@example.com">caffein.rush@gmail.com</a><br> </p>
			</div>
		</div>
		<div class="row shop-mrgn">
			<div class="col-lg-6 col-sm-6 grid1">
				<!-- <img src="images/shop/slogo.jpg" alt="	" class="img-fluid mb-3"> -->
				<h3 class="my-2"><u>Caffeine Rush, Ahemdabad.</u></h3>
				<h2> Ratings</h2>
				<p class="stars1"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>☆</span></p>
				<p>4.0</p>
				<p class=""><span class="fas fa-map-marker-alt"> </span> Opp. AlphaOne Mall, Near Vastrapur Lake, Vastrapur, Ahmedabad, Gujarat 380054.</p>
				<p class="my-3"><span class="fas fa-mobile-alt"></span> +91 999-888-1234 <br> &thinsp; &thinsp;&thinsp;+91 999-777-1234 </p>
				<p></p>
				<p class="my-3"><span class="fas fa-envelope-open"></span> <a href="mailto:mail@example.com">caffein.rush@gmail.com</a><br> </p>
			</div>
			<div class="col-lg-6 col-sm-6 grid1">
				<img src="images/shop/4rth.jpeg" alt="" class="shopimg">
			</div>
		</div>
		<div class="row shop-mrgn">
			<div class="col-lg-6 col-sm-6 grid1">
				<img src="images/shop/1st.jpg" alt="" class="shopimg">
			</div>
			<div class="col-lg-6 col-sm-6 grid1">
				<!-- <img src="images/shop/slogo.jpg" alt="	" class="img-fluid mb-3"> -->
				<h3 class="my-2"><u>Caffeine Rush, Surat.</u></h3>
				<h2> Ratings</h2>
				<p class="stars1"><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>☆</span></p>
				<p>4.0</p>
				<p class=""><span class="fas fa-map-marker-alt"> </span> Opp. Dumbal Transport Godown, Canal Road, Parvat Patiya, Magob, Surat, Gujarat 395010.</p>
				<p class="my-3"><span class="fas fa-mobile-alt"></span> +91 999-666-1234 <br> &thinsp; &thinsp;&thinsp;+91 999-555-1234 </p>
				<p></p>
				<p class="my-3"><span class="fas fa-envelope-open"></span> <a href="mailto:mail@example.com">caffein.rush@gmail.com</a><br> </p>
			</div>
		</div>
	</div>
</section>





<section class="w3-agile-test-monials py-5">
	<div class="container client-review-head">
		<h3 class="heading text-center text-uppercase mb-5"> Rate Us </h3>
		<!-- <div class="rating">
		    <span><input type="radio" name="rating" id="str5" value="5"><label for="str5">&#9733;</label></span>
		    <span><input type="radio" name="rating" id="str4" value="4"><label for="str4">&#9733;</label></span>
		    <span><input type="radio" name="rating" id="str3" value="3"><label for="str3">&#9733;</label></span>
		    <span><input type="radio" name="rating" id="str2" value="2"><label for="str2">&#9733;</label></span>
		    <span><input type="radio" name="rating" id="str1" value="1"><label for="str1">&#9733;</label></span>
		</div> -->
		<form>
			<div class="stars">
				<input type="radio" name="star" class="star-1" id="star-1" />
				<label class="star-1" for="star-1">1</label>
				<input type="radio" name="star" class="star-2" id="star-2" />
				<label class="star-2" for="star-2">2</label>
				<input type="radio" name="star" class="star-3" id="star-3" />
				<label class="star-3" for="star-3">3</label>
				<input type="radio" name="star" class="star-4" id="star-4" />
				<label class="star-4" for="star-4">4</label>
				<input type="radio" name="star" class="star-5" id="star-5" />
				<label class="star-5" for="star-5">5</label>
				<span></span>
			</div>
		</form>
		<div class="rate-text-div"><p class="rate-text">Rate your favourite items on <a href="gallery.php">&nbsp;Menu</a>.</p></div>
	</div>
</section>




<!-- Newsletter -->
<section class="newsletter text-center py-5">
	<div class="container">
		<h3 class="heading text-center text-uppercase mb-5"> Newsletter </h3>
		
		<div class="subscribe_inner">
		<p class="mb-4">Thanks to  visit <strong>Caffiene Rush</strong>. You will find it easy way to order the products on your own choice. If you like our service just put your email for subscribe our website!</p>
		<form action="#" method="post">
			<input type="email" placeholder="Enter your email address" required="">
			<input type="submit" class="mt-3" value="Subscribe">
		</form>
		<!-- <div class="social mt-4">
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






<!-- </footer> --> 
<?php
	include("footer.php");
?>

<!-- footer -->
		






























<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->	
	
	<!-- for-Testimonials -->
	<!-- required-js-files-->
	<link href="css/owl.carousel.css" rel="stylesheet">
		<script src="js/owl.carousel.js"></script>
			<script>
		$(document).ready(function() {
		  $("#owl-demo").owlCarousel({
			items : 1,
			lazyLoad : true,
			autoPlay : true,
			navigation : false,
			navigationText :  false,
			pagination : true,
		  });
		});
		</script>
	<!--//required-js-files-->
	<!-- //for-Testimonials -->
	
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
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<script src="admin-js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="admin-js/scroll-scripts.js"></script>

</body>
</html>