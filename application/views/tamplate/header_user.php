<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?= $title; ?></title>
    <meta charset="UTF-8">
    <meta name="description" content=" Divisima | eCommerce Template">
    <meta name="keywords" content="divisima, eCommerce, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="<?= base_url('assets/image/favicon-mini.png'); ?>" rel="shortcut icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/flaticon.css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/slicknav.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery-ui.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/animate.css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css" />


    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 text-center text-lg-left">
                        <!-- logo -->
                        <a href="<?= base_url('user'); ?>" class="site-logo">
                            <img src="<?= base_url('assets/image/nav-icon.png'); ?>">
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <form class="header-search-form">
                            <input type="text" placeholder="Search on Distro Clothing ....">
                            <button><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="user-panel">
                            <div class="up-item">
                                <i class="flaticon-profile"></i>
                                <a href="<?= base_url('user/profile'); ?>"><?= $this->session->userdata('nama_user'); ?></a>
                            </div>
                            <div class="up-item">
                                <div class="shopping-card">
                                    <i class="flaticon-bag"></i>
                                </div>
                                <a href="<?= base_url('user/keranjang'); ?>">Keranjang</a>
                            </div>
                            <div class="up-item">
                                <div class="shopping-card ml-4">
                                    <i class="flaticon-logout"></i>
                                </div>
                                <a href="<?= base_url('login/logout'); ?>">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-navbar">
            <div class="container">
                <!-- menu -->
                <ul class="main-menu">
                    <li><a href="<?= base_url('user'); ?>">Menu Utama</a></li>
                    <li><a href="<?= base_url('user/produk'); ?>">Produk</a></li>
                    <!-- <li><a href="#">Shoes</a>
                        <ul class="sub-menu">
                            <li><a href="#">Sneakers</a></li>
                            <li><a href="#">Sandals</a></li>
                            <li><a href="#">Formal Shoes</a></li>
                            <li><a href="#">Boots</a></li>
                            <li><a href="#">Flip Flops</a></li>
                        </ul>
                    </li> -->
                    <li><a href="<?= base_url('user/order'); ?>">Pesan Kustom</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Header section end -->