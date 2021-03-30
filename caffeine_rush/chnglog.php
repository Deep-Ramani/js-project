<?php  
	session_start();
	if (isset($_SESSION['id'])) {
		header('location:chngpwd.php');
		// echo "asdfas";
	}
	else{

		header('location: error/loginerror.php');
	}
?>