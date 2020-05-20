<!----------- HEADER ----------->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url('assets/dist/img/header/header1.jpg')?>" alt="First slide">
      <div id="head-pil1" class="p-3">
        <div class="font-weight-bold text-yellow" style="font-size:80px;">K⍜PIKU</div>
        <h5 class="font-weight-bold text-yellow mb-4" style="margin-top:-15px;letter-spacing:9.3px;">Ngopi Kui Uripku</h5>
        <h4 class="font-weight-light text-white" style="width:500px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h4>
        <div class="mt-5">
          <a href="#" class="btn btn-warning btn-lg mr-2">FeedBack</a>
          <a href="<?= base_url('beranda/contact');?>" class="btn btn-outline-warning btn-lg mr-2">Contact</a>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/dist/img/header/header2.png')?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/dist/img/header/header3.png')?>" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/dist/img/header/header4.png')?>" alt="Third slide">
    </div>
  </div>
</div>


<!------- WELCOME ------->
<div class="row mx-auto pl-5 pb-5 pt-5" style="width:100%;">
	<div class="row col-md-12 m-0">
    <div class="row col-md-12 mx-auto ml-3">
      <h1 class="text-black font-weight-bold ml-2">WELCOME TO K⍜PIKU</h1>
    </div>
    <div class="row col-md-12 mx-auto">
      <div class="text-black font-weight-bold bg-dark ml-2" style="width:5%;height:5px;margin-top:0;"></div>
    </div>
    <div class="row col-md-6 mx-auto mt-3">
      <h3 class="text-black font-weight-light">"I’M PROUD OF OUR COMMITMENT TO SUSTAINABLE AND ORGANIC FARMING. WE SEEK TO PRESEVE EARTH’S NATURAL BALANCE WHILE PRODUCING COFFEE WITH RICH, BOLD FLAVORS FOR PEOPLE AROUND THE WORLD TO ENJOY EVERYDAY.”</h3>
    </div>
    <div class="row col-md-6">
      <img id="img-welcome" src="<?php echo base_url('assets/dist/img/coffee.png')?>">
    </div>
  </div>
</div>

