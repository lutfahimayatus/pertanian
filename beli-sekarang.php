<?php
session_start();
include 'config/connect.php';
require_once 'config/utils.php';
require_once 'controllers/ProdukController.php';
require_once 'controllers/CartController.php';

$produk = new ProdukController();
$data = $produk->ambil_produk();

if (isset($_SESSION['beli_sekarang'])) {
    $cart = $_SESSION['beli_sekarang'];
} else {
    $cart = [];
}
$cart_ = new CartController();
$data_cart = $cart_->get_produk_by_buy($cart);
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
    <link rel="stylesheet" href="./dist/fontawesome/css/brands.min.css">
    <link rel="stylesheet" href="./dist/fontawesome/css/solid.min.css">
    <link rel="stylesheet" href="./dist/bootstrap/css/bootstrap.min.css">

    <!-- Scripts -->
    <script src="./dist/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Slick Js -->
    <link rel="stylesheet" type="text/css" href="./dist/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./dist/slick/slick-theme.css" />
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <?php include 'components/header.php'; ?>
    <main id="home">
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="product-title">Beli Langsung</h2>
                    </div>
                    <div class="col-lg-8 relative mb-3">
                        <?php
                        if ($data_cart['data']) {
                            foreach ($data_cart['data'] as $row) {
                        ?>
                                <div class="row align-items-center mb-3">
                                    <div class="col-12">
                                        <div class="card row flex-row align-items-center">
                                            <div class="col-lg-2 col-sm-3 img-wrapper-shopping" style="height: 118px">
                                                <img src="admin/assets/images/produk/<?= $row['gambar']; ?>" alt="<?= $row['nama_produk']; ?>" style="max-height: 118px">
                                            </div>
                                            <div class="col-lg-4 col-sm-3">
                                                <h3><?= $row['nama_produk']; ?></h3>
                                                <p>Rp. <?= rupiah($row['harga']); ?> <span> x </span> <span><?= $row['qty']; ?></span></p>
                                            </div>
                                            <div class="col-lg-6 col-sm-3 total-qty">
                                                <p class="">Rp. <?= rupiah($row['total']); ?></p>
                                            </div>
                                            <span onclick="removeCart(<?= $row['id_produk'] ?>)">
                                                <span class="btn-remove-item">
                                                    <i class="fa fa-times"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        } else {
                            echo "<h5 class='font-italic'><em>Keranjang Belanja Kosong</em></h5>";
                        }
                        ?>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body row detail-product-card pb-2">
                                <h3 class="checkout-title">Total Belanjaan</h3>
                                <h3 class="checkout-total-price">Rp. <?= rupiah($data_cart['total']); ?></h3>
                                <form action="payment.php" class="form-auth" method="POST">
                                    <div class="form-group">
                                        <label for="name">Nama Penerima</label>
                                        <input value="<?= isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>" type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama penerima" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Alamat Penerima</label>
                                        <input value="<?= isset($_SESSION['alamat']) ? $_SESSION['alamat'] : '-'; ?>" type="text" name="address" id="address" class="form-control" placeholder="Masukkan alamat penerima" required>
                                    </div>
                                    <button name="checkout" class="btn btn-primary w-100 mb-3">Checkout</button>
                                    <button class="btn btn-secondary w-100"><a href="list-produk.php">Kembali ke Menu</a></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-home">
            <?php include 'components/produk-unggulan.php'; ?>
        </section>
    </main>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <h3 class="footer-logo">Mayasari</h3>
                <p class="footer-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem odio quis
                    debitis ea, sunt
                    tempora.</p>
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
            $('.detail-product-image').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 4,
                asNavFor: '.detail-product-image',
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

        function removeCart(id) {
            $.ajax({
                url: 'cart/remove.php',
                type: 'POST',
                data: {
                    id_produk: id,
                },
                success: function(data) {
                    location.reload();
                }
            });
        }
    </script>
</body>


</html>