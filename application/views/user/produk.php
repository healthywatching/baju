<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Halaman Produk</h4>
        <div class="site-pagination">
            <a href="<?= base_url('user'); ?>">Menu Utama</a> /
            <a href="<?= base_url('user/produk'); ?>">produk</a> /
        </div>
    </div>
</div>
<!-- Page info end -->


<!-- Category section -->
<section class="category-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg  order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row">
                    <?php foreach ($produk as $p) : ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <div class="tag-new">New</div>
                                    <img src="<?= base_url('assets/image/produk/') . $p->gambar; ?>">
                                    <div class="pi-links">
                                        <a href="<?= base_url('user/detail/') . $p->id_produk; ?>" class="add-card"><i class="flaticon-zoom"></i><span>Lihat Detail</span></a>
                                    </div>
                                </div>
                                <div class="pi-text">
                                    <h6>Rp.<?= $p->harga; ?></h6>
                                    <p><?= $p->nama_produk; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category section end -->