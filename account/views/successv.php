<!------- VERIFIKASI AKUN ------->
<div class="row mx-auto pb-5 pt-5 bg-light" style="width:100%;">
	<div class="row col-md-12 mx-auto">
    <h1 class="mx-auto text-black font-weight-bold">VERIFIKASI AKUN</h1>
  </div>
	<div class="row col-md-12 mx-auto">
    <hr class="mx-auto" style="width:5%;height:5px;margin-top:0;background:black;">
  </div>
  <div class="row col-md-6 mx-auto">
    <div class="col-md-10 mx-auto card">
      <!-- /.card-header -->
      <div class="card-header">
        <div class="register-logo" style="margin-bottom:-5px;">
          <div class="font-weight-bold mt-1" href="beranda"><h3>SILAHKAN LOGIN</h3></div>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-body">
        <div class="card-body">
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
      </div>
    </div>
  </div>
</div>