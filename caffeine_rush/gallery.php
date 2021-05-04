<?php
	session_start();
	$_SESSION["currentPage"] = 2;
	include_once("dbcnt.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Caffeine Rush | The Happy &#8377;</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta &#8377;et="utf-8">
	
	<!--// Meta tag Keywords -->
	
	<!-- css files -->
	<link rel="shortcut icon" href="ico/logo1.ico">
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
   <script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>

	  <style>
		  
	  .mybtn{
		font-size: 16px;
		padding: 12px 40px;
		color: #fff;
		border: none;
		outline: none;
		letter-spacing: 5px;
		background: #2196F3;
		box-sizing: border-box;
		cursor: pointer;
		margin: 10px;
	  }
	  .col-md-3{
		  margin-bottom:10px;
	  }
	  </style>

    <!-- css for hover -->

	<link rel="stylesheet" href="css/hover.css" />
    <!-- css for hover -->


	<!-- //css files -->

	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />

	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Forum|Handlee|Kaushan+Script" rel="stylesheet">
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


<!--Slider-->

<!-- o -->
<!--//Slider-->


			

			
			
	

<section id="blog" class="section-padding wow fadeInUp delay-05s">
    <div class="margin12">
    	<h2 class="heading text-center text-uppercase mb-5"> New Items </h2>
		<div class="container" style="display: flex;
  align-items: center;
  justify-content: center; margin-bottom:20px;">
			
			<button id="btn_coffee" class="mybtn" value="coffee" >Coffee</button>
			<button id="btn_tea" class="mybtn" value="tea" >Tea</button>
			<button id="btn_milkshake" class="mybtn" value="milkshake" >Milkshake</button>
			<button id="btn_cake" class="mybtn" value="cake" >Cake</button>
		</div>
      	<div class="row" id="product_content">	

		  <script src="js/jquery-1.7.2.js"></script>
				<script>
					$(document).ready(function() {
						$("product_content").empty();
						$("#product_content").load("coffee.php");
					});
					$('#btn_milkshake').click(function() {
						$("product_content").empty();
						$("#product_content").load("milkshake.php");
					});
					$('#btn_coffee').click(function() {
						$("product_content").empty();
						$("#product_content").load("coffee.php");
					});
					$('#btn_tea').click(function() {
						$("product_content").empty();
						$("#product_content").load("tea.php");
					});
					$('#btn_cake').click(function() {
						$("product_content").empty();
						$("#product_content").load("cake.php");
					});

				</script>

		</div>
	</div>
				
</section>

<!-- //food slider -->

<!-- Newsletter -->
<section class="newsletter text-center py-5">
	<div class="container">
		<h3 class="heading text-center text-uppercase mb-5"> Newsletter </h3>
		
		<div class="subscribe_inner">
			<p class="mb-4">Thanks to <strong>Caffiene Rush</strong>. You will find it easy way to order the products on your own choice. If you like our service just put your email for subscribe our website! </p>
			<form action="#" method="post">
				<input type="email" placeholder="Enter your email address" required="">
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

		





<!-- modal for drinks-->
<div class="container first">
	<div class="img col-sm-8 " >
	    <!-- Modal -->
	    <div class="modal fade style-7" id="myModal" role="dialog"  >
	        <div class="modal-dialog">

	        <!-- Modal content-->
	            <div class="modal-content">
	                <div class="modal-header">
	                    <h3 class="modal-title"> Menu Item</h3>
	                    <button type="button" class="close" data-dismiss="modal">&times;</button>
	                </div>
	                <div class="modal-body">
	                	<u><h2 id="modal-name" class="name"></h2></u><br>
	                    <img id="modal-img" src="#modal" class="img-rounded img-responsive modimg"/><br>
	                </div>
	                <div class="mod-footer"><br>
                      <h3 id="modal-price" class="mod-price"></h3><br>
                      <form class="formbg">
							<p class="mod-rate-text">Rate this item</p>
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
					</form><br>
                      <a href="error/bookerror.php"><button type="button" class="btn btn-success buynow">Book Table</button></a>
                      <a href="review.php"><button type="button" class="btn btn-info buynow">Reviews</button></a>
                  </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
<!-- modal for drinks-->



<!-- modal for cakes -->
<div class="container first">
	<div class="img col-sm-8">
	    <!-- Modal -->
	    <div class="modal fade style-7" id="myModal1" role="dialog">
	        <div class="modal-dialog">

	        <!-- Modal content-->
	            <div class="modal-content">
	                <div class="modal-header">
	                    <h3 class="modal-title"> Menu Item</h3>
	                    <button type="button" class="close" data-dismiss="modal">&times;</button>
	                </div>
	                <div class="modal-body">
	                	<u><h2 id="modal-name1" class="name"></h2></u><br>	
	                    <img id="modal-img1" src="#modal" class="img-rounded img-responsive modimg"/><br>
	                </div>
	                <div class="mod-footer"><br>
                      	<h3 id="modal-price1" class="mod-price"></h3><br><br>
						<form class="formbg" action="addtocart.php" method="post">
							<p class="mod-rate-text">Rate this item</p>
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
						<br>
							<input type="hidden" name="hdnfld" id="data-id" value="">
                      	
                      	<button type="submit" class="btn btn-success buynow" name="atc">Add to cart <span class="glyphicon glyphicon-cart"></span></button>
                      	
                      	<a href="review.php"><button type="button" class="btn btn-info buynow">Reviews</button></a>
                      </form>
                  </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
<!-- modal for cakes -->


















<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- <script type="text/javascript" src="js/bootstrap.js"></script>Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->	
	
	<!-- search-bar -->
	<script src="js/main.js"></script>
	<!-- //search-bar -->


	


	  <script src="js/jquery.min.js"></script>
	  <!-- <script src="js/sequence.jquery.js"></script> -->
	  <script src="js/jquery-hover-effect.js"></script>
	  <script type="text/javascript">
	 		setTimeout(() => {
				$(document).ready(function() {
					$('ul.da-thumbs > li').hoverdir();
				});
			}, 3000);
 		</script>
	  <!-- Template Custom Javascript File -->
	 

<!-- Banner Responsive slider -->
	<script src="js/responsiveslides.min.js"></script>
	<!-- // Banner Responsiveslides -->

	<script>
		// You can also use "$(window).load(function() {"
		$(document).ready(function() {
			// Slideshow 3
			$("#slider3").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,

				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
					$('ul.da-thumbs > li').hoverdir();
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

			
		});
	</script>
	<!-- // Banner Responsive slider -->


	
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
	<!-- here &#8377; scrolling icon -->
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
	<!-- <script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script> -->
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="admin-js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="admin-js/scroll-scripts.js"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

			







			<script type="text/javascript">
				$(document).on("click", ".image-zoom", function(){
    				var src= $(this).data('src');
    				$("#modal-img").attr('src',src);


    				var name=$(this).data('name');
    				$("#modal-name").text(name);

    				var price=$(this).data('price');
    				$("#modal-price").text(price);
				});
			</script>

			<script type="text/javascript">
				$(document).on("click", ".image-zoom", function(){
    				var src= $(this).data('src');
    				$("#modal-img1").attr('src',src);


    				var name=$(this).data('name');
    				$("#modal-name1").text(name);

    				var price=$(this).data('price');
    				$("#modal-price1").text(price);

    				var id=$(this).data('id');
    				$("#data-id").attr('value',id);
				});
			</script>
	
<!-- //js-scripts -->
</body>
</html>