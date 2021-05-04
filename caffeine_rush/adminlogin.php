<?php session_start();
include_once("dbcnt.php");
	if(isset($_POST["loginbtn"])){
		$uid = $_POST["username"];
		$password = $_POST["password"];
		
		
		$qr = "select * from admin where email ='". $uid."' or username ='". $uid."' and password = '".$password."'";




		$result = mysqli_query($con,$qr);
		
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION["user_id"] = $row["id"];

			header("location:adminpage.php");
		}else{

			header("location:adminlogin.php");
		}
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  
  <title>Admin Login</title>
</head>
<body>
  

  <!-- header -->
<header id="main-header" class="bg-primary py-2 text-white">
  <div class="container"> 
    <div class="row">
      <div class="col-md-6">
        <h1> <i class="fa fa-user"></i> Caffiene Rush</h1>
      </div>
    </div>  
  </div>
</header>


    <!-- section -->

<section id="sections" class="py-4 mb-4 bg-faded">
  <div class="container">
    <div class="row">
      
        
    </div>
  </div>  
</section>


  <!-- POSTS -->

  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="card">
            <div class="card-header">
            <h4>Admin Login</h4>
            </div>
            <div class="card-block">
            <form action="" method="post">
				<div class="form-group">
				<label for="email">Email/Username</label>
				<input type="text" name="username" class="form-control" required>
				</div>
				<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<input type="submit" name="loginbtn" value="Login" class="btn btn-primary btn-block" />
				</div>
            </form>
            </div>
            </div>
          </div>
      </div>
    </div>
  </section>


  <footer id="main-footer" class="text-center text-white bg-inverse mt-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col">
			<p class="lead">Copyright 2019  &copy; Caffeine Rush</p>          
        </div>
      </div>
    </div>    
  </footer>  

</body>
</html>
