<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4><?= $title; ?></h4>
        <div class="site-pagination">
            <a href="<?= base_url('user'); ?>">Menu Utama</a> /
            <a href="<?= base_url('user/profile'); ?>"><?= $title; ?></a>
        </div>
    </div>
</div>
<!-- Page info end -->


<!-- Contact section -->
<section class="contact-section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 contact-info">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('assets/image/user/' . $this->session->userdata('gambar')); ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?= $this->session->userdata('nama_user'); ?></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('assets/image/icons/recent.jpg'); ?>" class="card-img-top">
                    <div class="card-body text-center">
                        <a href="<?= base_url('user/riwayat'); ?>">
                            <h5 class="card-title">Riwayat</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>