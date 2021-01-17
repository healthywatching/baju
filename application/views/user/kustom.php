<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4><?= $title; ?></h4>
        <div class="site-pagination">
            <a href="<?= base_url('user'); ?>">Menu Utama</a> /
            <a href="<?= base_url('user/order'); ?>"><?= $title; ?></a>
        </div>
    </div>
</div>
<!-- Page info end -->

<!-- Contact section -->
<section class="contact-section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 contact-info">
                <h3>Get in order</h3>
                <p><?= $contact['alamat']; ?></p>
                <p><?= $contact['no_handphone']; ?></p>
                <p><?= $contact['email']; ?></p>
                <div class="contact-social">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-whatsapp"></i></a>
                </div>

                <img src="<?= base_url('assets/image/icons/list.jpg'); ?>">
            </div>
        </div>
    </div>
    <div class="map"><iframe src="https://maps.google.com/maps?q=Loktabat%20Sel.,%20Kec.%20Banjarbaru%20Selatan,%20Kota%20Banjar%20Baru,%20Kalimantan%20Selatan%2070714&t=k&z=13&ie=UTF8&iwloc=&output=embed" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
</section>
<!-- Contact section end -->

<section class="product-filter-section">
    <div class="container">
        <div class="section-title">
            <h2>Cetak Kaos Anda dalam Tiga Langkah</h2>
        </div>

        <div class="row text-center">
            <div class="col-lg-4 col-sm-12">
                <img src="<?= base_url('assets/image/icons/prepare.png'); ?>">
                <h6 class="mb-3 mt-3">Prepare Your Design</h6>
                <ul class="text-left">
                    <li class="mb-4">Kirim design anda dalam format .AI atau .EPS</li>
                    <li class="mb-4">Jika anda tidak memiliki format .AI atau .EPS, harap kirim design anda dalam format .PNG atau JPEG high resolution kami akan membantu convert design anda</li>
                    <li class="mb-4">Tidak ada minimum order</li>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-12">
                <img src="<?= base_url('assets/image/icons/send.png'); ?>">
                <h6 class="mb-3 mt-3">Send Your Email</h6>
                <ul class="text-left">
                    <li class="mb-4">Kirim design anda ke ajag@ijig.com, beserta warna, ukuran, dan bahan yang akan dipakai.</li>
                    <li class="mb-4">Jangan lupa dicantumkan ukuran yang akan dicetak. misalnya:25 x 25 cm.</li>
                    <li class="mb-4">Setelah itu kami akan membalas email anda beserta total harga yang harus dibayarkan.</li>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-12">
                <img src="<?= base_url('assets/image/icons/box.png'); ?>">
                <h6 class="mb-3 mt-3">Get Your Order</h6>
                <ul class="text-left">
                    <li class="mb-4">Setelah anda melakukan pembayaran, Kami akan memproses orderan anda</li>
                    <li class="mb-4">Waktu produksi: 2-3 hari.</li>
                </ul>
            </div>
        </div>
    </div>
</section>