<?php
	session_start();
	include("dbcnt.php");

	if (isset($_POST['signup'])){
		$fn=$_POST['form-fname'];
		$ln=$_POST['form-lname'];
		$em=$_POST['form-username'];
		$pw=$_POST['form-password'];
		$cpw=$_POST['form-cpassword'];
		$ph=$_POST['form-tele'];
		
		if($pw !== $cpw){

			alert("password didn't match!!");
			header("location:signup_form.php");
		}
		elseif ($fn != "" || $ln != "" || $ph != "" || $em != "" || $pw != "" || $cpw != ""){
			$qr = "insert into users(first_name, last_name, email, password, c_password, phone_no) values('$fn','$ln','$em','$pw','$cpw','$ph')";
			

			mysqli_query($con,$qr);

			// $_SESSION["uname"] = $em;
			header("location:index.php");
		}
		else{
			header("location:signup_form.php");	
		}
	}

	mysqli_close($con);
?>		