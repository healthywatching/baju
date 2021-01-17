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
        <?= $this->session->flashdata('message'); ?>

        <!-- tabel produk -->
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Atas Nama</th>
                                <th>Nama Produk</th>
                                <th>Quantity</th>
                                <th>Size</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($checkout as $c) : ?>
                                <tr>
                                    <td><?= $c->nama_user; ?></td>
                                    <td><?= $c->nama_produk; ?></td>
                                    <td><?= $c->qty; ?></td>
                                    <td><?= $c->size; ?></td>
                                    <td><?= $c->total; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/detailpesan/') . $c->id_checkout; ?>" class="btn btn-primary btn-sm">Detail</a>
                                        <a href="<?= base_url('admin/deletepesan/') . $c->id_checkout; ?>" class="btn btn-danger btn-sm">Hapus</a>
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