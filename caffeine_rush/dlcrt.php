<?php  
	include("dbcnt.php");
	$id = $_GET['id'];
	$qr = "delete from cart where id = '".$id."'";
	// echo $qr;

	$sql = mysqli_query($con,$qr);

	header("location:cart.php");
?>