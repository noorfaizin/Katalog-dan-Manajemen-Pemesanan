<div class="content-wrapper">
    <div class="container-pills">
        <div id="list-kat" class="w3-container pills">
            <!-- Content Header (Page header) --> 
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Produk Berdasarkan Kategori</h1>
                    </div>
                    <div class="col-sm-6">
                    </div>
                    </div>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header bg-dark">
                        <h3 class="card-title">Daftar Kategori</h3>
                    </div>
                    <div class="row col-md-12">
                        <div class="card-body">
                            <?php foreach($category as $p){ ?>
                            <div class="col-list-3">
                                <div class="recent-car-list rounded mx-auto">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header bg-dark">
                                            <h5 class="text-black m-0"><?php echo $p['cat_name']; ?></h5>
                                        </div>
                                        <div class="card-body text-right">
                                            <a href="<?= base_url('category/daftar/'), $p['cat_id']; ?>" class="btn btn-outline-dark btn-sm"><?php echo $p['cat_name']; ?></a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="card-footer text-right">K⍜PIKU © 2020 - by Noor Faizin</div>
                </div>
            </section>
        </div>
    </div>
</div>