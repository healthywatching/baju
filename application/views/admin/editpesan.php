        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">
                        <span class="page-title-icon bg-gradient-dark text-white mr-2">
                            <i class="mdi mdi-gift"></i>
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
                            Atas Nama : <div class="card-title"><?= $checkout['nama_user']; ?></div>
                            Alamat : <div class="card-title"><?= $checkout['alamat']; ?></div>
                            No Handphone : <div class="card-title"><?= $checkout['no_telp']; ?></div>
                            <form class="forms-sample" action="<?= base_url('admin/editpesan/') . $checkout['id_checkout']; ?>" method="post">
                                Status :
                                <select class="form-control" id="status" name="status">
                                    <option value="sedang dalam proses">sedang dalam proses</option>
                                    <option value="diterima">diterima</option>
                                </select>
                                <button type="submit" class="btn btn-gradient-info mr-2">Simpan</button>
                            </form>
                            Nama Produk : <div class="card-title"><?= $checkout['nama_produk']; ?></div>
                            Quantity : <p class="card-text"><?= $checkout['qty']; ?></p>
                            Size : <p class="card-text"><?= $checkout['size']; ?></p>
                            Total Harga : <p class="card-text">Rp.<?= $checkout['total']; ?></p>
                            <div class="form-group">
                                <label for="gambar" class="font-weight-bold">Gambar</label><br>
                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?= base_url('assets/image/produk/') . $checkout['gambar']; ?>" class="rounded" width="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end form -->
            </div>
            <!-- content-wrapper ends -->