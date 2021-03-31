<?php  
	include("dbcnt.php");
		// print_r($_POST);exit;
		$c_id = $_POST['cr_id'];
		$cname = $_POST['cr_name'];
	if(isset($_POST['insert_updtd'])){
		mysqli_query($con, "update category set category_name = '$cname' where category_id = '$c_id'");
		echo "<script>alert('Data Updated!!');</script>";
        echo "<script> window.location.href = 'updatecat.php';</script>";
	}
	else{
		echo "parth";
	}
?>