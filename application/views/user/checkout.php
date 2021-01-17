<!-- checkout section  -->
<section class="checkout-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-2 order-lg-1">
                <form method="post" action="<?= base_url('user/checkoutact/') . $keranjang['id_keranjang']; ?>" class="checkout-form">
                    <div class="cf-title">Alamat</div>
                    <div class="row address-inputs">
                        <div class="col-md-12">
                            <input type="text" placeholder="Masukkan Alamat Lengkap" name="alamat">
                        </div>
                        <div class="col-md-12">
                            <input type="text" placeholder="Masukkan Nomor Handphone" name="no_telp">
                        </div>
                    </div>
                    <div class="cf-title">Info Produk</div>
                    <img src="<?= base_url('assets/image/produk/') . $keranjang['gambar']; ?>" width="50%">
                    <div class="row shipping-btns">

                        <!-- nama -->
                        <div class="col-6">
                            <h4>Atas nama</h4>
                        </div>
                        <div class="col-6">
                            <label for=""><?= $this->session->userdata('nama_user'); ?></label>
                        </div>

                        <!-- nama produk -->
                        <div class="col-6">
                            <h4>Nama Produk</h4>
                        </div>
                        <div class="col-6">
                            <label for=""><?= $keranjang['nama_produk']; ?></label>
                        </div>

                        <!-- ukuran -->
                        <div class="col-6">
                            <h4>Ukuran</h4>
                        </div>
                        <div class="col-6">
                            <label for=""><?= $keranjang['size']; ?></label>
                        </div>

                        <!-- quantity -->
                        <div class="col-6">
                            <h4>Quantity</h4>
                        </div>
                        <div class="col-6">
                            <label for=""><?= $keranjang['quantity']; ?></label>
                        </div>

                        <!-- total -->
                        <div class="col-6">
                            <h4>Total</h4>
                        </div>
                        <div class="col-6">
                            <label for="ship-1">Rp.<?= $keranjang['quantity'] * $keranjang['harga']; ?></label>
                        </div>

                    </div>
                    <button type="submit" class="site-btn submit-order-btn">Checkout</button>
                </form>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 mb-4">
                <a href="<?= base_url('user/keranjang'); ?>" class="site-btn sb-dark btn btn-block">Kembali</a>
            </div>
        </div>
    </div>
</section>
<!-- checkout section end -->