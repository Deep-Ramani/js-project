<?php  
	session_start();
	include("dbcnt.php");
	if(isset($_POST['chng'])){
		$id = $_SESSION['id'];
		
		$qr = "select password from users where u_id='$id'";
		$result = mysqli_query($con,$qr);


		$row = $result->fetch_assoc();
	    $old = $row['password'];
		
		$opwd = $_POST['opwd'];
		$npwd = $_POST['npwd'];
		$cnpwd = $_POST['cnpwd'];

		if($old == $opwd){
			if($old == $npwd){
				echo "<script>alert('New Password Must Not Be Your Old Password..!!');</script>" ;
				echo "<script>window.location.href = 'chngpwd.php';</script>";

			}
			else if ($npwd == $cnpwd) {
				// echo "reset now"; //update here the password
				$qry = "update users set password='$npwd', c_password='$cnpwd' WHERE u_id='$id'";
				// echo $qry;exit;
				mysqli_query($con,$qry);

				echo "<script>alert('Password Reset Successfully..!!');</script>" ;
				echo "<script>window.location.href = 'user.php';</script>";
			}
			else{
				echo "<script>alert('New Password and Confirm Password did not match..!!');</script>" ;
				echo "<script>window.location.href = 'chngpwd.php';</script>";

			}
		}
		else{
			echo '<script>alert("Old Password you entered is wrong..!!");</script>';
			echo "<script>window.location.href = 'chngpwd.php';</script>";
		}

	}
?>
