<!------- MY ACCOUNT ------->

    <div class="row col-md-9 ml-3 mt-3">
      <div class="col-md-12">
        <h4 class="alert alert-light font-weight-bold"><i class="fas fa-cog fa-spin mr-2"></i>Pengaturan Akun</h4>
          <div class="row justify-content-end mr-1">
            <button data-toggle="modal" data-target="#nonaktif" type="button" class="btn btn-light text-danger" data-dismiss="modal"><i class="fas fa-power-off"></i> Nonaktifkan Akun</button>
          </div>
        <div class="row col-md-12">
            <h3 class="mx-auto mt-3 mb-4">Edit data akun</h3>
            <table class="table col-md-12">
            <form action="<?php echo base_url('User_Dashboard/edit'); ?>" method="post">
              <div class="input-group">
                  <div class="form-group col-md-6">
                  <label class="col-md-12 control-label">Nama Lengkap</label>
                      <div class="col-md-12">
                        <input type="hidden" class="form-control" name="id_user" value="<?= $users['id_user'];?>"/>
                        <input class="form-control" name="nama" value="<?= $users['nama'];?>"/>
                        <?= form_error('nama','<small class="text-danger pl-3">','</small>');?>
                      </div>
                  </div>
                  <div class="form-group col-md-6">
                  <label class="col-md-12  control-label">Email</label>
                      <div class="col-md-12">
                        <input type="text" class="form-control" name="email" value="<?= $users['email'];?>">
                        <?= form_error('email','<small class="text-danger pl-3">','</small>');?>
                      </div>
                  </div>
              </div>
              <div class="input-group">
                  <div class="form-group col-md-6">
                  <label class="col-md-12 control-label">Alamat</label>
                  <div class="col-md-12">
                      <textarea class="form-control" name="alamat"><?= $users['alamat'];?></textarea>
                      <?= form_error('alamat','<small class="text-danger pl-3">','</small>');?>
                  </div>
                  </div>
                  <div class="form-group col-md-6">
                  <div class="input-group">
                      <div class="form-group col-md-6">
                      <label class="col-md-12 control-label">No HP</label>
                          <div class="col-md-12">
                              <input type="text" class="form-control" name="nohp" value="<?= $users['nohp'];?>">
                              <?= form_error('nohp','<small class="text-danger pl-3">','</small>');?>
                          </div>
                      </div>
                      <div class="form-group col-md-6">
                      <label class="col-md-12  control-label">Username</label>
                          <div class="col-md-12">
                              <input type="text" class="form-control" name="username" value="<?= $users['username'];?>" readonly/>
                          </div>
                      </div>
                  </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-info" type="submit"> Simpan</button>
                <a href="<?= base_url('user_dashboard/akun');?>" type="button" class="btn btn-danger" data-dismiss="modal"> Batal</a>
              </div>
            </form>
            </table>
        </div>
      </div>

    </div>