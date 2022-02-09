<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar ">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar ">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url() ?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Admin UID Jaya</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li <?= $this->uri->segment(1) == 'chart' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
        <a href="<?php echo base_url('chart') ?>">
          <i class="fa fa-bar-chart"></i> <span>Chart</span>
        </a>
      </li>

      <li class="treeview <?= $this->uri->segment(1) == 'crud_area' || $this->uri->segment(1) == 'crud_kontrak' || $this->uri->segment(1) == 'crud_paket'
                            || $this->uri->segment(1) == 'crud_user' || $this->uri->segment(1) == 'crud_vendor' ? 'active' : '' ?>">
        <a href="#">
          <i class="fa fa-book"></i> <span>Pengelolaan Data Master</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?= $this->uri->segment(1) == 'crud_area' ? 'class="active"' : '' ?>><a href="<?php echo base_url('crud_area') ?>"><i class="fa fa-circle-o"></i> Add/Edit Area</a></li>
          <li <?= $this->uri->segment(1) == 'crud_kontrak' ? 'class="active"' : '' ?>><a href="<?php echo base_url('crud_kontrak') ?>"><i class="fa fa-circle-o"></i> Add/Edit Pagu Kontrak</a></li>
          <li <?= $this->uri->segment(1) == 'crud_paket' ? 'class="active"' : '' ?>><a href="<?php echo base_url('crud_paket') ?>"><i class="fa fa-circle-o"></i> Add/Edit Paket</a></li>
          <li <?= $this->uri->segment(1) == 'crud_user' ? 'class="active"' : '' ?>><a href="<?php echo base_url('crud_user') ?>"><i class="fa fa-circle-o"></i> Add/Edit User</a></li>
          <li <?= $this->uri->segment(1) == 'crud_vendor' ? 'class="active"' : '' ?>><a href="<?php echo base_url('crud_vendor') ?>"><i class="fa fa-circle-o"></i> Add/Edit Vendor</a></li>
        </ul>
      </li>

      <li class="treeview <?= $this->uri->segment(1) == 'kontrol_fin/tambah_addendum' || $this->uri->segment(1) == 'kontrol_fin/tambah'
                            || $this->uri->segment(1) == 'kontrol_fin' || $this->uri->segment(1) == 'list_amandemen' ? 'active' : '' ?>">
        <a href="#">
          <i class="fa fa-calendar-check-o"></i> <span>Pengelolaan Vendor</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">

          <li><a href="<?php echo base_url('inp_addendum') ?>"><i class="fa fa-circle-o"></i> Addendum</a></li>
          <li><a href="<?php echo base_url('kontrol_fin/tambah') ?>"><i class="fa fa-circle-o"></i> Input SPJ</a></li>
          <li><a href="<?php echo base_url('kontrol_fin') ?>"><i class="fa fa-circle-o"></i> Kontrol Finansial</a></li>
          <li><a href="<?php echo base_url('kontrol_fin/tambah_list') ?>"><i class="fa fa-circle-o"></i> List Amandemen</a></li>


        </ul>
      </li>

      <li class="treeview<?= $this->uri->segment(1) == '' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
        <a href="#">
          <i class="fa fa-calendar-check-o"></i> <span>Pengelolaan Perijinan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('perijinan') ?>"><i class="fa fa-circle-o"></i> BA Survey</a></li>
          <li><a href="<?php echo base_url('perijinan/monitoring') ?>"><i class="fa fa-circle-o"></i> Monitoring Perijinan</a></li>
          <li><a href="<?php echo base_url('perijinan/pengajuan') ?>"><i class="fa fa-circle-o"></i> Pengajuan Perijinan Baru</a></li>
          <li><a href="<?php echo base_url('perijinan/retribusi') ?>"><i class="fa fa-circle-o"></i> Retribusi</a></li>
          <li><a href="<?php echo base_url('perijinan/skrd') ?>"><i class="fa fa-circle-o"></i> SKRD</a></li>
        </ul>
      </li>


      <li class="treeview <?= $this->uri->segment(1) == 'pelanggaran/inp_pel_khs' || $this->uri->segment(1) == 'pelanggaran/inp_sanksi_spj' || $this->uri->segment(1) == 'crud_paket'
                            || $this->uri->segment(1) == 'pelanggaran/upl_sanksi_khs' || $this->uri->segment(1) == 'pelanggaran/upl/sanksi_spj' ? 'active' : '' ?>">
        <a href="#">
          <i class="fa fa-book"></i> <span>Pengelolaan Pelanggaran</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?= $this->uri->segment(1) == 'pelanggaran/inp_pel_khs' ? 'class="active"' : '' ?>><a href="<?php echo base_url('pelanggaran/inp_pel_khs') ?>"><i class="fa fa-circle-o"></i> Input Pelanggaran KHS</a></li>
          <li <?= $this->uri->segment(1) == 'pelanggaran/inp_sanksi_spj' ? 'class="active"' : '' ?>><a href="<?php echo base_url('pelanggaran/inp_sanksi_spj') ?>"><i class="fa fa-circle-o"></i> Input Sanksi SPJ</a></li>
          <li><a href="<?php echo base_url('pelanggaran/app_pel') ?>"><i class="fa fa-circle-o"></i> Approve Pelanggaran</a></li>
          <li><a href="<?php echo base_url('pelanggaran/list_pelanggaran') ?>"><i class="fa fa-circle-o"></i> List Pelanggaran</a></li>
          <li><a href="<?php echo base_url('pelanggaran/list_sanksi') ?>"><i class="fa fa-circle-o"></i> List Sanksi</a></li>
          <li><a href="<?php echo base_url('pelanggaran/list_sanksi_spj') ?>"><i class="fa fa-circle-o"></i> List Sanksi SPJ</a></li>
          <li><a href="<?php echo base_url('pelanggaran/sanksi_siap_cetak') ?>"><i class="fa fa-circle-o"></i> Sanksi Siap Cetak</a></li>
          <li <?= $this->uri->segment(1) == 'pelanggaran/upl_sanksi_khs' ? 'class="active"' : '' ?>><a href="<?php echo base_url('pelanggaran/upl_sanksi_khs') ?>"><i class="fa fa-circle-o"></i> Upload Sanksi KHS</a></li>
          <li <?= $this->uri->segment(1) == 'pelanggaran/upl/sanksi_spj' ? 'class="active"' : '' ?>><a href="<?php echo base_url('pelanggaran/upl_sanksi_spj') ?>"><i class="fa fa-circle-o"></i> Upload Sanksi SPJ</a></li>
        </ul>
      </li>

      <li class="treeview<?= $this->uri->segment(1) == 'progress' || $this->uri->segment(1) == 'progress/tambah1' ? 'active' : '' ?>">
        <a href="#">
          <i class="fa fa-clock-o"></i> <span>Pengelolaan Progress</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?= $this->uri->segment(1) == 'progress' ? 'class="active"' : '' ?>><a href="<?php echo base_url('progress') ?>"><i class="fa fa-circle-o"></i> Detail SPJ</a></li>
          <li <?= $this->uri->segment(1) == 'progress/tambah1' ? 'class="active"' : '' ?>><a href="<?php echo base_url('progress/tambah1') ?>"><i class="fa fa-circle-o"></i> Input Progress Kerja</a></li>
        </ul>
      </li>

      <li class="treeview <?= $this->uri->segment(1) == 'anggaran' || $this->uri->segment(1) == 'anggaran/v_input_tagihan'
                            || $this->uri->segment(1) == 'crud_skkio' ? 'active' : '' ?>">
        <a href="#">
          <i class="fa fa-book"></i> <span>Pengelolaan Anggaran</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?= $this->uri->segment(1) == 'anggaran' ? 'class="active"' : '' ?>><a href="<?php echo base_url('anggaran') ?>"><i class="fa fa-circle-o"></i> Penyerapan Anggaran</a></li>
          <li <?= $this->uri->segment(1) == 'anggaran/v_input_tagihan' ? 'class="active"' : '' ?>><a href="<?php echo base_url('anggaran/v_input_tagihan') ?>"><i class="fa fa-circle-o"></i> Input Tagihan</a></li>
          <li <?= $this->uri->segment(1) == 'crud_skkio' ? 'class="active"' : '' ?>><a href="<?php echo base_url('crud_skkio') ?>"><i class="fa fa-circle-o"></i> Add/Edit SKKO_I</a></li>
        </ul>
      </li>
      <li <?= $this->uri->segment(1) == 'login/logout' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
        <a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-sign-out"></i> <span>Logout</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>