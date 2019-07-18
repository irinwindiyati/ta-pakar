  <!-- Navbar-->
  <header class="app-header">
    
    <img src="<?php echo base_url('assets/Admin/img/logo.png') ?>" style="width: 65px; height: 65px; margin-left: 70px;">
      
    
    <a class="app-sidebar__toggle fas fa-bars" href="#" data-toggle="sidebar" aria-label="Hide Sidebar" style="padding-top: 19px; margin-left:85px;"></a>

    <h4 class="dropdown col-lg-12 col-sm-12"style="padding-top: 19px; color: #ffffff">SP DIAGNOSA PENYAKIT PADI</h4>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <!-- User Menu-->
      <li class="dropdown">
        <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
          <?php echo $this->session->userdata('nama'); ?>
          <i class="fas fa-user fa-lg"></i>
        </a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="<?php echo base_url('Login/logout') ?>"><i class="fas fa-sign-out-alt fa-lg"></i> Logout</a>
          </li>
          <li><a class="dropdown-item" href="<?php echo base_url('Admin/show_profil')?>"><i class="fas fa-cog"></i> Settings</a>
          </li>
        </ul>
      </li>
    </ul>
  </header>