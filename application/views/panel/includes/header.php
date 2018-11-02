  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url("panel"); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Y</b>PNL</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Yönetici Paneli</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url("assets/panel/"); ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <?php $veri = yoneticigetir($this->session->userdata('email')); foreach ($veri as $veri) { ?>
              <span class="hidden-xs"><?php echo $veri["yonetici_adi"]; ?></span>
              <?php } ?>
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo base_url("panel/ayarlar"); ?>"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>