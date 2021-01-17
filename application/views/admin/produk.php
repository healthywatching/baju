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
        <!-- tabel produk -->
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="<?= base_url('admin/tambahProduk'); ?>" class="btn btn-dark">
                        <i class="mdi mdi-database-plus mdi"></i>
                        Tambah Data
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Nama Produk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($produk as $p) : ?>
                                <tr>
                                    <td><img src="<?= base_url('assets/image/produk/') . $p->gambar; ?>"></td>
                                    <td>
                                        <h5><?= $p->nama_produk; ?></h5>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/detailproduk/') . $p->id_produk; ?>" class="btn btn-gradient-info mdi mdi-eye"> Detail</a>
                                        <a href="<?= base_url('admin/editProduk/') . $p->id_produk; ?>" class="btn btn-gradient-success mdi mdi-tooltip-edit"> Edit</a>
                                        <a href="<?= base_url('admin/deleteProduk/') . $p->id_produk; ?>" class="btn btn-gradient-danger mdi mdi-delete-forever" onclick="return confirm('Yakin ?');"> Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->