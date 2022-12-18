<?php require_once 'config/utils.php';

if (isset($_GET['id'])) {
    require_once 'controllers/ProdukController.php';
    $produk = new ProdukController();
    $data = $produk->random_list_produk();
    $item = $produk->lihat_produk($_GET['id']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Produk | E-Commerce</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="./dist/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="./dikst/fontawesome/css/brands.min.css">
    <link rel="stylesheet" href="./dist/fontawesome/css/solid.min.css">
    <link rel="stylesheet" href="./dist/bootstrap/css/bootstrap.min.css">

    <!-- Scripts -->
    <script src="./dist/bootstrap/js/bootstrap.min.js"></script>

    <!-- Slick Js -->
    <link rel="stylesheet" type="text/css" href="./dist/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./dist/slick/slick-theme.css" />
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <header id="header">
        <div class="container-fluid mx-auto">
            <div class="topbar-alt row align-items-center justify-content-between">
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
        <section class="detail-product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card ">
                            <div class="mx-auto detail-product-image">
                                <?php
                                foreach ($data as $row) {
                                    $i = 0;
                                    $gambar = explode(',', $row['gambar']);
                                ?>
                                    <div>
                                        <img src="admin/assets/images/produk/<?= $gambar[$i]; ?>" alt=" <?= $row['nama_produk']; ?>">
                                    </div>
                                <?php
                                    $i++;
                                } ?>
                            </div>
                        </div>
                        <div class="slider-nav">
                            <?php
                            foreach ($data as $row) {
                                $i = 0;
                                $gambar = explode(',', $row['gambar']);
                            ?>
                                <div class="detail-product-image-indicator">
                                    <img src="admin/assets/images/produk/<?= $gambar[$i]; ?>" alt=" <?= $row['nama_produk']; ?>">
                                </div>
                            <?php
                                $i++;
                            } ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body row detail-product-card">
                                <h3 class="detail-product-title"><?= $item['nama_produk']; ?></h3>
                                <hr>
                                <div class="detail-product-rating mb-2 d-flex">
                                    <div class="product-rating me-3">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><span>reviews</span>
                                </div>
                                <h3 class="detail-product-price">Rp. <?= rupiah($item['harga']); ?></h3>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center mb-4 qty-detail-product">
                                    <span>Kuantitas</span>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button class="btn btn-primary" id="subQty">-</button>
                                        <input type="text" class="form-control text-center border" id="qty" value="1">
                                        <button class="btn btn-primary" id="addQty">+</button>
                                    </div>
                                    <span>tersisa 200 item</span>
                                </div>
                                <button class="btn btn-primary mb-3">Beli Sekarang</button>
                                <button class="btn btn-outline-secondary mb-3">Tambah ke Keranjang</button>
                                <hr>
                                <div class="detail-product-description">
                                    <h4>Deskripsi Produk</h4>
                                    <p><?= $item['deskripsi_produk']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-home">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h2 class="">Produk Unggulan</h2>
                    </div>
                    <div class="col-6 d-flex align-items-center justify-content-end"><a href="#">
                            <span class="text-primary fw-semibold">Produk Lainnya <i class="fa fa-arrow-right"></i></span>
                        </a></div>
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
                                <div class="product-image" style="min-height: 230px;">
                                    <img src="admin/assets/images/produk/<?= $gambar[0]; ?>" alt=" <?= $row['nama_produk']; ?>">
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
                                <button class="btn btn-primary"><a href="<?= $row['id_produk']; ?>">Tambah ke keranjang</a></button>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <h3 class="footer-logo">MAYASARI</h3>
                <p class="footer-desc">In publishing and graphic design .</p>
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

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="./dist/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            // $('.detail-product-image').slick({
            //     infinite: false,
            //     slidesToShow: 1,
            //     slidesToScroll: 1

            // });


            $('.detail-product-image').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                // arrows: true,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 4,
                // slidesToScroll: 1,
                asNavFor: '.detail-product-image',
                // dots: true,
                // centerMode: true,
                focusOnSelect: true
            });



        });

        $('#addQty').click(function() {
            var qty = parseInt($('#qty').val());
            $('#qty').val(qty + 1);
        });
        $('#subQty').click(function() {
            var qty = parseInt($('#qty').val());
            if (qty > 1) {
                $('#qty').val(qty - 1);
            }
        });
    </script>
</body>


</html>