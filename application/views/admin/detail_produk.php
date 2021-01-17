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
        <?= $this->session->flashdata('message'); ?>

        <!-- content -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5"><img src="<?= base_url('assets/image/produk/') . $detail['gambar']; ?>" class="mw-100 w-100 rounded"></div>
                    <div class="col-md-5">
                        <div class="card-title"><?= $detail['nama_produk']; ?></div>
                        <p class="card-text text-secondary">Rp.<?= $detail['harga']; ?></p>
                        <p class="card-text"><?= $detail['deskripsi']; ?></p>
                        <a href="<?= base_url('admin/editProduk/mdi mdi-arrow-left-bold') . $detail['id_produk']; ?>" class="btn btn-gradient-success mdi mdi-tooltip-edit"> Edit</a>
                        <a href="<?= base_url('admin/produk'); ?>" class="btn btn-gradient-warning mdi mdi-arrow-left-bold"> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->