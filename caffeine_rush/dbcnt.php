<?php 	
 	// $dbHost = "mysql";        //Location Of Database usually its localhost 
 	$dbHost = "localhost";        //Location Of Database usually its localhost 
    $dbUser = "root";            //Database User Name 
    // $dbPass = "root";            //Database Password 
    $dbPass = "";            //Database Password 
    $dbDatabase = "cafe_shop";

	// $con = mysqli_connect($dbHost,$dbUser,$dbPass,$dbDatabase,3306)or die("Error connecting to database.");
	$con = mysqli_connect($dbHost,$dbUser,$dbPass,$dbDatabase)or die("Error connecting to database.");
	$db= mysqli_select_db($con, "cafe_shop");
?>