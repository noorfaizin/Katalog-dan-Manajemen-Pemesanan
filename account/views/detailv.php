<!-- Header -->
<div class="row col-md-12 mt-5 pl-4">
  <div class="col-md-12 mx-auto">
    <h4 class="font-weight-light ml-5">
      <a class="text-dark" href="<?= base_url('beranda')?>">Home</a> / 
      <a class="text-dark" href="<?= base_url('produk')?>">Produk</a> / 
      <?php foreach($dprod as $dp){ ?>
        <span><a class="text-dark" href="<?= base_url('produk/daftar/'), $dp['cat_id']; ?>"><?= $dp['cat_name'];?></a></span> / 
        <span><?= $dp['prod_name'];?></span>
      <?php } ?>
    </h4>
    <hr>
  </div>
</div>

<!-- Content -->
<div class="row col-md-12 p-3" style="margin-bottom:100px">
  <div class="row col-md-10 mx-auto">
  <?php foreach($dprod as $dp){ ?>
    <!-- Foto Produk -->
    <div class="col-md-6">
      <!----------- HEADER ----------->
      <div id="carouselExampleIndicators" class="carousel slide bg-warning border p-2 bg-white" data-ride="carousel" style="width:350px;">
        <ol class="carousel-indicators-image">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="width:70px;">
            <img class="d-block" src="<?= base_url('gambar/'). $dp['prod_img'];?>" alt="First slide">
          </li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" style="width:70px;">
            <img class="d-block" src="<?= base_url('gambar/'). $dp['prod_img2'];?>" alt="First slide">
          </li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2" style="width:70px;">
            <img class="d-block" src="<?= base_url('gambar/'). $dp['prod_img3'];?>" alt="First slide">
          </li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block" style="width:350px;" src="<?= base_url('gambar/'). $dp['prod_img'];?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block" style="width:350px;" src="<?= base_url('gambar/'). $dp['prod_img2'];?>" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block" style="width:350px;" src="<?= base_url('gambar/'). $dp['prod_img3'];?>" alt="Third slide">
          </div>
        </div>
      </div>
    </div>

    <!-- Spesifikasi -->
    <div class="col-md-6">
      <h5 class="badge badge-warning"><?= $dp['cat_name']; ?></h5>
      <h4 class="font-weight-bold"><?= $dp['prod_name']; ?></h4>
      <span class="font-weight-bold font-italic text-gray">"</span>
      <small class="font-italic text-gray">
        <?php
          if(!$dp['prod_desc']){
            echo 'Tidak ada deskripsi';
          }else{
            echo $dp['prod_desc'];
          }
        ?>
      </small>
      <span class="font-weight-bold font-italic text-gray">"</span>
      <hr>
      <table>
        <tr valign="top">
          <td width="50px"><h6 class="text-gray font-italic">Harga</h6></td>
          <td><h4 class="text-danger font-weight-bold ml-3">Rp. <?= number_format($dp['prod_price']) ?>,-</h4></td>
        </tr>
      </table>
      <hr>
      <table>
        <tr valign="top">
          <td width="50px"><h6 class="text-gray font-italic">Stok</h6></td>
          <td><h4 class="text-success font-weight-bold ml-3">
            <?php
              if(!$dp['quantity'] == 0 ){
                echo $dp['quantity'];
              }else{?>
              <div class="badge badge-danger"><?= 'Stok Habis';?></div>
            <?php } ?>
          </h4></td>
        </tr>
      </table>

      <div class="mt-4">
      <?php
      if(!$dp['quantity'] == 0 ){?>
          <?= anchor('cart/add_cart/'.$dp['prod_id'],'<div class="btn btn-md btn-warning text-dark mr-1"><i class="fas fa-cart-plus"></i> Beli Sekarang</div>')?>
      <?php }else{ ?>
          <div class="font-weight-light font-italic text-gray text-center p-1 m-0">Ditunggu stok readynya ya bro..</div>
      <?php } ?>
        
      </div>
    </div>
  <?php } ?>
  </div>
  
</div>