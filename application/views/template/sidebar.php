<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>">
    <div class="sidebar-brand-text mx-3">Djiwa Express</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url(); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
 <?php 
            if($this->session->userdata('level')=="admin") { ?>
  <div class="sidebar-heading">
    Admin Panel
  </div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-folder"></i>
      <span>Master Data</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Master Data:</h6>
        <a class="collapse-item" href="<?php echo base_url(); ?>admin/Admin_controller/table_counter">Counter</a>
        <a class="collapse-item" href="<?php echo base_url(); ?>admin/Admin_controller/table_jenispkt">Jenis Paket</a>
        <a class="collapse-item" href="<?php echo base_url(); ?>admin/Admin_controller/table_kurir">Kurir</a>
        <a class="collapse-item" href="<?php echo base_url(); ?>admin/Admin_controller/table_darikota"> Dari Kota</a>
        <a class="collapse-item" href="<?php echo base_url(); ?>admin/Admin_controller/table_kekota"> Ke Kota</a>
        <a class="collapse-item" href="<?php echo base_url(); ?>admin/Admin_controller/table_pembayaran"> Jenis Pembayaran</a>
        <a class="collapse-item" href="<?php echo base_url(); ?>admin/Admin_controller/table_status">Status</a>
      </div>
    </div>
  </li>
  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url();?>admin/Admin_controller/table_daftar_transaksi"  aria-expanded="true">
      <i class="fas fa-fw fa-list"></i>
      <span>Daftar Transaksi</span>
    </a>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url();?>admin/Admin_controller/table_adminuser"  aria-expanded="true">
      <i class="fas fa-fw fa-list"></i>
      <span>All User</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <?php }else{ ?>
             
        
  <!-- Heading -->
  <div class="sidebar-heading">
    User Panel
  </div>
     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-list"></i>
      <span>Cek ongkir</span>
    </a>
    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Pilih Jenis Paket:</h6>
        <a class="collapse-item" href="<?php echo base_url(); ?>admin/Admin_controller/table_cekongkir_dokumen">Dokumen</a>
        <a class="collapse-item" href="<?php echo base_url(); ?>admin/Admin_controller/table_cekongkir_barang">Barang</a>
      </div>
    </div>
  </li>
   <!-- Nav Item - Utilities Collapse Menu -->
   <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url();?>user/User_controller/table_order"  aria-expanded="true">
      <i class="fas fa-fw fa-list"></i>
      <span>Order</span>
    </a>
  </li>
   <!-- Nav Item - Utilities Collapse Menu -->
   <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url();?>user/User_controller/table_daftar_resi">
      <i class="fas fa-fw fa-list"></i>
      <span>Histori</span>
    </a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <?php }
         ?> 
  <!-- Nav Item - Profile -->
  
  <li class="nav-item">
  <?php foreach($getdetailuser as $g):
     $id_user=$g['id_user'];
     $username=$g['username'];
     $nama_user=$g['nama_user'];
     $j_kelamin=$g['j_kelamin'];
     $tgl_lahir=$g['tgl_lahir'];
     $pw=$g['pw'];
    ?>
  <a class="nav-link btn-edit-profile" href="#" data-username="<?php echo $username;?>" data-nama_user="<?php echo $nama_user;?>" data-j_kelamin="<?php echo $j_kelamin;?>" data-tgl_lahir="<?php echo $tgl_lahir;?>" data-id_user="<?php echo $id_user;?>" data-pw="<?php echo $pw;?>">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            <span>Profile</span>
          </a>
          <?php endforeach; ?>
  </li>

 

  <!-- Nav Item - Logout -->
  <li class="nav-item">
  <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            <span>Logout</span>
          </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->

