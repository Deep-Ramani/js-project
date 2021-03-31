<?php 	
	session_start();
	include("dbcnt.php");
	if (isset($_POST['fp'])){
		$mn = $_POST['contact'];
		$fem = $_POST['fmail'];

		$sql = mysqli_query ($con, "SELECT phone_no, email FROM users WHERE email ='$fem' "); 
		// $row = mysql_fetch_assoc($sql);

		$row = mysqli_fetch_array($sql);

		$_SESSION['mobile'] = $row['phone_no'];
		$_SESSION['mail'] = $row['email'];

		if ($_SESSION['mail'] === $fem){
			if($_SESSION['mobile'] === $mn){
				header("location: resetpwd.php");
			}
			else{
				echo "<script> alert('Enter correct Mobile number');</script>";
				echo "<script> window.location.href = 'forgot.php';</script>";
				
				// header("location: forgot.php");
			}
		}
		else{
			echo "<script> alert('No any account exist by this Email..');</script>";
			echo "<script> window.location.href = 'forgot.php';</script>";

			// header("location: forgot.php");
		}

	}	
	else{
		header("location: forgot.php");
	}	
?>
