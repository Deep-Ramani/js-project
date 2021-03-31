<?php
  session_start();
  $_SESSION["currentPage"] = 15;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">


  <title>Caffeine Rush ~Admin~</title>

  <!-- Bootstrap CSS -->
  <link href="css/style1.css" rel="stylesheet">
      <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
  <link href="admin-css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="admin-css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="admin-css/elegant-icons-style.css" rel="stylesheet" />
  <link href="admin-css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="admin-css/style.css" rel="stylesheet">
  <link href="admin-css/style-responsive.css" rel="stylesheet" />
  <link rel="shortcut icon" href="ico/logo1.ico">
  <!-- <link href="css/style.css" rel="stylesheet"> -->

  <script src="js/jquery-3.3.1.min.js"></script>



</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <?php
      include("admin-header.php");
    ?>
  <!--header end-->

  <!--sidebar start-->
 <?php 
    include("admin-aside.php");
  ?>
  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="adminpage.php">Home</a></li>
            <li><i class="fa fa-table"></i>Table</li>
            <li><i class="fa fa-th-list"></i>All Products</li>
          </ol>
        </div>
      </div>
      <!-- page start-->

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Caffeine Rush Products
            </header>

            <table class="table table-striped table-advance table-hover">
              <tbody>
                <tr>
                  <th><i class="icon_id"></i> Product Id</th>
                  <th><i class="icon_book_alt"></i> Product Name</th>
                  <th><i class="icon_book_alt"></i> Product Category</th>
                  <th><i class="icon_mail_alt"></i> Price</th>
                  <th><i class="icon_lock-open_alt"></i> Action</th>
                  <!-- <th><i class="icon_mobile"></i> Phone No</th> -->
                </tr>
                <?php 

                  include("dbcnt.php");
                        $result = mysqli_query($con,"SELECT * from products"); 
                  if($result -> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      $_SESSION['cat'] = $row["category"];
                      echo "<tr><td class='id_center'>".$row["product_id"]."</td><td>".$row["product_name"]."</td><td>".$row["category"]."</td><td>".$row["price"]."</td><td><div><a href='#'data-id='".$row["product_id"]."  'data-toggle='modal' data-target='#myModal' class='a_fa a_fa_edit' id=".$row["product_id"]."><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a><a href='#'data-id='".$row["product_id"]."  'data-toggle='modal' data-target='#myModal1' class='a_fa a_fa_delete' id=".$row["product_id"]."><i class='fa fa-trash-o' aria-hidden='true'></i></a></div></td></tr>";
                    }
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
  <!--main content end-->

</section>
<!-- container section end -->
<!-- javascripts -->

            <script type="text/javascript">
              $(document).ready(function(){
                $("a[data-target='#myModal']").click(function(){
                  var prodId = $(this).data("id");
                  console.log(">>>prodId>>>", prodId);
                  var data = {
                      "prodId": prodId
                    };
                    data = $(this).serialize() + "&" + $.param(data);
                    $.ajax({
                      type: "POST",
                      dataType: "json",
                      data: data,
                      url: "get-product.php", //Relative or absolute path to response.php file
                      success: function(res) {
                        $(".modal #pid").val(res.product_id);
                        $(".modal #pnam").val(res.product_name);
                        $(".modal #cat").val(res.category);
                        $(".modal #pprc").val(res.price);
                        console.log(">>>RES", res)
                      }
                    });
                  //   return false;
                  // });
                })
              });
            </script>
