<div class="col-md-6 mx-auto m-3 mb-5">
  <div class="card">
    <div class="card-body register-card-body bg-light">
      <p class="login-box-msg">Register a new membership</p>
      <?php echo form_open('login/register');?>
        <div class="input-group mb-3">
          <input type="text" class="col-md-6 form-control" placeholder="Nama Lengkap" name="nama" value="<?= set_value('nama');?>">
          <div class="input-group-append">
            <div class="input-group-text bg-white mr-2">
              <span class="fas fa-user"></span>
            </div>
          </div><br>
          <input type="text" class="col-md-6 form-control" placeholder="No HP" name="nohp" value="<?= set_value('nohp');?>">
          <div class="input-group-append">
            <div class="input-group-text bg-white">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <!------- FORM_ERROR ------->
        <div class="row">
          <div class="col-md-6" style="margin-top:-20px;">
            <?= form_error('nama','<small class="text-danger">','</small>');?>
          </div>
          <div class="col-md-6" style="margin-top:-20px;">
            <?= form_error('nohp','<small class="text-danger">','</small>');?>
          </div>
        </div>
        <div class="input-group mb-3">
          <textarea type="text" class="form-control" placeholder="Alamat Lengkap" name="alamat"><?= set_value('alamat');?></textarea>
          <div class="input-group-append">
            <div class="input-group-text bg-white">
              <span class="fas fa-home"></span>
            </div>
          </div>
        </div>
        <!------- FORM_ERROR ------->
        <div class="row">
          <div class="col-md-12" style="margin-top:-20px;">
            <?= form_error('alamat','<small class="text-danger">','</small>');?>
          </div>
        </div>
        <div class="input-group mb-3">
          <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" id="customRadio1" name="j_kel" value="Laki - Laki" checked>
            <label for="customRadio1" class="custom-control-label">Laki - laki</label>
          </div>
          <div class="ml-3 custom-control custom-radio">
            <input class="custom-control-input" type="radio" id="customRadio2" name="j_kel" value="Perempuan">
            <label for="customRadio2" class="custom-control-label">Perempuan</label>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="col-md-6 form-control" placeholder="Email" name="email" value="<?= set_value('email');?>">
          <div class="input-group-append">
            <div class="input-group-text bg-white mr-2">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <input type="text" class="col-md-6 form-control" placeholder="Username" name="username" value="<?= set_value('username');?>">
          <div class="input-group-append">
            <div class="input-group-text bg-white">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <!------- FORM_ERROR ------->
        <div class="row">
          <div class="col-md-6" style="margin-top:-20px;">
            <?= form_error('email','<small class="text-danger">','</small>');?>
          </div>
          <div class="col-md-6" style="margin-top:-20px;">
            <?= form_error('username','<small class="text-danger">','</small>');?>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="col-md-6 form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text bg-white mr-2">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <input type="password" class="col-md-6 form-control" placeholder="Retype password" name="password_conf">
          <div class="input-group-append">
            <div class="input-group-text bg-white">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!------- FORM_ERROR ------->
        <div class="row">
          <div class="col-md-6" style="margin-top:-20px;">
            <?= form_error('password','<small class="text-danger">','</small>');?>
          </div>
        </div>
        <div class="row justify-content-end">
          <div class="col-4">
            <input type="submit" class="btn btn-warning btn-block" name="btnSubmit" value="Daftar" />
            <?php echo form_close();?>
          </div>
        </div>
        <div class="row">
          <span>Saya sudah mempunyai akun, silahkan <a href="<?= base_url('login');?>" class="font-weight-bold text-warning font-underline">Masuk</a></span>
        </div>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
