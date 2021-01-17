<!-- Footer section -->
<section class="footer-section">
    <div class="container">
        <div class="footer-logo text-center">
            <a href=""><img src="<?= base_url('assets/image/favicon-mini.png'); ?>" alt=""></a>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Tentang Kami</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem natus, omnis vitae cumque maxime aut sint hic est, facere quo soluta quia debitis facilis aliquam blanditiis beatae tenetur adipisci placeat</p>
                    <!-- <img src="img/cards.png" alt=""> -->
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Jelajahi</h2>
                    <ul>
                        <li><a href="<?= base_url('user'); ?>">Menu Utama</a></li>
                        <li><a href="<?= base_url('user/produk'); ?>">Produk</a></li>
                        <li><a href="<?= base_url('user/order'); ?>">Pesan Kustom</a></li>
                        <li><a href="">Tentang Kami</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Partners</a></li>
                        <li><a href="">Support</a></li>
                        <li><a href="">Terms</a></li>
                        <li><a href="">Privacy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="footer-widget contact-widget">
                    <h2>Perusahaan</h2>
                    <div class="con-info">
                        <span>C.</span>
                        <p><?= $contact['nama']; ?> </p>
                    </div>
                    <div class="con-info">
                        <span>A.</span>
                        <p><?= $contact['alamat']; ?> </p>
                    </div>
                    <div class="con-info">
                        <span>P.</span>
                        <p><?= $contact['no_handphone']; ?></p>
                    </div>
                    <div class="con-info">
                        <span>E.</span>
                        <p><?= $contact['email']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-links-warp">
        <div class="container">
            <div class="social-links">
                <a href="#" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
                <a href="#" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                <a href="#" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
                <a href="#" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
                <a href="#" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
            </div>

            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="text-white text-center mt-5">Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | Devin Syahputra <i class="fa fa-heart-o" aria-hidden="true"></i></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

        </div>
    </div>
</section>
<!-- Footer section end -->



<!--====== Javascripts & Jquery ======-->
<script src="<?= base_url('assets/'); ?>js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.slicknav.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.nicescroll.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.zoom.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery-ui.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/main.js"></script>

</body>

</html>