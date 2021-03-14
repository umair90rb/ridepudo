<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
  <div class="sidebar-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item mb-50">
        <a class="nav-link " href="#">
          <img class="img-fluid" src="<?php echo base_url(); ?>rp_assets/img/logo.png">
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link brdr active" href="<?php echo base_url(); ?>admin_dashboard" data-toggle="tooltip">
          <i class="fas fa-tachometer-alt">  </i> Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link brdr" href="#" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-users-cog"></i>  <span>Users </span><i class="fa fa-plus float-right"></i>
        </a>
        <div class="collapse" id="navbarToggleExternalContent">
          <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link brdr" href="<?php echo base_url(); ?>admin_customer">Add Customer</a></li>
             <li class="nav-item"><a class="nav-link brdr" href="<?php echo base_url(); ?>admin_stylist">Add Stylist</a></li>
             <li class="nav-item"><a class="nav-link brdr" href="<?php echo base_url(); ?>admin_carbase">Add Carbase</a></li>
            <li class="nav-item"><a class="nav-link brdr" href="<?php echo base_url(); ?>admin_driver">Add Driver</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link brdr active" href="<?php echo base_url(); ?>admin_schedule" data-toggle="tooltip">
          <i class="fas fa-calendar-check">  </i> All Schedules
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