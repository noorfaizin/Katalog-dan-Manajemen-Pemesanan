<div class="row col-md-12 mx-auto p-5 bg-light">
    <div class="row col-md-12 mx-auto">
        <h1 class="mx-auto text-black font-weight-bold">PRODUK KAMI</h1><br>
    </div>
    <div class="row col-md-12 mx-auto">
        <hr class="mx-auto" style="width:5%;height:5px;margin-top:0;background:black;">
    </div>

    <div class="row col-md-12 mt-3">
        <!----------- FILTER ----------->
        <div class="col-md-3">
            <div class="dropdown text-dark">
                <a class="btn btn-warning btn-sm dropdown-toggle font-weight-bold float-right mr-2" role="button" id="cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;">
                    <i class="fas fa-filter mt-1 mr-1"></i> FILTER
                </a>
                <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="cart">
                    <table class="table table-hover m-0">
                        <tbody>
                            <tr>
                                <td><a href="<?php echo base_url('produk/produkbaru')?>" class="text-dark">Produk Terbaru</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo base_url('produk/hargarendah')?>" class="text-dark">Harga Terendah</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo base_url('produk/hargatinggi')?>" class="text-dark">Harga Tertinggi</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-7">
        </div>
        
    </div>

    <div class="row col-md-12 mt-3">
        <!----------- KATEGORI ----------->
        <div class="col-md-3">
            <div class="list-group col-md-12">
                <a class="list-groupitem list-group-item bg-dark"><strong>KATEGORI</strong></a>
                <a href="<?php echo base_url('produk')?>" class="text-dark list-group-item">Semua Produk</a>
                <?php foreach($category as $p){ ?>
                    <a href="<?= base_url('produk/daftar/'), $p['cat_id']; ?>" class="text-dark list-group-item"><?php echo $p['cat_name']; ?></a>
                <?php } ?>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row col-md-12">
                <!----------- TAMPIL DATA SEARCH ----------->
                <div class="col-md-12">
                    <?php if($title=$this->input->post('caridata')){ ?>
                        <div class="row col-md-12">
                            <h5 class="font-weight-light">
                            Menampilkan produk untuk "<span class="font-weight-bold font-italic"><?= $title ?></span> "</h5>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-12">
                <!----------- PRODUK ----------->
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
                                    <div class="col-md-4 mx-auto">
                                        <?php echo anchor('beranda/detail/'.$p['prod_id'],'<div class="btn btn-outline-dark btn-md">Detail</div>')?>
                                    </div>
                                    <div class="col-md-8 mx-auto">
                                        <?php echo anchor('cart/add_cart/'.$p['prod_id'],'<div class="btn btn-warning">Beli Sekarang</div>')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="row col-md-12 mt-2">
        <div class="col-md-3">
        </div>
        <!----------- JUMLAH RESULT DATA ----------->
        <div class="col-md-5 pl-4">
            <h5 class="mt-4 font-weight-light text-gray" style="font-size:15px;">"Jumlah result data : 
            <span class="font-weight-bold">
                <?php echo $total_rows;?>
            </span> Produk"</h5>
        </div>
        <!----------- PAGINATION ----------->
        <div class="col-md-4">
            <?php echo $this->pagination->create_links();?>
        </div>
    </div>

</div>