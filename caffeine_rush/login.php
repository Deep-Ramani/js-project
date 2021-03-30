<?php
	session_start();
	$con = mysqli_connect("localhost","root","","cafe_shop");
	$db= mysqli_select_db($con, "cafe_shop");
	if (isset($_POST['login']))
	$em=$_POST['form-username'];
	$pw=$_POST['form-password'];

	$q_email = "select email from users where email ='$em' ";
	$a=mysqli_query($con,$q_email);
	print_r ($a);
	/*$q_pwd = "select password from users where password = '$pw'";
	mysqli_query($con,$q_pwd);



	if ($em=="admin@gmail.com" && $pw=="admin") {
			header("location:adminpage.php");
	}
	elseif ($em != "" || $pw != ""){
		if($em == $q_email && $pw == $q_pwd){
			header("location:user.php");
		}
		else{
			header("location:login_form.php");	
		}
	}
	else{
		header("location:login_form.php");	
	}
	
	// $_SESSION["uname"] = $em;*/


?>