<!------- MY ACCOUNT ------->

    <div class="row col-md-9 ml-3 mt-3">
      <div class="col-md-12">
        <h4 class="alert alert-light font-weight-bold"><i class="fas fa-user mr-2"></i>Informasi Akun</h4>
        <div class="row col-md-12">
            <h3 class="mx-auto mt-3 mb-4">Pastikan data anda benar</h3>
            <table class="table col-md-12">
              <tr>
              <td width="15%">Nama</td>
              <td width="1px">:</td>
              <td><?= $users['nama'];?></td>
              </tr>
              <tr>
              <td>Alamat</td>
              <td>:</td>
              <td><?= $users['alamat'];?></td>
              </tr>
              <tr>
              <td>Email</td>
              <td>:</td>
              <td><?= $users['email'];?></td>
              </tr>
              <tr>
              <td>No HP</td>
              <td>:</td>
              <td><?= $users['nohp'];?></td>
              </tr>
            </table>
            <?php echo anchor('User_Dashboard/edit','<div class="btn btn-info btn-sm"><i class="fas fa-edit mr-1"></i> Edit Data</div>')?>
        </div>
      </div>

    </div>