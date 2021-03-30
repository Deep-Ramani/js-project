<?php  
	include("dbcnt.php");
	if(isset($_POST['addreview'])){
		$nm = $_POST['u_name'];
		$rv = $_POST['rvu'];
		// echo $nm;
		// echo $rv;
		$qr = 'insert into reviews(username, review) values("'.$nm.'","'.$rv.'")';
		// echo $qr;exit;
		$sql = mysqli_query($con,$qr);
		if($sql == 1){
			echo '<script>alert(" Thank you for giving a review. Have a nice day!!!");</script>';
			echo "<script>window.location.href = 'index.php'</script>";
		}
		else{
			echo " data not stored ";
		}
	}
?>