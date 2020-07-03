<!------- WELCOME ------->
<div class="row mx-auto pl-5 pb-5 pt-5 bg-white" style="width:100%;">
	<div class="row col-md-12 mx-auto">
    <h1 class="text-dark font-weight-bold">WELCOME TO K⍜PIKU</h1>
  </div>
	<div class="row col-md-12 mx-auto">
    <div class="text-dark font-weight-bold bg-dark" style="width:5%;height:5px;margin-top:0;"></div>
  </div>
	<div class="row col-md-12 mt-3">
    <div class="row col-md-6 mx-auto">
      <h3 class=" text-dark font-weight-light" style="text-align:justify;">"I’M PROUD OF OUR COMMITMENT TO SUSTAINABLE AND ORGANIC FARMING. WE SEEK TO PRESEVE EARTH’S NATURAL BALANCE WHILE PRODUCING COFFEE WITH RICH, BOLD FLAVORS FOR PEOPLE AROUND THE WORLD TO ENJOY EVERYDAY.”</h3>
      <div class="social-auth-links">
          <p class="bg-light font-weight-bold p-2 mb-2 rounded">Belum mempunyai akun?, silahkan daftar terlebih dahulu.</p>
          <a href="<?php echo base_url('login/register');?>" class="btn btn-md btn-warning pr-5 pl-5">
            <i class="fas fa-user mr-1"></i> Register
          </a>
        </div>
    </div>
    <div class="row col-md-6 mx-auto">
    <div id="user-acc" class="border rounded bg-light col-md-8 login-card-body">
      <div class="row justify-content-end">
      </div>
      <div class="register-logo">
        <div class="font-weight-bold" href="beranda">LOGIN</div>
      </div>
        <?= $this->session->flashdata('message');?>
        <form method="post" action="<?= base_url('login');?>">
        <div class="input-group mb-4">
          <input type="text" class="form-control" name="username" placeholder="Username" value="<?= set_value('username');?>">
          <div class="input-group-append">
            <div class="bg-white input-group-text">
              <span class="text-dark fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <?= form_error('username','<small class="text-danger pl-3" style="margin-top:-25px;">','</small>');?>
        </div>
        <div class="input-group mb-4">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="bg-white input-group-append">
            <div class="input-group-text">
              <span class="text-dark fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <?= form_error('password','<small class="text-danger pl-3" style="margin-top:-25px;">','</small>');?>
        </div>
        <div class="row">
          <div class="col-4">
            <input type="submit" class="btn btn-warning btn-block" name="btnSubmit" value="Login" />
          </div>
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
    </div>
  </div>
</div>

