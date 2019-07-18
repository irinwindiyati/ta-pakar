<!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar circle" src="<?php echo base_url("profile/auto.png");?>" alt="User Image" style="overflow: hidden; max-width: 65px; max-height: 100%;">
    <div>
      <p class="app-sidebar__user-name"><?php echo $this->session->userdata('nama');?></p>
      <p class="app-sidebar__user-designation"><?php echo $this->session->userdata('status');?></p>
    </div>
  </div>

  <ul class="app-menu">
      <li>
        <a class="app-menu__item " href="<?php echo base_url('Admin/index')?>">
          <i class="app-menu__icon fas fa-chart-line"></i>
          <span class="app-menu__label">Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a class="app-menu__item" href="" data-toggle="treeview">
          <i class="app-menu__icon fas fa-list-ul"></i>
          <span class="app-menu__label">Data</span>
          <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
          <li>
            <a class="treeview-item" href="<?php echo base_url('Admin/show_v_penyakit')?>">
              <i class="fa-file-o"></i>
              Data Penyakit
            </a>
          </li>
          <li>
            <a class="treeview-item" href="<?php echo base_url('Admin/show_v_gejala')?>">
              <i class="fa-file-o"></i>
              Data Gejala
            </a>
          </li>
          <!-- <li>
            <a class="treeview-item" href="<?php echo base_url('Admin/show_v_kendali')?>">
              <i class="icon fab fa-uikit"></i>
              Data Pengendalian Penyakit
            </a>
          </li> -->
        </ul>
      </li>

      <li class="treeview">
        <a class="app-menu__item" href="" data-toggle="treeview">
          <i class="app-menu__icon fas fa-cog"></i>
          <span class="app-menu__label">Settings</span>
          <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
          <li>
            <a class="treeview-item" href="<?php echo base_url('Admin/show_v_rule')?>">
              <i class="icon fab fa-uikit"></i>
              Data Rule
            </a>
          </li>
          <li>
            <a class="treeview-item" href="<?php echo base_url('Admin/v_data_user')?>">
              <i class="fa-file-o"></i>
              Data User
            </a>
          </li>
        </ul>
      </li>

      <li>
        <a class="app-menu__item" href="<?php echo base_url('Admin/index')?>">
          <i class="app-menu__icon fas fa-swatchbook"></i>
          <span class="app-menu__label">Riwayat Diagnosa</span>
        </a>
      </li>
    </ul>

</aside>
