<div style="width:100%;background:url(<?=base_url()?>assets/dist/img/bg.jpg);background-attachment:fixed;">

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
      <img class="d-block w-100" src="<?= base_url('assets/dist/img/header/header1.jpg')?>" alt="First slide">
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
      <img class="d-block w-100" src="<?= base_url('assets/dist/img/header/header2.png')?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url('assets/dist/img/header/header3.png')?>" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url('assets/dist/img/header/header4.png')?>" alt="Third slide">
    </div>
  </div>
</div>


<!------- WELCOME ------->
<div class="row mx-auto pl-5 pt-5 bg-white" style="width:100%;">
	<div id="welcome" class="row col-md-12 m-0">
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
      <img id="img-welcome" src="<?= base_url('assets/dist/img/coffee.png')?>">
    </div>
  </div>
  <!------- KATEGORI ------->
  <div class="row col-md-12 mt-5 mx-auto">
    <div class="col-md-12">
      <h4 class="text-dark font-weight-bold ml-3">Kategori</h4>
    </div>
    <div class="row col-md-12 mb-5 mx-auto">
      <div class="col-md-8">
        <?php foreach($category as $p){ ?>
          <div class="col-list-3">
            <div class="recent-car-list rounded">
                <a id="callout" href="<?= base_url('produk/daftar/'), $p['cat_id']; ?>" target="blank" style="text-decoration:none">
                  <div id="callout" class="callout callout-warning m-0 p-2">
                    <div class="row col-md-12">
                      <div class="col-md-3">
                        <img alt="foto" width="50px" src="<?= base_url('assets/dist/img/favicon.png')?>">
                      </div>
                      <div class="col-md-9">
                        <h6 class="font-weight-bold m-0"><?= $p['cat_name']; ?></h6>
                        <h6 class="font-weight-light m-0" style="font-size:10px;">Ngopi Kui Uripku</h6>
                      </div>
                    </div>
                  </div>
                </a>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
</div>



<!------- PRODUK ------->
<div class="row mx-auto pb-5 pt-5" style="width:100%;background-color:rgb(255,255,255, .8)">
	<div class="row col-md-12 mx-auto">
    <h1 class="mx-auto text-black font-weight-bold">PRODUK KITA</h1>
  </div>
	<div class="row col-md-12 mx-auto">
    <hr class="mx-auto" style="width:5%;height:5px;margin-top:0;background:black;">
  </div>
  <div id="produk-kita" class="row mx-auto pl-5 pr-5" style="width: 100%;">
    <div class="col-md-12">
      <?php foreach($products as $p){ ?>
      <div class="col-list-4" style="border-radius:15px">
        <div id="myProduct" class="recent-car-list ml-3" >
            <div class="col-lg text-dark justify-content-center p-0">
            <a href="<?= base_url('beranda/detail/'.$p['prod_id'])?>" target="blank">
                <div class="card m-0 shadow" style="border-radius:15px">
                    <div  class="card-header text-center m-0">
                        <img src="<?= base_url()?>gambar/<?= $p['prod_img']; ?>" class="card-img-top rounded" alt="image">
                        <div class="middle">
                            <div class="alert alert-success shadow font-weight-bold p-2">Ready Stock</div>
                        </div>
                    </div>
                        
                    <div class="card-body p-0" style="margin-bottom:-10px;">
                        <div class="col-md-12 bg-dark p-2">
                            <h5 class="text-white font-weight-bold m-0"><?= $p['prod_name']; ?></h5>
                        </div>
                        <div class="col-md-12  p-2">
                            <table class="ml-2">
                                <tbody>
                                    <tr>
                                        <td><small class="text-dark">Harga</small></td>
                                        <td width="10px" align="center">:</td>
                                        <td><small class="text-success font-weight-bold font-italic">Rp. <?= number_format($p['prod_price']) ?>,-</small></td>
                                    </tr>
                                    <tr>
                                        <td><small class="text-dark">Kategori</small></td>
                                        <td width="10px" align="center">:</td>
                                        <td><small class="badge badge-warning"><?= $p['cat_name']; ?></small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><hr>
                    <div class="col-md-12 mb-3">
                        <?= anchor('cart/add_cart/'.$p['prod_id'],'<div class="btn btn-sm btn-outline-warning text-dark float-right mr-1"><i class="fas fa-cart-plus"></i> Beli Sekarang</div>')?>
                    </div>
                </div>
            </a>
            </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <div class="col-md-12 text-center mt-5">
      <a href="<?= base_url('produk');?>" class="btn btn-outline-dark btn-lg">Muat Lebih Banyak</a>
    </div>
  </div>
</div>


<!------- MENU HERE ------->
<div class="bg-white col-md-12 p-0">
<div class="row mx-auto pb-5 pt-5" style="background-size:cover;background:url(<?=base_url()?>assets/dist/img/menu.jpg) repeat-x;">
	<div class="row col-md-12 mx-auto">
    <h1 class="mx-auto text-black font-weight-bold">MENU KITA</h1>
  </div>
	<div class="row col-md-12 mx-auto mb-3">
    <hr class="mx-auto" style="width:5%;height:5px;margin-top:0;background:black;">
  </div>

    <div id="menu-kita" class="row col-md-12 mx-auto">
      <div class="col-md-4 mx-auto">
        <div class="card mb-3" style="background-color:rgb(255,255,255, .8)">
          <div class="card-header bg-dark"><h3 class="m-0 text-white font-weight-bold">COFFEEE</h3></div>
          <div class="card-body p-2">
            <table class="table">
              <?php foreach($menukopi as $mk){ ?>
              <tbody>
                <tr>
                  <td><b class="text-dark"><?= $mk['prod_name']; ?></b></td>
                  <td class="font-weight-bold" align="right">Rp. <?= number_format($mk['prod_price']); ?>,-</td>
                </tr>
              </tbody>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>

      <div class="col-md-4 mx-auto">
        <div class="card mb-3" style="background-color:rgb(255,255,255, .8)">
        <div class="card-header bg-dark"><h3 class="m-0 text-white font-weight-bold">NON COFFEEE</h3></div>
          <div class="card-body p-2">
            <table class="table">
              <?php foreach($tidakkopi as $tk){ ?>
              <tbody>
                <tr>
                  <td><b class="text-dark"><?= $tk['prod_name']; ?></b></td>
                  <td class="font-weight-bold" align="right">Rp. <?= number_format($tk['prod_price']); ?>,-</td>
                </tr>
              </tbody>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>

    </div>

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
          <img class="d-block w-100" src="<?= base_url('product/1.png')?>" alt="First slide">
          <div class="text-center">Menu1</div>
        </div>
        <div class="col-md-3 mx-auto p-5">
          <img class="d-block w-100" src="<?= base_url('product/2.png')?>" alt="First slide">
          <div class="text-center">Menu2</div>
        </div>
        <div class="col-md-3 mx-auto p-5">
          <img class="d-block w-100" src="<?= base_url('product/3.png')?>" alt="First slide">
          <div class="text-center">Menu3</div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row col-md-9 mx-auto">
        <div class="col-md-3 mx-auto p-5">
          <img class="d-block w-100" src="<?= base_url('product/4.png')?>" alt="First slide">
          <div class="text-center">Menu4</div>
        </div>
        <div class="col-md-3 mx-auto p-5">
          <img class="d-block w-100" src="<?= base_url('product/5.png')?>" alt="First slide">
          <div class="text-center">Menu5</div>
        </div>
        <div class="col-md-3 mx-auto p-5">
          <img class="d-block w-100" src="<?= base_url('product/6.png')?>" alt="First slide">
          <div class="text-center">Menu6</div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row col-md-9 mx-auto">
        <div class="col-md-3 mx-auto p-5">
          <img class="d-block w-100" src="<?= base_url('product/7.png')?>" alt="First slide">
          <div class="text-center">Menu7</div>
        </div>
        <div class="col-md-3 mx-auto p-5">
          <img class="d-block w-100" src="<?= base_url('product/8.png')?>" alt="First slide">
          <div class="text-center">Menu8</div>
        </div>
        <div class="col-md-3 mx-auto p-5">
          <img class="d-block w-100" src="<?= base_url('product/9.png')?>" alt="First slide">
          <div class="text-center">Menu9</div>
        </div>
      </div>
    </div>
  </div>
</div>



<!------- WELCOME ------->
<div class="row mx-auto pb-5 bg-white" style="width:100%;">
	<div class="row col-md-12 m-0">
    <div class="row col-md-6">
      <img id="img-menu" src="<?= base_url('assets/dist/img/coffee-menu.png')?>">
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