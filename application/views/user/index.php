<!-- Hero section -->
<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <?php foreach ($produk as $p) : ?>
            <div class="hs-item set-bg" data-setbg="<?= base_url('assets/image/produk/') . $p->gambar; ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 text-white">
                            <span>New Arrivals</span>
                            <h2><?= $p->nama_produk; ?></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            <a href="<?= base_url('user/detail/') . $p->id_produk; ?>" class="site-btn sb-white">LIHAT PRODUK</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="container">
        <div class="slide-num-holder" id="snh-1"></div>
    </div>
</section>
<!-- Hero section end -->



<!-- Features section -->
<section class="features-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 p-0 feature">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="<?= base_url('assets/image/icons/1.png'); ?>" alt="#">
                    </div>
                    <h2>Pembayaran Cepat Aman</h2>
                </div>
            </div>
            <div class="col-md-4 p-0 feature">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="<?= base_url('assets/image/icons/2.png'); ?>" alt="#">
                    </div>
                    <h2>Produk Premium</h2>
                </div>
            </div>
            <div class="col-md-4 p-0 feature">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="<?= base_url('assets/image/icons/3.png'); ?>" alt="#">
                    </div>
                    <h2>Pengiriman Gratis & Cepat</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features section end -->


<!-- letest product section -->
<section class="top-letest-product-section">
    <div class="container">
        <?= $this->session->flashdata('message'); ?>
        <div class="section-title">
            <h2>LATEST PRODUCTS</h2>
        </div>
        <div class="product-slider owl-carousel">
            <?php foreach ($produk as $p) : ?>
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="<?= base_url('assets/image/produk/') . $p->gambar; ?>">
                        <div class="pi-links">
                            <a href="<?= base_url('user/detail/') . $p->id_produk; ?>" class="add-card"><i class="flaticon-zoom"></i><span>Lihat Detail</span></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>Rp.<?= $p->harga; ?></h6>
                        <p><?= $p->nama_produk; ?> </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- letest product section end -->



<!-- Product filter section -->
<section class="product-filter-section">
    <div class="container">
        <div class="section-title">
            <h2>BROWSE TOP SELLING PRODUCTS</h2>
        </div>
        <!-- <ul class="product-filter-menu">
            <li><a href="#">TOPS</a></li>
            <li><a href="#">JUMPSUITS</a></li>
            <li><a href="#">LINGERIE</a></li>
            <li><a href="#">JEANS</a></li>
            <li><a href="#">DRESSES</a></li>
            <li><a href="#">COATS</a></li>
            <li><a href="#">JUMPERS</a></li>
            <li><a href="#">LEGGINGS</a></li>
        </ul> -->
        <div class="row">
            <?php foreach ($produk as $p) : ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?= base_url('assets/image/produk/') . $p->gambar; ?>">
                            <div class="pi-links">
                                <a href="<?= base_url('user/detail/') . $p->id_produk; ?>" class="add-card"><i class="flaticon-zoom"></i><span>Lihat Detail</span></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>Rp.<?= $p->harga; ?></h6>
                            <p><?= $p->nama_produk; ?> </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- <div class="text-center pt-5">
            <button class="site-btn sb-line sb-dark">LOAD MORE</button>
        </div> -->
    </div>
</section>
<!-- Product filter section end -->


<!-- Banner section -->
<section class="banner-section">
    <div class="container">
        <div class="banner set-bg" data-setbg="<?= base_url('assets/image/carousel/2.jpg'); ?>">
            <div class="tag-new">NEW</div>
            <span>New Arrivals</span>
            <h2>STRIPED SHIRTS</h2>
            <a href="#" class="site-btn">SHOP NOW</a>
        </div>
    </div>
</section>
<!-- Banner section end  -->