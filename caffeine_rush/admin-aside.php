<aside>
    <div id="sidebar" class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu">
        <li class="<?php if($_SESSION['currentPage'] == 10) { echo 'active';} ?>">
          <a class="" href="adminpage.php">
            <i class="icon_house_alt"></i>
            <span>Dashboard</span>
          </a>
        </li>


        
        <li class="<?php if($_SESSION['currentPage'] == 11) { echo 'active';} ?>">
          <a class="" href="reviews.php">
            <i class="icon_genius"></i>
            <span>Reviews</span>
          </a>
        </li>
        <li class="<?php if($_SESSION['currentPage'] == 12) { echo 'active';} ?>">
          <a class="" href="table-booking.php">
            <i class="icon_chat_alt"></i>
            <span>Table Booking</span>
          </a>
        </li>
        <li class="<?php if($_SESSION['currentPage'] == 13) { echo 'active';} ?>">
          <a class="" href="admin-order.php">
            <i class="icon_pencil"></i>
            <span>Orders</span>
          </a>
        </li>
      


        <li class="sub-menu ">
          <a href="javascript:;" class="">
            <!-- <li class="active"> -->
            <i class="icon_table"></i>
            <span>Tables</span>
            <span class="menu-arrow arrow_carrot-right"></span>
            <!-- </li> -->
          </a>
          <ul class="sub">
            <li><a class="<?php if($_SESSION['currentPage'] == 15) { echo 'active';} ?>" href="pr_table.php">All Products</a></li>
            <li><a class="<?php if($_SESSION['currentPage'] == 16) { echo 'active';} ?>" href="basic_table.php">All Users</a></li>
          </ul>
        </li>
      </ul>
      <!-- sidebar menu end-->
    </div>
  </aside>
  