<div class="container first">
  <div class="img col-sm-8">

      <div class="modal fade style-7" id="myModal" role="dialog">
          <div class="modal-dialog modal-dialog-centered">
            

              <div class="modal-content">
                  <div class="modal-header">
                      <h3 class="modal-title">Update Item</h3>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>  
                 <form class="form-horizontal" action="admin-edit.php" method="post" id="editfrm">
                  <div class="modal-body">

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="title">Product Id</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="pid" value="" name="prdct_id" readonly>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="content">Product Name</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="pnam" value="" name="pr_name">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-lg-2">Category</label>
                    <div class="col-lg-10">
                      <select class="form-control" value="" id="cat" name="pr_category">
                        <option value="">- Choose Cateogry -</option>
                        <option value="coffee" 
                          <?php if ($_SESSION['cat'] == "coffee") {  ?> selected <?php } ?> >coffee</option>
                        <option value="tea"
                          <?php if ($_SESSION['cat'] == "tea") { ?> selected <?php } ?>  >tea</option>
                        <option value="milkshake"
                          <?php if ($_SESSION['cat'] == "milkshake") { ?> selected <?php } ?> 
                        >milkshake</option>
                        <option value="cake"
                          <?php if ($_SESSION['cat'] == "cake") { ?> selected <?php } ?> 
                        >cake</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="tags">price</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="pprc" value="" name="pr_price">
                    </div>
                  </div>


                  <div class="form-group">

                  
                  </div>
                  </div>
                  <div class="mod-footer" style="width: 100%;"><br>
                      <br>
                      <button type="submit"  form="editfrm" class="btn btn-success buynow fa fa-pencil-square-o" name="insert_updtd"> Edit</button> 
                      <button type="button" class="btn btn-info buynow" data-dismiss="modal">Cancle</button>
                  </div>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>




            <script type="text/javascript">
              $(document).ready(function(){
                $("a[data-target='#myModal1']").click(function(){
                  var prodId = $(this).data("id");
                  console.log(">>>prodId>>>", prodId);
                  var data = {
                      "prodId": prodId
                    };
                    data = $(this).serialize() + "&" + $.param(data);
                    $.ajax({
                      type: "POST",
                      dataType: "json",
                      data: data,
                      url: "get-product.php", //Relative or absolute path to response.php file
                      success: function(res) {
                        $(".modal #pr_id").html(res.product_id);
                        $(".modal #hdnfld").val(res.product_id);
                        $(".modal #pr_nm").html(res.product_name);
                        $(".modal #pr_cat").html(res.category);
                        $(".modal #pr_prc").html(res.price);
                        console.log(">>>RES", res)
                      }
                    });
                  //   return false;
                  // });
                })
              });
            </script>

<div class="container first">
  <div class="img col-sm-8">
      <!-- Modal -->
      <div class="modal fade style-7" id="myModal1" role="dialog">
          <div class="modal-dialog modal-dialog-centered">

          <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header">
                      <h3 class="modal-title" style="color: #c82333 !important;">Are you sure you want to Delete data?</h3>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <form action="admin-delete.php" method="post">
                    <input type="hidden" name="prdct_id" id="hdnfld" value="">
                  <div class="modal-body">
                    <table class="table table-striped table-advance table-hover">
                      <tbody>
                        <tr>
                          <th>Product Id</th>
                          <th>Product Name</th>
                          <th>Product Category</th>
                          <th>Price</th>
                          <!-- <th><i class="icon_mobile"></i> Phone No</th> -->
                        </tr>
                        <tr>
                            <td id="pr_id"></td>
                            <td id="pr_nm"></td>
                            <td id="pr_cat"></td>
                            <td id="pr_prc"></td>
                        </tr>
                      </tbody> 
                    </table>
                  </div>
                  <div class="mod-footer" style="width: 100%;"><br>
                      <br>
                      <button type="submit" id="edibtn" class="btn btn-danger buynow fa fa-trash-o" name="delete_prdt"> Delete</button>
                    </form> 
                      <button type="button" class="btn btn-info buynow" data-dismiss="modal">Cancle</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>


<script src="admin-js/jquery.js"></script>
<script src="admin-js/bootstrap.min.js"></script>


<script src="admin-js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="admin-js/scroll-scripts.js"></script>
<!--custome script for all page-->
<!-- <script src="admin-js/scripts.js"></script> -->
<!-- <script>

  $("#editbtn").click(function(){
    $("#editfrm").submit(function(){
      alert("123321");
    });
  });
</script> -->

</body>

</html>
