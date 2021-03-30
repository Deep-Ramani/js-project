<?php
	session_start();
	$_SESSION["currentPage"] = 7;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Caffeine Rush | The Happy Hours</title>
	<link rel="shortcut icon" href="ico/logo1.ico">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="admin-css/style.css" rel="stylesheet">
   <link href="admin-css/font-awesome.min.css" rel="stylesheet" />
   <link href="admin-css/elegant-icons-style.css" rel="stylesheet" />
	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
    <style type="text/css">
      .top-nav {
          margin-top: 0px;
      }
    </style>

</head>
<body>

<!-- Navigation -->
<?php
	include("header.php");
?>
<!-- Navigation -->

<section class="inner_banner">
	<div class="dot1">
	</div>
</section>

<section id="blog" class="section-padding wow fadeInUp delay-05s">
    <div class="margin12">
    	<h2 class="heading text-center text-uppercase mb-5"> your cart </h2>
    </div>
</section>



<section class="cart">
    <section class="wrapper">
    	<div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Caffeine Rush Products
            </header>

            <table class="table table-striped table-advance table-hover">
              <tbody>
                <tr>
                  <th><i class="icon_id"></i> No.</th>
                  <th><i class="icon_book_alt"></i> Product Name</th>
                  <th><i class="icon_book_alt"></i> Product Category</th>
                  <th><i class="icon_book_alt"></i> Quantity</th>
                  <th><i class="icon_mail_alt"></i> Price</th>
                  <th><i class="icon_lock-open_alt"></i> Action</th>
                  <th><i class="icon_calulator"></i> Sub Total</th>
                  <!-- <th><i class="icon_mobile"></i> Phone No</th> -->
                </tr>

                <?php 

                  include("dbcnt.php");

                    $uid = $_SESSION['id']; 
                      $select = mysqli_query($con,"SELECT * from cart where u_id='$uid'"); 
                        $i = 1;
                      if($select -> num_rows > 0){
                        while($row = $select-> fetch_assoc()){
                          $total = $row['price'];
                          echo "<tr><td class='id_center'>".$i."</td><td>".$row['pname']."</td><td>".$row['cat']."</td><td><input type='text' size='2'  id='".$row["id"]."' name='txtbox'value='".$row['quantity']."'></td><td id=p".$row['id'].">".$row['price']."</td><td><a href='dlcrt.php?id=".$row["id"]."' class='a_fa a_fa_delete' id ='".$row["id"]."' ><i class='fa fa-trash-o' aria-hidden='true'></i></a></td><td><span id='a".$row["id"]."'>".$row["subtotal"]."</span></td></tr>";


                        $i++;
                        }
                        echo '

                          <script src="js/jquery-3.3.1.min.js"></script>
                            <script>
                            $(document).ready(function(){
                              $("input").keyup(function() {
                               var ab = "#a"+this.id;
                               var bc = "p"+this.id; 
                               var rs = document.getElementById(bc).innerHTML;

                                $(ab).text(this.value * rs + ".00");
                              });
                            });
                           </script>  

                        ';







                        echo'<tr>
                          <td colspan="7"><a href="buynow.php"><button class="btn btn-success" style="float:right; margin-right:35px">BUY NOW</button></a></td>
                          <!-- <th><i class="icon_mobile"></i> Phone No</th> -->
                        </tr>';
                      }




                ?>
                
              </tbody>
            </table>
          </section>
        </div>
      </div>
      <!-- page end-->
    </section>
  </section>








<script src="admin-js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="admin-js/scroll-scripts.js"></script>


    <!-- search-bar -->
    <script src="js/main.js"></script>
    <!-- //search-bar -->

<!-- Footer -->
</body>
</html>
