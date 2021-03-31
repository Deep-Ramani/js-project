<?php
    session_start();
    $_SESSION["currentPage"] = 6;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <title>Caffeine Rush | The Happy Hours</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/mp.css">
    <link rel="stylesheet" href="css/mp2.min.css">
    <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
    <link rel="stylesheet" href="css/style1.css" type="text/css" media="all" /> <!-- Style-CSS --> 
    <link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">   
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/logo1.ico">

    
    









</head>

<body> 
    <?php 
        include("header.php");
    ?>
    <!-- Top content -->
    <div class="top-content">
    	
        <div>
            <div class="container">
                <div class="row col-sm-8 col-sm-offset-2 text">
                    <img src="assets\img\backgrounds\logo1.png" class="col-sm-3 clogo">
                    <h1 class="col-sm-9 brand-text">Caffeine Rush</h1>
                   <!--  <div class="col-sm-8 col-sm-offset-2 text1">
                        <div class="description">
                        	<p>
                               "Like everyone else who makes the mistake of getting older, I begin each day with<strong> Coffee</strong> and obituaries. Just sip it your way."
                           </p>
                       </div>
                   </div> -->
               </div>
               <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                   <div class="form-top">
                      <div class="form-top-left">
                         <h3>Forgot Password ...</h3>
                         <p>Enter your mobile number & email for varification of your ID:</p>
                     </div>
                     <div class="form-top-right">
                         <i class="fa fa-lock"></i>
                     </div>
                 </div>
                 <div class="form-bottom">
                  <form role="form" action="f_pwd.php" method="post" class="login-form">
                    
                    <div class="form-group">
                        <!-- <label class="sr-only" for="form-username">Username</label> -->
                        <input type="email" name="fmail" placeholder="Email..." class="form-username form-control" id="fmail" required>
                    </div>

                    <div class="form-group">
                        <!-- <label class="sr-only" for="form-username">Username</label> -->
                        <input type="text" name="contact" placeholder="Mobile_No ..." class="form-username form-control" id="fmn" maxlength="10" minlength="10" required>
                    </div>
                
                    <button type="submit" class="btn" name="fp">Send</button>


                </form>
                
            </div>
        </div>
    </div>
   
</div>
</div>

</div>

<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script>
	jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    $.backstretch("assets/img/backgrounds/14.jpg");
   
    
    
});
</script>

<script src="admin-js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="admin-js/scroll-scripts.js"></script>
<!-- search-bar -->
<script src="js/main.js"></script>

   

</body>

</html>