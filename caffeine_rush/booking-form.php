<?php
session_start();
$_SESSION["currentPage"] = 2;
// echo $_SESSION['fname']." ".$_SESSION['lname']." ".$_SESSION['username']." ". $_SESSION['phone'];exit;
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
                </div>
                    <div class="col-sm-8 col-sm-offset-2 text1">
                        <div class="description">
                            <p>
                                "Like everyone else who makes the mistake of getting older, I begin each day with<strong> Coffee</strong> and obituaries. Just sip it your way."
                            </p>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h2>Book Table</h2>
                                <p>Please fill the form to book table. All fields are mandatory.</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                         <form action="booking.php" method="POST" class="booking-form">
                            <div class="form-group">
                                <label for="form-fname">Your Name:</label>
                                <input type="text" name="form-fname" placeholder="Your Name" class="form-fname form-control" id="form-fname"  readonly value="<?php echo $_SESSION['fname']." ".$_SESSION['lname']?>" readonly>
                            </div>
                           <!--  <div class="form-group">
                                <label for="form-lname">Pho</label>
                                <input type="text" name="form-lname" placeholder="Last Name"class="form-lname form-control" id="form-lname" required>
                            </div> -->
                            <div class="form-group">
                                <label for="form-tele">Phone no:</label>
                                <input type="text" name="form-tele"  placeholder="Phone Number" class="form-tele form-control" id="form-tele" minlength="10" maxlength="10" required readonly value="<?php echo $_SESSION['phone'];?>">
                            </div>
                            <div class="form-group">
                                <label for="form-username">Email:</label>
                                <input type="email" name="form-username" placeholder="Email..." class="form-username form-control" id="form-username" required readonly value="<?php echo $_SESSION['username'];?>">
                            </div>
                            <div class="form-group">
                                <label for="form-date">Date:</label>
                                <input type="date" name="form-date" class="form-password form-control" min='<?php echo date("Y-m-d")?>' max="<?php echo date('Y-m-d', strtotime("+1 months"));?>"id="form-password" required>
                            </div>
                            <div class="form-group">
                                <label for="form-time">Time:</label>
                                <div>
                                <label class="col-sm-5 datetime-left"for="form-time">From:</label>
                                <label class="col-sm-5 datetime-right"for="form-time">To:</label>     
                                </div>
                                <div>
                                <input class="col-sm-5 datetime-left" type="time" name="time-from" placeholder="From" class="form-time form-control" id="form-from-time" required>
                                
                                <input class="col-sm-5 datetime-right" type="time" name="time-to" placeholder="To" class="form-time form-control" id="form-to-time" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-persons">How many persons?</label>
                                <input type="number" name="form-persn" class="form-password form-control" id="form-password" value="2" required>
                            </div>
                            <button type="submit" id="Signup" class="btn book-now" name="booknow">Book Now</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</div>
<?php
    include("footer.php");
?>
<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script>
    jQuery(document).ready(function() {
    
    /*
        Fullscreen background
    */
    $.backstretch("assets/img/backgrounds/19.jpg");    
});
</script>
<script src="admin-js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="admin-js/scroll-scripts.js"></script>
<!-- search-bar -->
<script src="js/main.js"></script>
<!-- //search-bar -->
</body>

</html>