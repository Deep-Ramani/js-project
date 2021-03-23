<?php  
	session_start();
	if (isset($_SESSION['id'])) {

		if ($_SESSION['username'] === "admin@gmail.com") {
			header('location:adminpage.php');
		}
		else{
			header('location:user.php');
		}
		// echo "asdfas";
	}
	else{
		// echo "123312";
		header('location: login_form.php');
	}
?>