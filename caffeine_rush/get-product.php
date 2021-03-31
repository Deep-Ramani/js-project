<?php
  include("dbcnt.php");
if (is_ajax()) {
  test_function($con);
}
//Function to check if the request is an AJAX request
function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function test_function($con){
  $return = array();

  $sql = mysqli_query($con, "SELECT product_id,product_name,category,price from products where product_id = '".$_POST['prodId']."'");
  if(mysqli_num_rows($sql) === 1){
    $return = mysqli_fetch_array($sql);
  }
  echo json_encode($return);
}
?>