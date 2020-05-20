<div class="row col-md-12 mx-auto">
    <div class="col-md-10 mx-auto mb-5">
        <?php foreach($data as $p){ ?>
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