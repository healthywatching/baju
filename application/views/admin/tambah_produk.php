        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">
                        <span class="page-title-icon bg-gradient-dark text-white mr-2">
                            <i class="mdi mdi-tshirt-crew"></i>
                        </span> <?= $title; ?> </h3>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- form -->
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="<?= base_url('admin/tambahprodukact'); ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama">Nama Produk</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Barang" name="nama" required>
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga Produk</label>
                                    <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga" name="harga" required>
                                    <?= form_error('harga', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi Produk</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10" placeholder="Masukkan Deskripsi..." required></textarea>
                                    <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Upload Gambar Produk</label>
                                    <input type="file" name="gambar" id="gambar" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" id="gambar" disabled placeholder="Upload Gambar">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse mdi mdi-upload btn-icon-prepend btn btn-gradient-dark" type="button"> Upload</button>
                                        </span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-gradient-info mr-2">Simpan</button>
                                <a href="<?= base_url('admin/produk'); ?>" onclick="return confirm('Yakin Untuk Membatalkan Dan Kembali Ke Halaman Produk ?');" class="btn btn-gradient-warning btn-icon-text">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end form -->
            </div>
            <!-- content-wrapper ends -->