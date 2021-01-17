<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4><?= $title; ?></h4>
        <div class="site-pagination">
            <a href="<?= base_url('user/profile'); ?>">Profile</a> /
            <a href="<?= base_url('user/riwayat'); ?>"><?= $title; ?></a>
        </div>
    </div>
</div>
<!-- Page info end -->

<section>
    <div class="container mt-2 mb-5">
        <?= $this->session->flashdata('message'); ?>
        <table class="table table-sm">
            <thead class="text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Size</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                $no = 1;
                foreach ($checkout as $c) { ?>
                    <tr>
                        <td class="font-weight-bold"><?= $no++ ?></td>
                        <td><?= $c->nama_produk ?></td>
                        <td><?= $c->qty ?></td>
                        <td><?= $c->size ?></td>
                        <td><?= $c->total ?></td>
                        <td><?= $c->status ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>