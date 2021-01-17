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

        <!-- content -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5"><img src="<?= base_url('assets/image/produk/') . $checkout['gambar']; ?>" class="mw-100 w-100 rounded"></div>
                    <div class="col-md-5">
                        Atas Nama : <div class="card-title"><?= $checkout['nama_user']; ?></div>
                        Alamat : <div class="card-title"><?= $checkout['alamat']; ?></div>
                        No Handphone : <div class="card-title"><?= $checkout['no_telp']; ?></div>
                        Status : <p class="card-text"><?= $checkout['status']; ?></p>
                        Nama Produk : <div class="card-title"><?= $checkout['nama_produk']; ?></div>
                        Quantity : <p class="card-text"><?= $checkout['qty']; ?></p>
                        Size : <p class="card-text"><?= $checkout['size']; ?></p>
                        Total Harga : <p class="card-text">Rp.<?= $checkout['total']; ?></p>
                        <a href="<?= base_url('admin/editpesan/') . $checkout['id_checkout']; ?>" class="btn btn-gradient-info mdi mdi-tooltip-edit"> Edit</a>
                        <a href="" class="btn btn-gradient-danger mdi mdi-printer" onclick="print()"> Cetak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->