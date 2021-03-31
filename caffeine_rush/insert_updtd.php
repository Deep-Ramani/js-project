<?php  
	include("dbcnt.php");
		// print_r($_POST);exit;
		$id = $_POST['prdct_id'];
		$pnm = $_POST['pr_name'];
		$pcat = $_POST['pr_category'];
		$price = $_POST['pr_price'];
	if(isset($_POST['insert_updtd'])){
		mysqli_query($con, "update products set product_name = '$pnm', category = '$pcat', price='$price' where product_id = '$id'");
		echo "<script>alert('Data Updated!!');</script>";
        echo "<script> window.location.href = 'updatecat.php';</script>";
	}
	else{
		echo "parth";
	}
?>