<!------- PRODUK ------->
<div class="row mx-auto pb-5 pt-5 bg-light" style="width:100%;">
	<div class="row col-md-12 mx-auto">
    <h1 class="mx-auto text-black font-weight-bold">PRODUK KITA</h1>
  </div>
	<div class="row col-md-12 mx-auto">
    <hr class="mx-auto" style="width:5%;height:5px;margin-top:0;background:black;">
  </div>
  <div class="row mx-auto pl-3 pr-3" style="width: 100%;">

    <div class="row col-md-12 mt-3 mb-5">
      <!----------- TABS PILLS ----------->
      <div class="col-sm-2">
          <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
              <a id="btnpills" onclick="openPills('semuaproduk')" class="nav-link text-dark active" data-toggle="pill" role="tab" aria-selected="true" style="cursor:pointer;">Semua Produk</a>
              <a id="btnpills" onclick="openPills('baru')" class="nav-link text-dark" data-toggle="pill" role="tab" aria-selected="true" style="cursor:pointer;">Produk Baru</a>
              <a id="btnpills" onclick="openPills('rendah')" class="nav-link text-dark" data-toggle="pill" role="tab" aria-selected="true" style="cursor:pointer;">Harga Terendah</a>
              <a id="btnpills" onclick="openPills('tinggi')" class="nav-link text-dark" data-toggle="pill" role="tab" aria-selected="true" style="cursor:pointer;">Harga Tertinggi</a>
              <a id="btnpills" onclick="openPills('kategori')" class="nav-link text-dark" data-toggle="pill" role="tab" aria-selected="true" style="cursor:pointer;">Kategori</a>
          </div>
      </div>

      <div class="row col-md-10">
        <div class="container-pills">

        <!----------- SEMUA PRODUK ----------->
        <div id="semuaproduk" class="w3-container pills row col-md-12">
          <div class="tab-content" id="semuaproduk">
            <div class="tab-pane text-left fade show active" role="tabpanel">
              <h4 class="font-weight-bold p-3 ml-3 rounded shadow" style="background-image: linear-gradient(to right, #f8f9fa , transparent);">Semua Produk</h4>
              <div class="row col-md-12">
              <?php foreach($products as $p){ ?>
              <div class="col-list-3">
                <div class="recent-car-list rounded">
                  <div class="col-lg text-dark d-flex justify-content-center">
                    <div class="card m-0 shadow">
                      <div class="card-header bg-dark">
                        <h5 class="card-title m-0 text-white"><?php echo $p['prod_name']; ?></h5>
                      </div>
                      <img src="<?= base_url()?>gambar/<?php echo $p['prod_img']; ?>" class="card-img-top mt-4" style="width:50%;margin:auto;" alt="image">
                      <div class="card-body mx-auto" style="margin-bottom:-30px;">
                        <td><h4 class="font-weight-light">Rp. <?php echo number_format($p['prod_price']) ?></h4></td>
                      </div><hr>
                      <div class="row col-md-12 mb-3 mx-auto">
                        <div class="row col-md-4 mx-auto">
                          <?php echo anchor('beranda/detail/'.$p['prod_id'],'<div class="btn btn-outline-dark btn-md">Detail</div>')?>
                        </div>
                        <div class="row col-md-8 mx-auto">
                          <?php echo anchor('cart/add_cart/'.$p['prod_id'],'<div class="btn btn-warning mx-auto"><i class="fas fa-cart-plus"></i> Beli Sekarang</div>')?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
              <a href="<?= base_url('produk');?>" class="btn btn-dark btn-lg m-3 mt-4">Lihat Semua</a>
              </div>
            </div>
          </div>
        </div>

        <!----------- PRODUK BARU ----------->
        <div id="baru" class="w3-container pills row col-md-12" style="display:none;">
          <div class="tab-content" id="baru">
            <div class="tab-pane text-left fade show active" role="tabpanel">
              <h4 class="font-weight-bold p-3 ml-3 rounded shadow" style="background-image: linear-gradient(to right, #f8f9fa , transparent);">Produk Baru</h4>
              <div class="row col-md-12">
              <?php foreach($baru as $p){ ?>
              <div class="col-list-3">
                <div class="recent-car-list rounded">
                  <div class="col-lg text-dark d-flex justify-content-center">
                    <div class="card m-0 shadow">
                      <div class="card-header bg-dark">
                        <h5 class="card-title m-0 text-white"><?php echo $p['prod_name']; ?></h5>
                      </div>
                      <img src="<?= base_url()?>gambar/<?php echo $p['prod_img']; ?>" class="card-img-top mt-4" style="width:50%;margin:auto;" alt="image">
                      <div class="card-body mx-auto" style="margin-bottom:-30px;">
                        <td><h4 class="font-weight-light">Rp. <?php echo number_format($p['prod_price']) ?></h4></td>
                      </div><hr>
                      <div class="row col-md-12 mb-3 mx-auto">
                        <div class="row col-md-4 mx-auto">
                          <?php echo anchor('beranda/detail/'.$p['prod_id'],'<div class="btn btn-outline-dark btn-md">Detail</div>')?>
                        </div>
                        <div class="row col-md-8 mx-auto">
                          <?php echo anchor('cart/add_cart/'.$p['prod_id'],'<div class="btn btn-warning mx-auto"><i class="fas fa-cart-plus"></i> Beli Sekarang</div>')?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
              <a href="<?= base_url('produk/produkbaru');?>" class="btn btn-dark btn-lg m-3 mt-4">Lihat Semua</a>
              </div>
            </div>
          </div>
        </div>

        <!----------- HARGA TERENDAH ----------->
        <div id="rendah" class="w3-container pills row col-md-12" style="display:none;">
          <div class="tab-content" id="rendah">
            <div class="tab-pane text-left fade show active" role="tabpanel">
              <h4 class="font-weight-bold p-3 ml-3 rounded shadow" style="background-image: linear-gradient(to right, #f8f9fa , transparent);">Harga Terendah</h4>
              <div class="row col-md-12">
              <?php foreach($hargarendah as $p){ ?>
              <div class="col-list-3">
                <div class="recent-car-list rounded">
                  <div class="col-lg text-dark d-flex justify-content-center">
                    <div class="card m-0 shadow">
                      <div class="card-header bg-dark">
                        <h5 class="card-title m-0 text-white"><?php echo $p['prod_name']; ?></h5>
                      </div>
                      <img src="<?= base_url()?>gambar/<?php echo $p['prod_img']; ?>" class="card-img-top mt-4" style="width:50%;margin:auto;" alt="image">
                      <div class="card-body mx-auto" style="margin-bottom:-30px;">
                        <td><h4 class="font-weight-light">Rp. <?php echo number_format($p['prod_price']) ?></h4></td>
                      </div><hr>
                      <div class="row col-md-12 mb-3 mx-auto">
                        <div class="row col-md-4 mx-auto">
                          <?php echo anchor('beranda/detail/'.$p['prod_id'],'<div class="btn btn-outline-dark btn-md">Detail</div>')?>
                        </div>
                        <div class="row col-md-8 mx-auto">
                          <?php echo anchor('cart/add_cart/'.$p['prod_id'],'<div class="btn btn-warning mx-auto"><i class="fas fa-cart-plus"></i> Beli Sekarang</div>')?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
              <a href="<?= base_url('produk/hargarendah');?>" class="btn btn-dark btn-lg m-3 mt-4">Lihat Semua</a>
              </div>
            </div>
          </div>
        </div>

        <!----------- HARGA TERTINGGI ----------->
        <div id="tinggi" class="w3-container pills row col-md-12" style="display:none;">
          <div class="tab-content" id="tinggi">
            <div class="tab-pane text-left fade show active" role="tabpanel">
              <h4 class="font-weight-bold p-3 ml-3 rounded shadow" style="background-image: linear-gradient(to right, #f8f9fa , transparent);">Harga Tertinggi</h4>
              <div class="row col-md-12">
              <?php foreach($hargatinggi as $p){ ?>
              <div class="col-list-3">
                <div class="recent-car-list rounded">
                  <div class="col-lg text-dark d-flex justify-content-center">
                    <div class="card m-0 shadow">
                      <div class="card-header bg-dark">
                        <h5 class="card-title m-0 text-white"><?php echo $p['prod_name']; ?></h5>
                      </div>
                      <img src="<?= base_url()?>gambar/<?php echo $p['prod_img']; ?>" class="card-img-top mt-4" style="width:50%;margin:auto;" alt="image">
                      <div class="card-body mx-auto" style="margin-bottom:-30px;">
                        <td><h4 class="font-weight-light">Rp. <?php echo number_format($p['prod_price']) ?></h4></td>
                      </div><hr>
                      <div class="row col-md-12 mb-3 mx-auto">
                        <div class="row col-md-4 mx-auto">
                          <?php echo anchor('beranda/detail/'.$p['prod_id'],'<div class="btn btn-outline-dark btn-md">Detail</div>')?>
                        </div>
                        <div class="row col-md-8 mx-auto">
                          <?php echo anchor('cart/add_cart/'.$p['prod_id'],'<div class="btn btn-warning mx-auto"><i class="fas fa-cart-plus"></i> Beli Sekarang</div>')?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
              <a href="<?= base_url('produk/hargatinggi');?>" class="btn btn-dark btn-lg m-3 mt-4">Lihat Semua</a>
              </div>
            </div>
          </div>
        </div>

        <!----------- KATEGORI ----------->
        <div id="kategori" class="w3-container pills row col-md-12" style="display:none;">
          <div class="tab-content" id="kategori">
            <div class="tab-pane text-left fade show active" role="tabpanel">
              <h4 class="font-weight-bold p-3 ml-3 rounded shadow" style="background-image: linear-gradient(to right, #f8f9fa , transparent);">Daftar Kategori</h4>
              <div class="row col-md-12">
              <?php foreach($category as $p){ ?>
              <div class="col-list-3">
                <div class="recent-car-list rounded">
                  <div class="col-lg text-dark">
                    <div class="card m-0 shadow">
                      <div class="card-header bg-dark">
                        <h5 class="card-title m-0 text-white"><?php echo $p['cat_name']; ?></h5>
                      </div><hr>
                      <div class="card-body text-right">
                          <a href="<?= base_url('produk/daftar/'), $p['cat_id']; ?>" class="btn btn-outline-dark btn-sm"><?php echo $p['cat_name']; ?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
              </div>

            </div>
          </div>
        </div>

        </div>
      </div>

    </div>
  </div>
</div>


<!------- MENU HERE ------->
<div class="row mx-auto pl-5 pb-5 pt-5" style="width:100%;backgorund-image:;">
	<div class="row col-md-12 mx-auto">
    <h1 class="mx-auto text-black font-weight-bold">MENU KITA</h1>
  </div>
	<div class="row col-md-12 mx-auto mb-3">
    <hr class="mx-auto" style="width:5%;height:5px;margin-top:0;background:black;">
  </div>
  <div class="row col-md-4 mx-auto">
      <table class="table">
        <thead class="bg-light">
          <tr>
            <td><h3>COFFEEE</h3></td>
            <td colspan="1"></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><b class="text-dark">Espresso Single</b></td>
            <td class="font-weight-bold" align="right">8K</td>
          </tr>
          <tr>
            <td><b class="text-dark">Espresso Double</b></td>
            <td class="font-weight-bold" align="right">14K</td>
          </tr>
          <tr class="text-dark">
            <td><b class="text-dark">Kopi Susu</b> (hot/iced)</td>
            <td class="font-weight-bold" align="right">13K</td>
          </tr>
          <tr>
            <td><b class="text-dark">Cappucinno</b> (hot/iced)</td>
            <td class="font-weight-bold" align="right">15K</td>
          </tr>
          <tr>
            <td><b class="text-dark">Coffee Latte</b> (hot/iced)</td>
            <td class="font-weight-bold" align="right">20K</td>
          </tr>
          <tr>
            <td><b class="text-dark">Coffee Milo</b> (hot/iced)</td>
            <td class="font-weight-bold" align="right">15K</td>
          </tr>
          <tr>
            <td><b class="text-dark">Kopi Hitam</b> (hot/iced)</td>
            <td class="font-weight-bold" align="right">13K</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row col-md-4 mx-auto">
      <table class="table">
        <Thead class="bg-light">
          <tr>
            <td><h3>NON COFFEEE</h3></td>
            <td colspan="1"></td>
          </tr>
        </Thead>
        <tbody>
          <tr>
            <td><b class="text-dark">Dark Choco</b> (hot/iced)</td>
            <td class="font-weight-bold" align="right">13K</td>
          </tr>
          <tr>
            <td><b class="text-dark">Red Velvet</b> (hot/iced)</td>
            <td class="font-weight-bold" align="right">13K</td>
          </tr>
          <tr>
            <td><b class="text-dark">Matcha</b> (hot/iced)</td>
            <td class="font-weight-bold" align="right">13K</td>
          </tr>
          <tr>
            <td><b class="text-dark">Mineral Water</b></td>
            <td class="font-weight-bold" align="right">2K</td>
          </tr>
        </tbody>
      </table>
      <table class="table">
        <Thead class="bg-light">
          <tr>
            <td><h3>SNACK</h3></td>
            <td colspan="1"></td>
          </tr>
        </Thead>
        <tbody>
          <tr>
            <td><b class="text-dark">French fries</b> (original/barbeque)</td>
            <td class="font-weight-bold" align="right">13K</td>
          </tr>
        </tbody>
      </table>
    </div>
</div>

<!------- GAMBAR MENU ------->
<div id="produk" class="carousel slide bg-light" data-ride="carousel">
<ol class="carousel-indicators">
                <li data-target="#produk" data-slide-to="0" class="active"></li>
                <li data-target="#produk" data-slide-to="1"></li>
                <li data-target="#produk" data-slide-to="2"></li>
              </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row col-md-9 mx-auto">
        <div class="col-md-3 mx-auto p-5">
          <img class="d-block w-100" src="<?php echo base_url('product/1.png')?>" alt="First slide">
          <div class="text-center">Menu1</div>
        </div>
        <div class="col-md-3 mx-auto p-5">
          <img class="d-block w-100" src="<?php echo base_url('product/2.png')?>" alt="First slide">
          <div class="text-center">Menu2</div>
        </div>
        <div class="col-md-3 mx-auto p-5">
          <img class="d-block w-100" src="<?php echo base_url('product/3.png')?>" alt="First slide">
          <div class="text-center">Menu3</div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row col-md-9 mx-auto">
        <div class="col-md-3 mx-auto p-5">
          <img class="d-block w-100" src="<?php echo base_url('product/4.png')?>" alt="First slide">
          <div class="text-center">Menu4</div>
        </div>
        <div class="col-md-3 mx-auto p-5">
          <img class="d-block w-100" src="<?php echo base_url('product/5.png')?>" alt="First slide">
          <div class="text-center">Menu5</div>
        </div>
        <div class="col-md-3 mx-auto p-5">
          <img class="d-block w-100" src="<?php echo base_url('product/6.png')?>" alt="First slide">
          <div class="text-center">Menu6</div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row col-md-9 mx-auto">
        <div class="col-md-3 mx-auto p-5">
          <img class="d-block w-100" src="<?php echo base_url('product/7.png')?>" alt="First slide">
          <div class="text-center">Menu7</div>
        </div>
        <div class="col-md-3 mx-auto p-5">
          <img class="d-block w-100" src="<?php echo base_url('product/8.png')?>" alt="First slide">
          <div class="text-center">Menu8</div>
        </div>
        <div class="col-md-3 mx-auto p-5">
          <img class="d-block w-100" src="<?php echo base_url('product/9.png')?>" alt="First slide">
          <div class="text-center">Menu9</div>
        </div>
      </div>
    </div>
  </div>
</div>



<!------- WELCOME ------->
<div class="row mx-auto pb-5" style="width:100%;">
	<div class="row col-md-12 m-0">
    <div class="row col-md-6">
      <img id="img-menu" src="<?php echo base_url('assets/dist/img/coffee-menu.png')?>">
    </div>
    <div class="row col-md-6 mx-auto mt-3">
      <div class="row col-md-12 mx-auto mt-3">
        <div class="card">
          <div class="card-header">
            <h3 class="text-black">DOKUMENTASI</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="galery" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#galery" data-slide-to="0" class="active"></li>
                <li data-target="#galery" data-slide-to="1"></li>
                <li data-target="#galery" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="https://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
    <a href="#" class="btn btn-outline-dark btn-lg mr-2">Lihat Dokumentasi</a>

      </div>
    </div>
  </div>
</div>
    
    
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
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