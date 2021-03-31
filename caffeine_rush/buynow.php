<?php  
	session_start();
	include("dbcnt.php");
	$id = $_SESSION['id'];
	$qr = "delete from cart where u_id = '".$id."'";
	$sql = mysqli_query($con,$qr);
	echo "<script> alert('Order has been placed..!!!');
			window.location.href='cart.php';
		</script>";	
?>
