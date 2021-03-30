<?php 
        session_start();    
        include("dbcnt.php");

    if(isset($_POST['login'])){    
        // $con = mysqli_connect($dbHost,$dbUser,$dbPass,$dbDatabase,3306)or die("Error connecting to database.");
        // // $con = mysqli_connect('192.168.2.201',"root","root","cafe_shop", "8081", "80")or die("Error connecting to database.");

        // //Connect to the databasse 
        // mysqli_select_db($con, $dbDatabase)or die("Couldn't select the database."); 
        // //Selects the database 
         
    
        $usr =$_POST['form-username'];
        $pas = $_POST['form-password']; 
       
        // echo $usr;
        // echo $pas;
       $sql = mysqli_query($con, "select * from users where email ='$usr' and password='$pas' "); 
        if(mysqli_num_rows($sql) === 1){ 
            $row = mysqli_fetch_array($sql); 

            $_SESSION['id'] = $row['u_id']; 
            $_SESSION['username'] = $row['email']; 
            $_SESSION['phone'] = $row['phone_no']; 
            $_SESSION['pwd'] = $row['password']; 
            $_SESSION['fname'] = $row['first_name']; 
            $_SESSION['lname'] = $row['last_name']; 
            $_SESSION['logged'] = TRUE; 
            // echo $_SESSION['id'];exit;

            // echo $_SESSION['fname'];
            // echo $_SESSION['lname'];
            // echo "1st";

            if ($_SESSION['username']==="admin@gmail.com" && $_SESSION['pwd'] ==="admin") {
            
                echo "<script> window.location.href = 'adminpage.php';</script>";
                // header("location:user.php");
                exit;
            }
            else{
                echo "<script> window.location.href = 'user.php';</script>";
                // header("location:user.php");
                exit; 

            }
        }else{ 
            // echo "2nd";
            echo "<script> window.location.href = 'error/logdetailerror.php';</script>";
            // echo "<script> window.location.href = 'login_form.php';</script>";

            // header("location:login_form.php"); 
            exit; 
        } 
    }
    else{    //If the form button wasn't submitted go to the index page, or login page 
        // echo "3rd";
        echo "<script> window.location.href = 'forgot.php';</script>";

        header("location:login_form.php");     
        exit; 
    } 
?> 
