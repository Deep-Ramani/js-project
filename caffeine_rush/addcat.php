<?php 
	include("dbcnt.php");

	if (isset($_POST['addcat'])){
		$cid=$_POST['newcatid'];
		$cnm=$_POST['newcatnm'];



		$qr = "insert into category(category_id, category_name) values('$cid','$cnm')";
		mysqli_query($con,$qr);
		
		header("location:adminpage.php");
	}
?>