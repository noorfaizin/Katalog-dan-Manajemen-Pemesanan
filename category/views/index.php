<div class="content-wrapper">
    <div class="container-pills">
        <div id="list-kat" class="w3-container pills">
            <!-- Content Header (Page header) --> 
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Kategori</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                            <button class="btn bg-warning btn-sm" onclick="openPills('add-kat')"><i class="fas fa-plus"></i> Tambah Kategori</button>
                            </li>
                        </ol>
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
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="bg-warning">
                                <tr>
                                    <th style="width: 1%">
                                        ID
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th style="width: 20%">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $p){ ?>
                                    <tr>
                                        <td width="20%"><?php echo $p['cat_id']; ?></td>
                                        <td><?php echo $p['cat_name']; ?></td>
                                        <td width="20%">
                                            <center>
                                                <a href="javascript:;"
                                                    data-cat_id="<?php echo $p['cat_id']; ?>"
                                                    data-cat_name="<?php echo $p['cat_name']; ?>"
                                                    data-toggle="modal" data-target="#edit-kategori">
                                                    <button  data-toggle="modal" data-target="#ubah-data" class="btn bg-info btn-sm"><i class="fas fa-pencil-alt"></i> Edit</button>
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="<?php echo base_url('category/delete/'.$p['cat_id'])?>" onclick="return confirm('Yakin untuk menghapus kategori produk ini?')"><i class="fas fa-trash"></i> Delete</a>
                                            <center>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-right">K⍜PIKU © 2020 - by Noor Faizin</div>
                </div>
            </section>
        </div>

        <div id="add-kat" class="w3-container pills" style="display:none;"> 
            <!-- Content Header (Page header) --> 
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Kategori</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                            <button class="btn bg-warning btn-sm" onclick="openPills('list-kat')"><i class="fas fa-undo"></i> Kembali</button>
                            </li>
                        </ol>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header bg-dark">
                        <h3 class="card-title">Tambah Kategori</h3>
                    </div>
                    <div class="card-body">
                        <form class="user" method="POST" action="<?php echo base_url(). 'category/tambah_aksi'; ?>" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Kategori</label>
                                <div class="col-sm-5">
                                    <input type="text" name="cat_name" class="form-control" placeholder="Nama" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <input class="btn btn-danger" type="submit" name="btnSubmit" value="Tambah Kategori">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-right">Input Kategori Produk K⍜PIKU</div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Modal Ubah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-kategori" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title">Edit Kategori Produk</h4>
                <button aria-hidden="true" data-dismiss="modal" class="text-white close" type="button">×</button>
            </div>
            
            <form class="form-horizontal" action="<?php echo base_url('category/update')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-12 col-sm-12 control-label">Nama Kategori</label>
                        <div class="col-lg-12">
                            <input type="hidden" id="cat_id" name="cat_id">
                            <input type="text" class="form-control" id="cat_name" name="cat_name">
                        </div>
                    </div>
                </div>
                     
                <div class="modal-footer">
                    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>