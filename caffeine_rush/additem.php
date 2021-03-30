<?php 
	include("dbcnt.php");

	if (isset($_POST['add'])){
		$pnm=$_POST['p_name'];
		$pcat=$_POST['p_cat'];
		$pprc=$_POST['p_price'];



		$qr = "insert into products(product_name, category, price) values('$pnm','$pcat','$pprc')";
		mysqli_query($con,$qr);
		
		header("location:adminpage.php");
	}
?>