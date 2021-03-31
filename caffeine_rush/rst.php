<?php  
	include("dbcnt.php");
	$mail = $_POST['mail'];
	$rpwd = $_POST['rpwd'];
	$rcpwd = $_POST['rcpwd'];

	if(isset($_POST['login'])){
		if ($rpwd == $rcpwd) {
			$qry = "update users set password='$rpwd', c_password='$rcpwd' WHERE email='$mail'";
			// echo $qry;exit;
			mysqli_query($con,$qry);

			echo "<script>alert('Password changed..!!');</script>" ;
			echo "<script>window.location.href = 'login_form.php';</script>";

		}
		else{
			echo "<script>alert('Password Did Not Matched..!!');</script>" ;
			echo "<script>window.location.href = 'resetpwd.php';</script>";

		}
	}

?>