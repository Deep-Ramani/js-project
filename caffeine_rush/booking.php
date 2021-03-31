<?php  
	include("dbcnt.php");
	session_start();
		# code...
	if (isset($_POST["booknow"])){	
		$cnm = $_POST['form-fname'];	
		$pn = $_POST['form-tele'];	
		$em = $_POST['form-username'];	
		$dt = $_POST['form-date'];	
		$tf = $_POST['time-from'];	
		$tt = $_POST['time-to'];	
		$pr = $_POST['form-persn'];	



		$h_from = $_POST['time-from'];
		$h_f = date("G",strtotime($h_from));


		$h_to = $_POST['time-to'];
		$h_t = date("G",strtotime($h_to));;



		$m_from = $_POST['time-from'];
		$m_f = date("i",strtotime($m_from));;

		$m_to = $_POST['time-to'];
		$m_t = date("i",strtotime($m_to));;


		$tf = $h_f.":".$m_f;
		$tt = $h_t.":".$m_t;
		// echo $tf." ". $tt;exit;



		if($h_f == 00 || $h_t == 00){
			echo "<script>alert('1 >> enter correct time');</script>";
			echo "<script>javascript:history.go(-1);</script>";
		}
		else if($h_f > $h_t){
			echo "<script>alert('2 >> enter correct time');</script>";
			echo "<script>javascript:history.go(-1);</script>";
		}
		else if($h_f == $h_t){	
		 	if($m_f > $m_t){
				echo "<script>alert('3 >> enter correct time');</script>";
				echo "<script>javascript:history.go(-1);</script>";
			}
			else if ($m_f > $m_t){
				echo "<script>alert('4 >> enter correct time');</script>";
				echo "<script>javascript:history.go(-1);</script>";
			}
			else{
				echo "<script>alert('5 >> enter correct time');</script>";
				echo "<script>javascript:history.go(-1);</script>";
			}
		}
		else if($h_f < 8 || $h_t > 20){
			echo "<script>alert('5 >> be sure your booking time is in between 8:00 to 20:00');</script>";
			echo "<script>javascript:history.go(-1);</script>";
		}
		else if($pr <= 0 || $pr >15){
			echo "<script>alert('5 >> booking can be done for maximum 15 persons');</script>";
			echo "<script>javascript:history.go(-1);</script>";
			
		}
		else{
			$qr = 'insert into table_booking(customer_name, phone_no, email, b_date, time_from, time_to, persons) values("'.$cnm.'","'.$pn.'","'.$em.'","'.$dt.'","'.$tf.'","'.$tt.'","'.$pr.'")';
	
			$sql = mysqli_query($con,$qr)or die('Error, '.mysqli_error($con).'');
			if($sql == 1){
				echo '<script>alert(" Your table has been booked, thank you for book the table!!");</script>';
				echo "<script>window.location.href = 'gallery.php'</script>";
			}
			else{
				echo " Booking is not done. Please enter correct value...!! ";
				echo "<script>javascript:history.go(-1);</script>";
			}
		}
	}

?>




