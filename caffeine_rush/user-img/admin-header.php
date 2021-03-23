 <header class="header dark-bg">
  <div class="toggle-nav">
    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
  </div>

  <!--logo start-->
  <a href="adminpage.php" class="logo">Caffeine Rush <span class="lite">Admin</span></a>
  <!--logo end-->

  <div class="nav search-row" id="top_menu">
    <!--  search form start -->
    <ul class="nav top-menu">
      <li>
        <form class="navbar-form">
          <input class="form-control" placeholder="Search" type="text">
        </form>
      </li>
    </ul>
    <!--  search form end -->
  </div>

  <div class="top-nav notification-row">
    <!-- notificatoin dropdown start-->
    <ul class="nav pull-right top-menu">

      <!-- inbox notificatoin start-->
      <li id="mail_notificatoin_bar" class="dropdown">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
          <i class="icon-envelope-l"></i>
          <span class="badge bg-important">5</span>
        </a>
        <ul class="dropdown-menu extended inbox">
          <div class="notify-arrow notify-arrow-blue"></div>
          <li>
            <p class="blue">You have 5 new booking request</p>
          </li>
          <li>
            <a href="#">
              <span class="photo"><img alt="avatar" src="./admin-img/avatar-mini.jpg"></span>
              <span class="subject">
                <span class="from">Payal Kapadiya</span>
                <span class="time">1 min</span>
              </span>
              <span class="message">
                For 5 persons.......
              </span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="photo"><img alt="avatar" src="./admin-img/avatar-mini2.jpg"></span>
              <span class="subject">
                <span class="from">Bhavesh Chhatrala</span>
                <span class="time">5 mins</span>
              </span>
              <span class="message">
                For 2 persons!!
              </span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="photo"><img alt="avatar" src="./admin-img/avatar-mini3.jpg"></span>
              <span class="subject">
                <span class="from">Krishna Parmar</span>
                <span class="time">2 hrs</span>
              </span>
              <span class="message">
                For 2 persons!!!
              </span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="photo"><img alt="avatar" src="./admin-img/avatar-mini4.jpg"></span>
              <span class="subject">
                <span class="from">Hemang Chath</span>
                <span class="time">1 hrs</span>
              </span>
              <span class="message">
                For 4 persons....
              </span>
            </a>
          </li>
          <li>
            <a href="table-booking.php">See all request</a>
          </li>
        </ul>
    </li>
    <!-- inbox notificatoin end -->








    <!-- alert notification start-->
    <li id="alert_notificatoin_bar" class="dropdown">
      <a data-toggle="dropdown" class="dropdown-toggle" href="#">

        <i class="icon-bell-l"></i>
        <span class="badge bg-important">7</span>
      </a>
     <ul class="dropdown-menu extended inbox">
          <div class="notify-arrow notify-arrow-blue"></div>
          <li>
            <p class="blue">You have 7 new orders </p>
          </li>
          <li>
            <a href="#">
              <span class="photo"><img alt="avatar" src="./admin-img/avatar-mini.jpg"></span>
              <span class="subject">
                <span class="from">Priya Joshi</span>
                <span class="time">3 min</span>
              </span>
              <span class="message">
                Blue Bucks...
              </span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="photo"><img alt="avatar" src="./admin-img/avatar-mini2.jpg"></span>
              <span class="subject">
                <span class="from">Biren Chauhan</span>
                <span class="time">5 mins</span>
              </span>
              <span class="message">
                Fruit Almond...
              </span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="photo"><img alt="avatar" src="./admin-img/avatar-mini3.jpg"></span>
              <span class="subject">
                <span class="from">Dixita Hapaliya</span>
                <span class="time">6 mins</span>
              </span>
              <span class="message">
                Rainbow Vanilla...
              </span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="photo"><img alt="avatar" src="./admin-img/avatar-mini4.jpg"></span>
              <span class="subject">
                <span class="from">Bhut Prince</span>
                <span class="time">8 mins</span>
              </span>
              <span class="message">
                Gummy Bear...
              </span>
            </a>
          </li>
          <li>
            <a href="admin-order.php">See all order</a>
          </li>
        </ul> 
    </li>
    <!-- alert notification end-->












    <!-- user login dropdown start-->
    <li class="dropdown">
      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <span class="profile-ava">
          <img alt="" src="admin-img/avatar1_small.jpg">
        </span>
        <span class="username">Admin</span>
        <b class="caret"></b>
      </a>
      <ul class="dropdown-menu extended logout">
        <div class="log-arrow-up"></div>
        <li class="eborder-top">
          <a href="#"><i class="icon_profile"></i> My Profile</a>
        </li>
        <li>
          <a href="admin-order.php"><i class="icon_mail_alt"></i> My Inbox</a>
        </li>
        <li>
          <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
        </li>
        <li>
          <a href="table-booking.php"><i class="icon_chat_alt"></i> Requests</a>
        </li>
        <li>
          <a href="login.php"><i class="icon_key_alt"></i> Log Out</a>
        </li>
        
      </ul>
    </li>
    <!-- user login dropdown end -->
  </ul>
  <!-- notificatoin dropdown end-->
</div>
</header>