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
	<link rel="stylesheet" href="css/mp.css">
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/video.css">
	<link rel="stylesheet" type="text/css" href="css/popuo-box.css">

	<!-- //css files -->
	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
	
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	
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
<!--Slider-->
<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides" id="slider3">
			<li class="img-responsive">
				<div class="slider-img1">
					<div class="dot">
						<div class="container">
							<div class="slider_banner_info_w3ls text-center">
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="img-responsive">
				<div class="slider-img2 ">
					<div class="dot">
						<div class="container">
							<div class="slider_banner_info_w3ls text-center">
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="img-responsive">
				<div class="slider-img3 ">
					<div class="dot">
						<div class="container">
							<div class="slider_banner_info_w3ls text-center">
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="img-responsive">
				<div class="slider-img4 ">
					<div class="dot">
						<div class="container">
							<div class="slider_banner_info_w3ls text-center">
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="clearfix"></div>
</div>
<!--//Slider-->








































































































<!-- js-scripts -->	



<script src="js/jquery-2.2.3.min.js"></script>

<!-- Banner Responsive slider -->
<script src="js/responsiveslides.min.js"></script>
	<!-- // Banner Responsiveslides -->
	<!--pop-up-box -->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			// $(document).on("click", "#small-dialog1",function(){
			// 	// var src= $("#add-video").data('src');
			// 	$("#add-video").attr('src', 'videos/video.mp4');
			// });

			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				autoPlay: false,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in',
				callbacks: {
        			open: function() {
							$("#add-video").attr('src','videos/video.mp4');
					},
			        close: function() {
			        	// debugger;
			            // Reset video on close:
			            setTimeout(function() {
			            	$("#add-video").attr('src',' ');
			            },100);

			        }
			    }
			});
		});
	</script>
	<!-- //pop-up-box -->


	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 3
			$("#slider3").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- // Banner Responsive slider -->





	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	



	<!-- search-bar -->
	<script src="js/main.js"></script>
	<!-- //search-bar -->
	




	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<!-- <script type="text/javascript" src="js/easing.js"></script> -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
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
	<!-- start-smoth-scrolling -->


	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<!-- <script src="js/jquery.quicksand.js" type="text/javascript"></script> -->
	<script src="js/script.js" type="text/javascript"></script>
	<script src="admin-js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="admin-js/scroll-scripts.js"></script>
	<!-- <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> -->
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->










	
	

	<!-- smooth-scrolling-of-move-up -->



<!-- //js-scripts -->

</body>
</html>