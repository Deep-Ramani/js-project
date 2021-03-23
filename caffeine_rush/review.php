<?php
	session_start();
	$_SESSION["currentPage"] = 5;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Caffeine Rush | The Happy Hours</title>
	<link rel="shortcut icon" href="ico/logo1.ico">


  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/fontawesome-all.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/video.css">
  <link rel="stylesheet" type="text/css" href="css/popuo-box.css">

  <link rel="shortcut icon" href="ico/logo1.ico">

  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> 

</head>
<body>
<!-- Navigation -->
<?php
	include("header.php");
?>
<!-- inner page banner -->
<section class="inner_banner">
	<div class="dot1">
	</div>
</section>
<!-- Navigation -->
<section class="work py-5 my-lg-5">
	<div class="container">
	<h1 class="heading text-center text-uppercase mb-5"> reviews </h1>

	        <?php  
                include("dbcnt.php");
                $result = mysqli_query($con,"SELECT username,review from reviews"); 
                if ($result == ""){
                  echo '<div class="errdiv">
                      <i class="icon_close_alt icon"></i>
                      <p class="icontxt"> &nbsp;THERE IS NO ANY REVIEWS AVALABLE NOW...</p>
                    </div>';
                }
                else{

                  if($result -> num_rows > 0){
                    $i=1;
                    while($row = $result-> fetch_assoc()){
                      if (($i % 2) == 0 ){
                        echo '<div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 order">
                                  <div class="notify-img"><img src="images/shop/3rd.jpeg" class="image-responsive"></div>
                                  <div class="notify-text text-left">
                                    <h2><b>~'.$row["username"].'~</b></h2>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row["review"].'</p>
                                  </div>
                                </div>
                              </div>';
                      }
                      else{
                        echo '<div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 order1">
                                  <div class="notify-img"><img src="images/shop/3rd.jpeg" class="image-responsive"></div>
                                  <div class="notify-text text-left">
                                    <h2><b>~'.$row["username"].'~</b></h2>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row["review"].' </p>
                                  </div>
                                </div>
                              </div>';
                      }
                      
                      $i++;
                    }
                  }
                }
              ?>

	    </div>
    </div>
</section>


<!-- Newsletter -->
<section class="newsletter text-center py-5">
	<div class="container">
		<h3 class="heading text-center text-uppercase mb-5"> Give review </h3>
		
		<div class="subscribe_inner">
			<p class="mb-4">Thanks to visit <strong>Caffiene Rush</strong>. You will find it easy way to order the products on your own choice. If you like our service just put your best review! </p>
			<form action="addreview.php" method="post">
				<input type="textarea" placeholder="Enter your full name" required style="margin-bottom: 10px;" name="u_name">
				<input type="textarea" placeholder="Type in your way" required name="rvu">
				<input type="submit" class="mt-3" value=" Send " name="addreview">
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

<?php
	include("footer.php");
?>
<script src="js/jquery-2.2.3.min.js"></script>
<script src="admin-js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="admin-js/scroll-scripts.js"></script>

</body>
</html>