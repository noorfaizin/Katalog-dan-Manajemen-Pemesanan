<div class="col-md-7 mx-auto"><?= $this->session->flashdata('message');?></div>

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
                    <div class="list-group col-md-12 p-0">
                        <a href="<?= base_url('produk/produkbaru')?>" class="text-dark list-group-item">Produk Terbaru</a>
                    </div>
                    <div class="list-group col-md-12 p-0">
                        <a href="<?= base_url('produk/hargarendah')?>" class="text-dark list-group-item">Harga Terendah</a>
                    </div>
                    <div class="list-group col-md-12 p-0">
                        <a href="<?= base_url('produk/hargatinggi')?>" class="text-dark list-group-item">Harga Tertinggi</a>
                    </div>
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
                <?php if(empty($products)) : ?>
                <tr>
                    <td colspan="8">
                        <div class="alert alert-light" role="alert">
                            <center><strong class="text-danger">Data produk tidak ditemukan!</strong></center>
                        </div>
                    </td>
                </tr>
                <?php endif;?>
                <!----------- PRODUK ----------->
                <?php foreach($products as $p){ ?>
                <div class="col-list-3 p-0" style="border-radius:15px">
                    <div id="myProduct" class="recent-car-list ml-3">
                        <div class="col-lg text-dark justify-content-center p-0">
                        <a href="<?= base_url('beranda/detail/'.$p['prod_id'])?>" target="blank">
                            <div class="card m-0 shadow" style="border-radius:15px">
                                <div  class="card-header text-center m-0">
                                    <img src="<?= base_url()?>gambar/<?php echo $p['prod_img']; ?>" class="card-img-top rounded" alt="image">
                                    <div class="middle">
                                        <?php
                                        if(!$p['quantity'] == 0 ){?>
                                            <div class="alert alert-success shadow font-weight-bold p-2"><?= 'Masih Ada';?></div>
                                        <?php }else{ ?>
                                            <div class="alert alert-danger shadow font-weight-bold p-2"><?= 'Habis';?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                    
                                <div class="card-body p-0" style="margin-bottom:-10px;">
                                    <div class="col-md-12 bg-dark p-2">
                                        <h5 class="text-white font-weight-bold m-0"><?php echo $p['prod_name']; ?></h5>
                                    </div>
                                    <div class="col-md-12  p-2">
                                        <table class="ml-2">
                                            <tbody>
                                                <tr>
                                                    <td><small class="text-dark">Harga</small></td>
                                                    <td width="10px" align="center">:</td>
                                                    <td><small class="text-success font-weight-bold font-italic">Rp. <?php echo number_format($p['prod_price']) ?>,-</small></td>
                                                </tr>
                                                <tr>
                                                    <td><small class="text-dark">Kategori</small></td>
                                                    <td width="10px" align="center">:</td>
                                                    <td><small class="badge badge-warning"><?php echo $p['cat_name']; ?></small></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><hr>
                                <div class="col-md-12 mb-3">
                                    <?php
                                    if(!$p['quantity'] == 0 ){?>
                                        <?php echo anchor('cart/add_cart/'.$p['prod_id'],'<div class="btn btn-sm btn-outline-warning text-dark float-right mr-1"><i class="fas fa-cart-plus"></i> Beli Sekarang</div>')?>
                                    <?php }else{ ?>
                                        <div class="font-weight-bold text-danger text-center p-1 m-0">Stok Habis</div>
                                    <?php } ?>
                                </div>
                            </div>
                        </a>
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