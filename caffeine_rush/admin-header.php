 <?php
    if(!isset($_SESSION["user_id"])){
      header("location:adminlogin.php");
    }
 ?>
 
 <header class="header dark-bg">
  <div class="toggle-nav">
    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
  </div>

  <!--logo start-->
  <a href="adminpage.php" class="logo">Caffeine Rush <span class="lite">Admin</span></a>
  <!--logo end-->

  

  <div class="top-nav notification-row">
    <!-- notificatoin dropdown start-->
    <ul class="nav pull-right top-menu">


      <li id="mail_notificatoin_bar" class="">
        <a class="" href="adminpage.php">
          <i class="icon_house_l"></i>
        </a>
      </li>














    <!-- user login dropdown start-->
    <li class="dropdown">
      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <span class="profile-ava">
          <img alt="" src="#">
        </span>
        <span class="username">Admin</span>
        <b class="caret"></b>
      </a>
      <ul class="dropdown-menu extended logout">
        <div class="log-arrow-up"></div>
        <li>
          <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
        </li>
        
      </ul>
    </li>
    <!-- user login dropdown end -->
  </ul>
  <!-- notificatoin dropdown end-->
</div>
</header>