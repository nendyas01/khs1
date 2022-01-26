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
      <li class="active">
        <a href="<?php echo base_url('chart') ?>">
          <i class="fa fa-bar-chart"></i> <span>Chart</span>
        </a>
      </li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-calendar-check-o"></i> <span>Pengelolaan Vendor</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('rkap_tahunan') ?>"><i class="fa fa-circle-o"></i> Addendum</a></li>
          <li><a href="<?php echo base_url('progress/tambah') ?>"><i class="fa fa-circle-o"></i> Input SPJ</a></li>
          <li><a href="<?php echo base_url('kontrol_fin') ?>"><i class="fa fa-circle-o"></i> Kontrol Finansial</a></li>
          <li><a href="<?php echo base_url('rkap_pln') ?>"><i class="fa fa-circle-o"></i> List Amandemen</a></li>

        </ul>
      </li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-calendar-check-o"></i> <span>Pengelolaan Perijinan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('rkap_tahunan') ?>"><i class="fa fa-circle-o"></i> BA Survey</a></li>
          <li><a href="<?php echo base_url('rkap_tahunan') ?>"><i class="fa fa-circle-o"></i> SKRD</a></li>
          <li><a href="<?php echo base_url('rkap_pln') ?>"><i class="fa fa-circle-o"></i> Retribusi</a></li>
          <li><a href="<?php echo base_url('rkap_pln') ?>"><i class="fa fa-circle-o"></i> Monitoring Perijinan</a></li>
          <li><a href="<?php echo base_url('rkap_pln') ?>"><i class="fa fa-circle-o"></i> Pengajuan Perijinan Baru</a></li>
          <li><a href="<?php echo base_url('rkap_pln') ?>"><i class="fa fa-circle-o"></i> List Sanksi</a></li>
        </ul>
      </li>


      <li class="active treeview">
        <a href="#">
          <i class="fa fa-book"></i> <span>Pengelolaan Pelanggaran</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('rkap_tahunan') ?>"><i class="fa fa-circle-o"></i> Input Pelanggaran KHS</a></li>
          <li><a href="<?php echo base_url('rkap_pln') ?>"><i class="fa fa-circle-o"></i> Input Sanksi SPJ</a></li>
          <li><a href="<?php echo base_url('rkap_pln') ?>"><i class="fa fa-circle-o"></i> Approve Pelanggaran</a></li>
          <li><a href="<?php echo base_url('rkap_pln') ?>"><i class="fa fa-circle-o"></i> List Pelanggaran</a></li>
          <li><a href="<?php echo base_url('rkap_pln') ?>"><i class="fa fa-circle-o"></i> List Sanksi</a></li>
          <li><a href="<?php echo base_url('rkap_pln') ?>"><i class="fa fa-circle-o"></i> List Sanksi SPJ</a></li>
          <li><a href="<?php echo base_url('rkap_pln') ?>"><i class="fa fa-circle-o"></i> Sanksi Siap Cetak</a></li>
          <li><a href="<?php echo base_url('rkap_pln') ?>"><i class="fa fa-circle-o"></i> Upload Sanksi KHS</a></li>
          <li><a href="<?php echo base_url('rkap_pln') ?>"><i class="fa fa-circle-o"></i> Upload Sanksi SPJ</a></li>
        </ul>
      </li>

      <li class="active treeview">
        <a href="#">
          <i class="fa fa-clock-o"></i> <span>Pengelolaan Progress</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('progress') ?>"><i class="fa fa-circle-o"></i> Detail SPJ</a></li>
          <li><a href="<?php echo base_url('progress/tambah1') ?>"><i class="fa fa-circle-o"></i> Input Progress Kerja</a></li>
        </ul>
      </li>
      <li class="active">
        <a href="<?php echo base_url('karyawan') ?>"><i class="fa fa-table"></i><span>Pengelolaan Data Master</span></a>
      </li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-book"></i> <span>Pengelolaan Anggaran</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('anggaran') ?>"><i class="fa fa-circle-o"></i> Penyerapan Anggaran</a></li>
          <li><a href="<?php echo base_url('rkap_tahunan') ?>"><i class="fa fa-circle-o"></i> Input Data Anggaran</a></li>
          <li><a href="<?php echo base_url('rkap_pln') ?>"><i class="fa fa-circle-o"></i> Edit/Update SKKO_I</a></li>
        </ul>
      </li>
      <li class="active">
        <a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-sign-out"></i> <span>Logout</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>