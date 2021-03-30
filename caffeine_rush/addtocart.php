<?php 

  session_start();
  include("dbcnt.php");

  if(isset($_SESSION['id'])){  
    
    if(isset($_POST['atc'])){
      $id = $_POST['hdnfld'];

      $uid = $_SESSION['id'];
      // echo $uid;exit; 
      
      $res = "select * from products where product_id ='$id'";
      $result = mysqli_query($con,$res);

      // echo $res;exit;

      if($result -> num_rows > 0){
      	// echo $result -> num_rows;exit;

        while($r1 = $result-> fetch_assoc()){
        	$pnm = $r1['product_name']; 
          $pid = $r1['product_id']; 
          $pcat = $r1['category']; 
          $pprice = $r1['price'];


          $result1 = mysqli_query($con, "select * from cart where pr_id ='$id'");
            if($result1 -> num_rows > 0){
              while($r2 = $result1-> fetch_assoc()){
                $quantity = $r2['quantity'];
                $total = $r2['subtotal'];
                $prc = $r2['price'];
                $quantity++;

                $total = $quantity * $prc;
                // echo $total;exit; 

                $qr = "UPDATE cart SET quantity = '".$quantity."', subtotal ='".$total."' WHERE pr_id='$id'";
                // echo $qr;exit;

                 $sql = mysqli_query($con,$qr);
              }
            }
            else{

  	    	    $qr = mysqli_query($con,"insert into cart (u_id,pr_id,pname,cat,quantity,price,subtotal) values('$uid','$pid','$pnm','$pcat','1','$pprice','$pprice')");
  	         	// echo "insert into cart (u_id,product_name,cat,quantity,price) values('$uid','$pnm','$pcat','1','$pprice')";exit;
            }   
      	}    
      }
      header("location:cart.php");
    }
  }
  else{
    header("location:loginerror.php");
  }
?>