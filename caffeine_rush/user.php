<?php
session_start();
$_SESSION["currentPage"] = 6;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Caffeine Rush | The Happy Hours</title>
	<link rel="shortcut icon" href="ico/logo1.ico">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- meta -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

  <link href="lib/hover/hover.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/user.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

  <!-- Responsive css -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 


<!--     <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 -->

</head>
<body>

<!-- Navigation -->
<?php
	include("header.php");
?>
<!-- Navigation -->







  <!-- start section header -->
  <div id="header" class="home">  </div>
  <!-- End section header -->


  <!-- start section about us -->
  <div id="about" class="paddsection">
    <div class="container">
      <div class="row justify-content-between">

        <div class="col-lg-4 ">
          <div class="div-img-bg">
            <div class="about-img">
              <img src="user-img/me.jpg" class="img-responsive" alt="me">
            </div>
          </div>
        </div>

        <div class="col-lg-8">
         <div class="container">
            <div class="header-content">


              <h1><?php  echo $_SESSION['fname'];echo" "; echo $_SESSION['lname']; ?></span></h1>
              <p>designer, developer, photographer</p>
              <button type="button" class="btn btn-default" onclick="cpwd()">Change Password</button>
              <button type="button" class="btn btn-default" onclick="lgot()">Log Out</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- end section about us -->






  <!-- start section journal -->
  <div id="journal" class="text-left paddsection">

    <div class="container">
      <div class="section-title ">
        <h1>orderd items</h1>
      </div>
    </div>

    <div class="container">
      <div class="journal-block">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="journal-info">
              <div class="journal-txt">
                <h4><span class="glyphicon glyphicon-remove" style="color: red;"></span>No items ordered yet</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="section-title ">
        <h1>offer claimed</h1>
      </div>
    </div>

    <div class="container">
      <div class="journal-block">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="journal-info">
              <div class="journal-txt">
                <h4><span class="glyphicon glyphicon-remove" style="color: red;"></span>Not claimed any offers</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- End section journal -->




<script type="text/javascript">
  function cpwd(){
    window.location.href = "chngpwd.php";
  }
  function lgot(){
    window.location.href = "logout.php";
  }

</script>


<script src="assets/js/jquery-1.11.1.min.js"></script>

<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.backstretch.min.js"></script>

<script src="admin-js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="admin-js/scroll-scripts.js"></script>
<!-- Footer -->
<?php
	include("footer.php");
?>
<!-- Footer -->
</body>
</html>