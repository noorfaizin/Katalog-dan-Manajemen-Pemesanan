<!------- ABOUT US ------->
<div class="row mx-auto pb-5 pt-5 bg-light" style="width:100%;">
	<div class="row col-md-12 mx-auto">
    <h1 class="mx-auto text-black font-weight-bold">HUBUNGI KAMI</h1>
  </div>
	<div class="row col-md-12 mx-auto">
    <hr class="mx-auto" style="width:5%;height:5px;margin-top:0;background:black;">
  </div>
  <div class="row col-md-12 mx-auto">
    <div class="col-md-10 mx-auto card">
      <div class="card-header">
        <h3 class="text-black">Hubungi Kami</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form class="form-horizontal col-md-12" action="<?php echo base_url('beranda/addKomentar'); ?>" method="post" enctype="multipart/form-data" role="form">
          <div class="row col-md-12">
            <div class="col-md-4">
              <img class="mx-auto" src="<?php echo base_url('assets/dist/img/favicon.png')?>" alt="KOPIKU">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7">
              <div class="input-group">
                  <div class="form-group col-md-12">
                  <label class="col-md-12 control-label">Nama Lengkap</label>
                      <div class="col-md-12">
                        <input class="form-control" placeholder="Nama Lengkap" name="nama" required/>
                      </div>
                  </div>
              </div>
              <div class="input-group">
                  <div class="form-group col-md-6">
                  <label class="col-md-12 control-label">No HP</label>
                      <div class="col-md-12">
                          <input type="text" class="form-control" placeholder="No.Telp" name="telp">
                      </div>
                  </div>
                  <div class="form-group col-md-6">
                  <label class="col-md-12  control-label">Email</label>
                      <div class="col-md-12">
                          <input type="email" class="form-control" placeholder="Email" name="email" required/>
                      </div>
                  </div>
              </div>
              <div class="form-group col-md-12">
                  <label class="col-md-12 control-label">Komentar</label>
                  <div class="col-md-12">
                      <textarea class="form-control" placeholder="Komentar" name="komen"></textarea>
                  </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-warning" type="submit"> Kirim&nbsp;</button>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>

<script>
function openPills(cityName) {
  var i;
  var x = document.getElementsByClassName("pills");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";
}
</script>