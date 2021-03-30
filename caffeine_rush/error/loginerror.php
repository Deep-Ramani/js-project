<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>! Error</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../css/errorpage.css" />
	<link rel="shortcut icon" href="../assets/ico/logo1.ico">


</head>

<body>

	<div id="notfound">
		<div class="err-img"><img src="../assets/img/backgrounds/404.png"></div>
		<div class="notfound">
			<div class="notfound-404">
				<h1>Ouch!</h1>
				<h2>You Have Not Login Yet. . ??</h2>
			</div>
			<a onClick="redirect()">Go TO Login Page Now..??</a>
		</div>
	</div>

<script type="text/javascript">
	var redirect = function(){
		window.location.href = "../login_form.php";
	}
</script>
</body>
</html>
