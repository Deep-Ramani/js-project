<?php
	session_start();
	$_SESSION["currentPage"] = 2;
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
      	<div class="row">

	        <div class="col-md-3 col-sm-4 col-xs-12">
	          <div class="blog-sec">	
	            <div class="blog-img">
	                <img class="imgs" src="images1/Long Black.jpg" class="img-responsive">
	            </div>
	            <div class="blog-info">
	              <h2>Long Black</h2>              
	            </div>
	          </div>
	        </div>


	        <div class="col-md-3 col-sm-4 col-xs-12">
	          <div class="blog-sec">
	            <div class="blog-img">
	                <img class="imgs" src="images1/milkshakes/monster-candy.jpeg" class="img-responsive">
	            </div>
	            <div class="blog-info">
	              <h2>Monster Candy</h2>              
	            </div>
	          </div>
	        </div>


	        <div class="col-md-3 col-sm-4 col-xs-12">
	          <div class="blog-sec">
	            <div class="blog-img">
	                <img class="imgs" src="images1/cakes/blue.jpg" class="img-responsive">
	            </div>
	            <div class="blog-info">
	              <h2>Blue Bucks Cake</h2>
	            </div>
	          </div>
	        </div>


			<div class="col-md-3 col-sm-4 col-xs-12">
	          <div class="blog-sec">
	            <div class="blog-img">
	                <img class="imgs" src="images1/cakes/red.jpg" class="img-responsive">
	            </div>
	            <div class="blog-info">
	              <h2>Black Cherry Cake</h2>
	            </div>
	          </div>
	        </div>
	        
      	</div>
    </div>
</section>

<!--Food gallery-->
<section class="banner_bottom proj py-5">
		<div>
		<h1 class="heading text-center text-uppercase mb-5"> Products </h1>
			<div class="inner_sec">
				<ul class="portfolio-categ filter">
				
					<li class="coffee active">
						<a href="#" title="Category 1">Coffee</a>
					</li>
					<li class="tea">
						<a href="#" title="Category 2">Tea</a>
					</li>
					<li class="milkshake">
						<a href="#" title="Category 3">Milk shake</a>
					</li>
					<li class="cake">
						<a href="#" title="Category 4">Cakes</a>
					</li>
				</ul>


				<ul class="portfolio-area container-fluid">
					<?php
						include("products.php");
					?>
				</ul>
				<!--end portfolio-area -->

					<div class="clearfix"></div>
			</div>

		</div>
</section>
<!--//Food gallery-->

<!-- food slider -->
<section class="food-Slider py-5">
	<div class="container">
		<h2 class="heading text-center text-uppercase mb-5"> Special Items </h2>	
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="row">


						<div class="col-lg-3 col-sm-6 slidering">
							<div class="thumbnail">
								<img src="images1/cakes/fruit.jpg" alt="Image" style="height: 200px;">
							</div>
							<div>
								<h5 class="my-2 text-left text-uppercase">Fruit Almond</h5> 
								<h5 class="text-right"><span>&#8377; 325.00</span></h5>
							</div>
						</div>


						<div class="col-lg-3 col-sm-6 slidering">
							<div class="thumbnail">
								<img src="images1/MATE TEA.jpg" alt="Image" style="height: 200px;">
							</div>
							<div>
								<h5 class="my-2 text-left text-uppercase">Mate Tea</h5> 
								<h5 class="text-right"><span>&#8377; 65.00</span></h5>
							</div>	
						</div>


						<div class="col-lg-3 col-sm-6 slidering">
							<div class="thumbnail">
								<img src="images1/Mocha.jpg" alt="Image" style="height: 200px;">
							</div>
							<div>
								<h5 class="my-2 text-left text-uppercase">Mocha </h5>
								<h5 class="text-right"><span>&#8377; 120.00</span></h5>
							</div>
						</div>


						<div class="col-lg-3 col-sm-6 slidering">
							<div class="thumbnail">
								<img src="images1/milkshakes/special.jpeg" alt="Image" style="height: 200px;">
							</div>
							<div>
								<h5 class="my-2 text-left text-uppercase"> Sp.Caffeine Rush</h5>
								<h5 class="text-right"><span>&#8377; 320.00</span></h5>
							</div>
						</div>


					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-lg-3 col-sm-6 slidering">
							<div class="thumbnail">
								<img src="images1/Affogato.jpg" alt="Image" style="height: 200px;">
							</div>
							<div>
								<h5 class="my-2 text-left text-uppercase">Affogato</h5>
								<h5 class="text-right"><span>&#8377; 165.00</span></h5>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 slidering">
							<div class="thumbnail">
								<img src="images1/OOLONG.jpg" alt="Image" style="height: 200px;">
							</div>
							<div>
								<h5 class="my-2 text-left text-uppercase">Oolong Tea </h5>
								<h5 class="text-right"><span>&#8377; 50.00</span></h5>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 slidering">
							<div class="thumbnail">
								<img src="images1/cakes/red.jpg" alt="Image" style="height: 200px;">
							</div>
							<div>
								<h5 class="my-2 text-left text-uppercase">Black Cherry</h5>
								<h5 class="text-right"><span>&#8377; 600.00</span></h5>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 slidering">
							<div class="thumbnail">
								<img src="images1/milkshakes/monster-candy.jpeg" alt="Image" style="height: 200px;">
							</div>
							<div>
								<h5 class="my-2 text-left text-uppercase">monster candy</h5> 
								<h5 class="text-right"><span>&#8377; 270.00</span></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
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