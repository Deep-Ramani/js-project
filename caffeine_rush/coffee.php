<?php
include_once("dbcnt.php");
$sql = "SELECT * from products where category = 'coffee'";
	$result = mysqli_query($con, $sql);
	$rows = mysqli_num_rows($result);
	
	if($rows){
		
		while($post = mysqli_fetch_assoc($result)) {
		?>

	        <div class="col-md-3 col-sm-4 col-xs-12">
	          <div class="blog-sec">	
	            <div class="blog-img">

	                <img class="imgs" src="product_imgs/<?=$post['image']?>" class="img-responsive">
	            </div>
	            <div class="blog-info">
	              <h2>
				  <span style="float: left;">
				  <?=$post["product_name"]?></span><span style="float: right;">
				  <?=$post["price"]?></span>
				  </h2>              
	            </div>
	          </div>
	        </div>

	<?php
		}
	}
					
?>