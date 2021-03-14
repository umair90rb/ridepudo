<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
  <div class="sidebar-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item mb-50">
        <a class="nav-link " href="#">
          <img class="img-fluid" src="<?php echo base_url(); ?>rp_assets/img/logo.png">
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link brdr active" href="<?php echo base_url(); ?>carbase_dashboard" data-toggle="tooltip">
          <i class="fas fa-tachometer-alt">  </i> Dashboard
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link brdr active" href="<?php echo base_url(); ?>carbase_users" data-toggle="tooltip">
          <i class="fas fa-user-friends"></i>  </i> Users
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link brdr active" href="<?php echo base_url(); ?>carbase_drivers" data-toggle="tooltip">
          <i class="fas fa-car"></i> Drivers
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link brdr active" href="<?php echo base_url(); ?>carbase_rides" data-toggle="tooltip">
          <i class="fas fa-calendar-check">  </i> All Rides
        </a>
      </li>
    </ul>

    <ul class="nav flex-column opt-botm mb-2">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>login/logout">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </li>
    </ul>
  </div>
</nav>