<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html> 
<html> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Proses Pesanan Sukses</title>
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
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/owl.carousel.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/responsive.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/main.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/style.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/kolomproduk.css')?>">
</head> 
<body class="bg-dark">
<!------- WELCOME ------->
<?php
header('Refresh:10; url= ' . base_url() . 'beranda');
?>
<div id="myModal" class="modal fade">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header bg-success">
            <h4 class="modal-title text-white">Pesanan Sukses</h4>
          </div>
          <div class="modal-body">
            <p>Terima kasih anda sudah berbelanja di K⍜PIKU.<br>Untuk proses pemesanan akan kami lanjutkan di Email/Whatsapp.</p>
            <div class="col-md-12 text-right mt-5">
              <a href="<?php echo base_url('beranda')?>"><div class="btn btn-sm btn-success"><i class="fas fa-trash"></i> Beranda</div></a>
            </div>
          </div>
      </div>
  </div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js')?>"></script>
<script>
$(document).ready(function(){
$("#myModal").modal('show');
});
</script>