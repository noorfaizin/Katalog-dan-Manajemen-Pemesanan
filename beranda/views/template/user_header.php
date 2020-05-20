<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html> 
<html> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $judul ?></title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/dist/img/favicon.png')?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/src/jquery.horizontalmenu.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/responsive.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/main.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/style.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/kolomproduk.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/BackToTop.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/table.scrolldown.css')?>">
</head> 
<body>
<!----------- NAVBAR ----------->
<div id="home"></div>
<div class="row mx-auto p-2 bg-yellow" style="width:100%;">
  <div class="row col-md-2 mx-auto">
    <h5 class="text-dark font-weight-light" style="font-size:13px;margin:auto;">✉ Kopiku@gmail.com</h5>
  </div>
	<div class="row col-md-3 mx-auto">
    <h5 class="text-dark font-weight-light" style="font-size:13px;margin:auto;">☎ 0895-0446-8800</h5>
    <h5 class="text-dark font-weight-light" style="font-size:13px;margin:auto;">◷ 07:00–23:00</h5>
  </div>
  <div class="row col-md-4"></div>
  <div class="row col-md-1 mx-auto">
    
  </div>
  <div class="row col-md ml-5">
    <a href="#" class="fa fa-facebook text-warning bg-dark text-center p-2 rounded mr-2" style="width:30px;"></a>
    <a href="#" class="fa fa-instagram text-warning bg-dark text-center p-2 rounded mr-2" style="width:30px;"></a>
    <a href="#" class="fa fa-google text-warning bg-dark text-center p-2 rounded mr-2" style="width:30px;"></a>
  </div>
</div>
<nav id="navbarku" class="navbar-expand-lg navbar navbar-light sticky-top bg-dark">
    <nav class="sidebar-menu pr-3">
        <a href="#menu"><span class="navbar-toggler-icon"></span></a>
    </nav>
<!-----------NAV TITLE------->
  <button class="navbar-toggler bg-light rounded" type="button">
    <a href="#menu"><span class="navbar-toggler-icon"></span></a>
  </button>
  <a id="navbarku-title" class="navbar-brand font-weight-bold" href="#"><img alt="foto" src="<?php echo base_url('assets/dist/img/nav.png')?>"></a>
  <h1 id="nav-head" class="font-weight-bold text-white" style="font-size:35px;" href="#">K⍜PIKU</h1>
<!-----------NAV TITLE------->
  <div class="collapse navbar-collapse" style="font-size:14px;" id="navbarSupportedContent">
    <div class="col-lg-5">
      <ul class="navbar-nav mr-auto ah-tab-wrapper">
        <li class="nav-item ah-tab ml-5">
          <a class="ah-tab-item" data-ah-tab-active="true" href="<?php echo base_url('beranda')?>">Beranda</a>
        </li>
        <li class="nav-item ah-tab">
          <a class="ah-tab-item" href="<?php echo base_url('produk')?>">Produk</a>
        </li>
        <li class="nav-item ah-tab">
          <a class="ah-tab-item" href="<?php echo base_url('beranda/about')?>">Tentang</a>
        </li>
        <li class="nav-item ah-tab">
          <a class="ah-tab-item" href="<?php echo base_url('beranda/contact')?>">Hubungi</a>
        </li>
        <li class="nav-item ah-tab">
          <a class="ah-tab-item" href="<?php echo base_url('beranda/pemesanan')?>">Pemesanan</a>
        </li>
      </ul>
	  </div>
    <div class="col-lg-4">
      <form id="form_search" action="<?php echo site_url('beranda/search');?>" method="post">
        <div class="ml-5 input-group">
          <input type="text" name="caridata" class="form-control" id="caridata" placeholder="Cari Produk" autocomplete="on">
          <div class="input-group-append">
            <button class="btn btn-warning" type="submit" name="submit"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </form>
      
    </div>
    <div class="navbar-nav ml-auto">
      <div class="dropdown">
        <a class="btn btn-dark btn-sm mr-2 dropdown-toggle" role="button" id="cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;">
          <i class="fas fa-shopping-cart mt-1 mr-1"></i> Cart
          <span class="badge badge-warning navbar-badge ml-2 p-1 font-weight-bold" style="margin-right:-5px;"><?php echo $sum_jumlah->jumlah; ?></span>
        </a>
          <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="cart">
            <div class="card-body card-warning card-outline p-0" style="width:250px;">
            <table class="table table-hover table-bordered table-fixed">
              <tbody>
                <?php 
                $no=1;
                $total_bayar = 0;
                foreach ($cart->result() as $row){ ?>
                    <tr>
                      <td class="p-2">
                        <div class="row col-md-12">
                          <div class="col-md-10">
                            <span class="font-weight-bold badge badge-warning"><?php echo $row->prod_name; ?></span>
                          </div>
                          <div class="col-md-2">
                            <?php echo anchor('cart/delete_cart/'.$row->prod_id,'<div class="ml-5 text-danger mx-auto" style="border-radius: 50%;">
                            <button class="close text-danger">
                                <span aria-hidden="true">×</span>
                            </button>
                            </div>')?>
                          </div>
                        </div>
                        <div class="col-md-12">      
                          <span style="font-size:13px;"><?php echo $row->qty; ?> x </span>
                          <span style="font-size:13px;">Rp. <?php echo number_format($row->price, 0,',','.') ?>,-</span>
                          <span style="font-size:13px;">| Rp. <?php echo number_format($row->total_harga, 0,',','.') ?>,-</span>              
                        </div>
                      </td>
                    </tr>
                <?php $total_bayar+=$row->total_harga; }?>
              </tbody>
            </table>

              <span class="ml-2" style="font-size:13px;">Total bayar : Rp. </span>
              <span class="font-italic" style="font-size:13px;"><?php echo number_format($total_bayar, 0,',','.') ?>,-</span><br>
            </div>
            <div class="m-0 row col-md-12 card-footer p-1 bg-white">
              <div class="col-md-6">
                <a href="<?php echo base_url('cart')?>" class="btn btn-dark btn-sm btn-block">Detail Cart</a>
              </div>
              <div class="col-md-6 mx-auto">
                <a href="<?php echo base_url('cart/transaction')?>"><div class="btn btn-sm btn-success btn-block"> Transaksi</div></a>
              </div>
            </div>
          </div>
      </div>
      <a href="<?php echo base_url('login')?>" class="btn btn-outline-warning btn-sm mr-3">My Account</a>
    </div>
  </div>
</nav>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white" id="exampleModalLabel">Logout My Account</h5>
                <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Anda yakin keluar dari <b class="text-dark">K⍜PIKU</b> | My Account ?</div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('login/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Nonaktif Akun Modal-->
<div class="modal fade" id="nonaktif" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white" id="exampleModalLabel">Nonaktif My Account</h5>
                <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Anda yakin untuk me-Nonaktifkan akun <b class="text-dark">K⍜PIKU</b> ?</div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('user_dashboard/nonaktif/'.$users['username']);?>">Nonaktif</a>
            </div>
        </div>
    </div>
</div>