<?php
require_once 'config/utils.php';
require_once 'controllers/ProdukController.php';
$produk = new ProdukController();
$data = $produk->ambil_produk();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | E-Commerce</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="./dist/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="./dist/fontawesome/css/brands.css">
    <link rel="stylesheet" href="./dist/fontawesome/css/solid.css">
    <link rel="stylesheet" href="./dist/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./styles.css">

    <!-- Scripts -->
    <script src="./dist/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <header id="header">
        <div class="container-fluid mx-auto">
            <div class="topbar row align-items-center justify-content-between">
                <div class="col-lg-4 col-4 ">
                    <div class="logo">MAYASARI</div>
                </div>
                <div class="col-lg-8  header-info-list">
                    <div class="header-info-item">
                        <i class="fa fa-phone"></i>
                        <span>1-888-546-789</span>
                    </div>
                    <div class="header-info-item">
                        <i class="fa fa-map-pin"></i>
                        <span>Jl. Tamansari, Wuluhan, Jember</span>
                    </div>
                    <div class="header-info-item">
                        <i class="fa fa-clock"></i>
                        <span> 07:00 - 17:00, Senin - Sabtu</span>
                    </div>
                </div>
                <div class="col-lg-4 col-4 text-end lg-hidden">
                    <span class="avatar-dropdown">
                        <i class="fa fa-user"></i>
                    </span>
                </div>
            </div>
        </div>
    </header>
    <main id="home">
        <section class="hero">
            <div class="container-fluid">
                <div class="hero-topbar row">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <div class=" search-form">
                            <input type="text" name="search" id="search" class="search-input form-control"
                                placeholder="Temukan pencarian terbaik hanya di mayasari">
                            <span class="text-dark">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                        <span class="cart-icon text-dark sm-hidden">
                            <i class="fa fa-shopping-cart"></i>
                        </span>
                        <button class="btn btn-primary sm-hidden"><a href="register.php">Register</a></button>
                        <button class="btn btn-primary sm-hidden"><a href="login.php">Login</a></button>
                    </div>
                </div>
                <div class="row hero-content">
                    <div class="col">
                        <h1>Tentukan Kemudahan Dalam Pertanian Anda</h1>
                        <p>Disini Kami menyediakan banyak varian pupuk dan juga Pestida dengan Harga yang sangat terjangkau.</p>
                        <div class="d-flex justify-content-center gap-4">
                            <button class="btn btn-primary"><a href="register.php">Join Now</a></button>
                            <button class="btn btn-outline-light"><a href="#testimonials">Testimonial</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sponsored">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <h2 class="text-title-h2">Dipercaya oleh beberapa instansi</h2>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center text-center">
                    <div class=" col-3">
                        <img class="sponsored-img" src="./assets/images/logo-jember-bw.png" alt="logo jember">
                    </div>
                    <div class="col-3">
                        <img class="sponsored-img" src="./assets/images/logo-kementerian-lingkungan-hidup-dan-kehutanan.png" alt="logo kementerian lingkungan hidup dan kehutanan jember">
                    </div>
                    <div class="col-3">
                        <img class="./assets/images/logo-kementerian-pertanian-bw.png" alt="logo kementerian pertanian jember">
                    </div>
                </div>
            </div>
        </section>
        <section class="why-choose-us">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class=" col-lg-6 md:col-lg-12">
                        <div class="img-wrapper">
                            <img src="assets/images/photo-section.png" class="section-photo" alt="kenapa-memilih-kami">
                        </div>
                    </div>
                    <div class="col-lg-6 md:col-lg-12">
                        <h2>Mengapa harus memilih produk kami ?</h2>
                        <p>Beberapa alasan kalian harus memilih produk kami sebagai bahan utama pertanian kalian</p>
                        <ul class="why-choose-us-list">
                            <li><i class="fa fa-check text-primary me-4 mb-3"></i><span class="fw-semibold">Produk kami sudah dipercaya oleh beberapa instansi</span>
                            </li>
                            <li>
                                <i class="fa fa-check text-primary me-4 mb-3"></i><span class="fw-semibold">Produk kami sangat terjangkau harganya </span>
                            </li>
                            <li>
                                <i class="fa fa-check text-primary me-4 mb-3"></i><span class="fw-semibold">Produk kami adalah produk produk pilihan</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-home">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h2 class="product-title">Produk Unggulan</h2>
                    </div>
                    <div class="col-6 d-flex align-items-center justify-content-end"><a href="list-product.html">
                            <span class="text-primary fw-semibold">Produk Lainnya <i
                                    class="fa fa-arrow-right"></i></span>
                        </a></div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <ul class="d-flex list-category">
                            <li>
                                <button class="btn btn-primary">Semua</button>
                            </li>
                            <li>
                                <button class="btn btn-outline-secondary">Pestisida</button>
                            </li>
                            <li>
                                <button class="btn btn-outline-secondary">Organik</button>
                            </li>
                            <li>
                                <button class="btn btn-outline-secondary">Pupuk</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                <?php
                    foreach ($data as $row) {
                        $gambar = explode(',', $row['gambar'])
                    ?>
                        <div class="col-lg-4 col-12">
                            <div class="card product-card">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="product-price">Rp. <?= rupiah($row['harga']); ?></div>
                                    <div class="product-sale">10 Terjual</div>
                                </div>
                                <div class="product-image">
                                    <img src="admin/assets/images/produk/<?= $gambar[0]; ?>" alt="product 1">
                                </div>
                                <div class="product-rating text-end">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <hr>
                                <h4 class="product-name"><?= $row['nama_produk']; ?></h4>
                                <button class="btn btn-primary"><a href="cart.php?id_produk=<?= $row['id_produk']; ?>&quantity=1">Tambah ke keranjang</a></button>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <h3 class="footer-logo">MAYASARI</h3>
                <p class="footer-desc">In publishing and graphic design.</p>
                <div class="footer-links">
                    <a class="footer-link-item" href="#">Metode Pembayaran</a>
                    <a class="footer-link-item" href="#">Bantuan</a>
                    <a class="footer-link-item" href="#">Customer</a>
                    <a class="footer-link-item" href="#">Syarat dan Ketentuan</a>
                </div>
                <div class="footer-social">
                    <a class="footer-link-social" href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a class="footer-link-social" href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a class="footer-link-social" href="#"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>