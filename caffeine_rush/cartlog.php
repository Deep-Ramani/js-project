<?php  
	session_start();
	if (isset($_SESSION['id'])) {
		header('location:cart.php');
		// echo "asdfas";
	}
	else{

		header('location: error/loginerror.php');
	}
?>