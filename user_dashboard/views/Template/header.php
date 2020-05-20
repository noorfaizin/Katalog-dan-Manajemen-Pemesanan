<?php if($this->session->userdata('verif_akun') == 1){ ?>
<!------- MENU MY ACCOUNT ------->
<div class="card-body">
<div class="row col-md-12">
  <div class="col-md-7">
    <h3 class="card-title bg-warning p-2 rounded">
      <i class="fas fa-user mr-2"></i><b class="text-dark">K⍜PIKU</b> | My Account
    </h3>
  </div>
  <div class="col-md-3">
    <?= $this->session->flashdata('message');?>
  </div>
  <?php if($this->session->userdata('role') == 'admin'){ ?>
  <div class="col-md-2">
    <a href="<?= base_url('dashboard');?>" class="btn btn-md btn-dark ml-4">Dashboard Admin</a>
  </div>
  <?php } ?>
</div><hr>
  <div class="row col-md-12 mb-5">
    <div class="row col-md-3">
        <div class="list-group col-md-12 mt-3">
            <a class="list-groupitem list-group-item bg-dark" style="margin-bottom:-10px;"><strong><h4><b class="bg-dark rounded"><?= $users['nama'];?></b></h4></strong></a>
            <a href="<?php echo base_url()?>user_dashboard" class="list-group-item text-dark"><i class="fas fa-usd mr-2"></i>Transaksi</a>
            <?php echo anchor('user_dashboard/akun','<div class="list-group-item text-dark"><i class="fas fa-user mr-2"></i>Informasi Akun</div>')?>
            <?php echo anchor('user_dashboard/edit','<div class="list-group-item text-dark"><i class="fas fa-cog fa-spin mr-2"></i>Pengaturan Akun</div>')?>
            <?php echo anchor('user_dashboard','<div class="list-group-item text-dark"><i class="fas fa-book mr-2"></i>Daftar Pembelian</div>')?>
            <a href="" data-toggle="modal" data-target="#logoutModal" class="list-group-item text-dark"><i class="fas fa-key mr-2"></i>Logout</a>
        </div>
    </div>

<?php }else{
  redirect('login'); 
} ?>