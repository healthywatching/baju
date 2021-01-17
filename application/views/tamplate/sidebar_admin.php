    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">
                            <img src="<?= base_url('assets/image/admin/') . $this->session->userdata('gambar'); ?>" alt="profile">
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2"><?= $this->session->userdata('nama_admin'); ?></span>
                            <span class="text-secondary text-small">Admin</span>
                        </div>
                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin'); ?>">
                        <span class="menu-title">Dashboard</span>
                        <i class="mdi mdi-home menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/produk'); ?>">
                        <span class="menu-title">Produk</span>
                        <i class="mdi mdi-tshirt-crew menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#pemesanan" aria-expanded="false" aria-controls="pemesanan">
                        <span class="menu-title">Pemesanan</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-gift menu-icon"></i>
                    </a>
                    <div class="collapse" id="pemesanan">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/checkout'); ?>">Checkout</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item sidebar-actions">
                    <span class="nav-link">
                        <a href="<?= base_url('login/logout'); ?>" class="btn btn-block btn-lg btn-gradient-primary mt-4" style="color: white;">
                            <i class="mdi mdi-logout" style="color:white;"></i>
                            Log out
                        </a>
                    </span>
                </li>
            </ul>
        </nav>