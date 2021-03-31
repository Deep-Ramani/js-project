<?php 
	if (isset($_POST['update'])){
		header("location:updatecat.php");
	}
	elseif (isset($_POST['delete'])) {
		header("location:deletecat.php");
	}
	elseif (isset($_POST['add'])) {
		header("location:adminpage.php");
	}

 ?>