<?php
    $array_hari = array(1=>'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
    $array_bulan = array(1=>'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
    $hari = $array_hari[date('N')];
    $bulan = $array_bulan[date('n')];
    $tanggal = date('j');
    $tahun = date('Y');
  
  $nama = $this->session->userdata('nama');
  $username = $this->session->userdata('username');
?>
 <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>W<b>S</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIM </b>Nilai Raport</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/henki.jpg'); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Henki Wisnu Subakti</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/henki.jpg'); ?>" class="img-circle" alt="User Image">

                <p>
                  Henki Wisnu Subakti
                  <small>Administrator</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('profile'); ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('index.php/login/keluar'); ?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>



  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;<?php echo $hari.', '.$tanggal.' '.$bulan.' '.$tahun ;?></li>
        <li <?php if(!empty($on_dashboard)) echo "class=".$on_dashboard; ?>>
          <a href="<?php echo base_url('index.php/dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <?php 
          if (!empty($on_kelas7)){
            echo "<li class='active treeview'>";
          }elseif (!empty($on_kelas8)) {
            echo "<li class='active treeview'>";
          }elseif (!empty($on_kelas9)) {
            echo "<li class='active treeview'>";
          }elseif (!empty($on_siswa_all)) {
            echo "<li class='active treeview'>";
          }else{
            echo "<li class='treeview'>";
          }
        ?>
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li class="<?php if(!empty($on_kelas7)) echo $on_kelas7; ?>"><a href="<?php echo base_url('index.php/siswa/kelas7'); ?>"><i class="fa fa-circle-o"></i> Kelas 7</a></li>
            <li class="<?php if(!empty($on_kelas8)) echo $on_kelas8; ?>"><a href="<?php echo base_url('index.php/siswa/kelas8'); ?>"><i class="fa fa-circle-o"></i> Kelas 8</a></li>
            <li class="<?php if(!empty($on_kelas9)) echo $on_kelas9; ?>"><a href="<?php echo base_url('index.php/siswa/kelas9'); ?>"><i class="fa fa-circle-o"></i> Kelas 9</a></li>
            <li class="<?php if(!empty($on_siswa_all)) echo $on_siswa_all ?>"><a href="<?php echo base_url('index.php/siswa'); ?>"><i class="fa fa-circle-o"></i> Semua Siswa</a></li>
          </ul>
        </li>

        </li>
        <li class="<?php if(!empty($on_guru)) echo $on_guru; ?>">
          <a href="<?php echo base_url('index.php/guru'); ?>">
            <i class="fa fa-share"></i> <span>Guru</span>
          </a>
        </li>
        <li class="<?php if(!empty($on_mapel)) echo $on_mapel; ?>"><a href="<?php echo base_url('index.php/mapel'); ?>"><i class="fa fa-folder"></i> <span>Mata Pelajaran</span></a></li>
        <li class="<?php if(!empty($on_raport)) echo $on_mapel; ?>"><a href="<?php echo base_url('index.php/raport'); ?>"><i class="fa fa-folder"></i> <span>Nilai Raport</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
