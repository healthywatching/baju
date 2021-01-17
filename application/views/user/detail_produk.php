<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Detail Produk</h4>
        <div class="site-pagination">
            <a href="<?= base_url('user'); ?>">Menu Utama</a> /
            <a href="<?= base_url('user/produk'); ?>">Produk</a> / detail produk
        </div>
    </div>
</div>
<!-- Page info end -->


<!-- product section -->
<section class="product-section">
    <div class="container">
        <div class="back-link">
            <a href="<?= base_url('user/produk'); ?>"> &lt;&lt; Kembali ke Produk</a>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="product-pic-zoom">
                    <img class="product-big-img" src="<?= base_url('assets/image/produk/') . $detail['gambar']; ?>" alt="">
                </div>
                <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
                    <div class="product-thumbs-track">
                        <div class="pt active" data-imgbigurl="<?= base_url('assets/image/produk/') . $detail['gambar']; ?>">
                            <img src="<?= base_url('assets/image/produk/') . $detail['gambar']; ?>" alt="">
                        </div>
                        <div class="pt" data-imgbigurl="<?= base_url('assets/image/produk/') . $detail['gambar']; ?>">
                            <img src="<?= base_url('assets/image/produk/') . $detail['gambar']; ?>" alt="">
                        </div>
                        <div class="pt" data-imgbigurl="<?= base_url('assets/image/produk/') . $detail['gambar']; ?>">
                            <img src="<?= base_url('assets/image/produk/') . $detail['gambar']; ?>" alt="">
                        </div>
                        <div class="pt" data-imgbigurl="<?= base_url('assets/image/produk/') . $detail['gambar']; ?>">
                            <img src="<?= base_url('assets/image/produk/') . $detail['gambar']; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <form method="post" action="<?= base_url('user/addtocart/') . $detail['id_produk']; ?>" class="col-lg-6 product-details">
                <h2 class="p-title"><?= $detail['nama_produk']; ?></h2>
                <h3 class="p-price">Rp.<?= $detail['harga']; ?></h3>
                <h4 class="p-stock">Available: <span>In Stock</span></h4>
                <div class="p-rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o fa-fade"></i>
                </div>
                <div class="p-review">
                    <a href="">3 reviews</a>|<a href="">Add your review</a>
                </div>
                <div class="fw-size-choose">
                    <p>Size</p>
                    <div class="sc-item">
                        <input type="radio" name="size" id="s-size" value="S">
                        <label for="s-size">S</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="size" id="m-size" value="M">
                        <label for="m-size">M</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="size" id="l-size" checked="" value="L">
                        <label for="l-size">L</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="size" id="xl-size" value="XL">
                        <label for="xl-size">XL</label>
                    </div>
                </div>
                <div class="quantity">
                    <p>Quantity</p>
                    <div class="pro-qty"><input type="text" name="qty" value="1"></div>
                </div>
                <button type="submit" class="site-btn"><i class="flaticon-bag"></i> Masukkan Keranjang</button>
                <div id="accordion" class="accordion-area">
                    <div class="panel">
                        <div class="panel-header" id="headingOne">
                            <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
                        </div>
                        <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="panel-body">
                                <p><?= $detail['deskripsi']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-header" id="headingTwo">
                            <button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">care details </button>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="panel-body">
                                <img src="./img/cards.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-header" id="headingThree">
                            <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="panel-body">
                                <h4>7 Days Returns</h4>
                                <p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-sharing">
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-pinterest"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- product section end -->