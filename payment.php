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
    <script src="./dist/bootstrap/js/bootstrap.min.js"></script>

    <!-- Slick Js -->
    <link rel="stylesheet" type="text/css" href="./dist/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./dist/slick/slick-theme.css" />
    <link rel="stylesheet" href="./styles.css">
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
        <section class="">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12">
                        <h2 class="product-title">Info Pembayaran</h2>
                    </div>
                    <div class="col-lg-7 relative mb-3">
                        <div class="row align-items-center mb-3">
                            <div class="col-12">
                                <div class="card row flex-row align-items-center">
                                    <div class="col-6">
                                        <h3 class="cc-bank">Bank BCA</h3>
                                    </div>
                                    <div class="col-6 text-end">
                                        <img src="./assets/images/logo-bank-bca.png" alt="" class="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <hr class="py-2">
                                        <h3 class="cc-number">0023 2131 2312 312</h3>
                                    </div>
                                    <div class="col-12">
                                        <p class="cc-user">UD Mayasari</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-12">
                                <div class="card row flex-row align-items-center">
                                    <div class="col-6">
                                        <h3 class="cc-bank">Bank BRI</h3>
                                    </div>
                                    <div class="col-6 text-end">
                                        <img src="./assets/images/logo-bank-bri.png" alt="" class="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <hr class="py-2">
                                        <h3 class="cc-number">0023 2131 2312 312</h3>
                                    </div>
                                    <div class="col-12">
                                        <p class="cc-user">UD Mayasari</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body row detail-product-card pb-2">
                                <h3 class="checkout-title">Info Pembayaran</h3>
                                <h3 class="payment-total-price">Rp. 36.000,00</h3>
                                <form action="login.php" class="form-auth" method="POST">
                                    <div class="form-group">
                                        <label for="name">Bukti Transaksi</label>
                                        <div class="form-group">
                                            <input type="file" name="bukti_transfer" id="" class="form-control">

                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100 mb-3">Checkout</button>
                                    <button class="btn btn-outline-secondary w-100">Kembali ke Menu</button>
                                </form>
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
                            <span class="text-primary fw-semibold">Produk Lainnya <i
                                    class="fa fa-arrow-right"></i></span>
                        </a></div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="card product-card">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="product-price">Rp. 36.000</div>
                                <div class="product-sale">10 Terjual</div>
                            </div>
                            <div class="product-image">
                                <img src="./assets/images/item-1.png" alt="product 1">
                            </div>
                            <div class="product-rating text-end">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <hr>
                            <h4 class="product-name">Jupiter 25 EC</h4>
                            <button class="btn btn-primary">Tambah ke keranjang</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="card product-card">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="product-price">Rp. 36.000</div>
                                <div class="product-sale">10 Terjual</div>
                            </div>
                            <div class="product-image">
                                <img src="./assets/images/item-1.png" alt="product 1">
                            </div>
                            <div class="product-rating text-end">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <hr>
                            <h4 class="product-name">Jupiter 25 EC</h4>
                            <button class="btn btn-primary">Tambah ke keranjang</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="card product-card">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="product-price">Rp. 36.000</div>
                                <div class="product-sale">10 Terjual</div>
                            </div>
                            <div class="product-image">
                                <img src="./assets/images/item-1.png" alt="product 1">
                            </div>
                            <div class="product-rating text-end">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <hr>
                            <h4 class="product-name">Jupiter 25 EC</h4>
                            <button class="btn btn-primary">Tambah ke keranjang</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="card product-card">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="product-price">Rp. 36.000</div>
                                <div class="product-sale">10 Terjual</div>
                            </div>
                            <div class="product-image">
                                <img src="./assets/images/item-1.png" alt="product 1">
                            </div>
                            <div class="product-rating text-end">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <hr>
                            <h4 class="product-name">Jupiter 25 EC</h4>
                            <button class="btn btn-primary">Tambah ke keranjang</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="card product-card">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="product-price">Rp. 36.000</div>
                                <div class="product-sale">10 Terjual</div>
                            </div>
                            <div class="product-image">
                                <img src="./assets/images/item-1.png" alt="product 1">
                            </div>
                            <div class="product-rating text-end">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <hr>
                            <h4 class="product-name">Jupiter 25 EC</h4>
                            <button class="btn btn-primary">Tambah ke keranjang</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="card product-card">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="product-price">Rp. 36.000</div>
                                <div class="product-sale">10 Terjual</div>
                            </div>
                            <div class="product-image">
                                <img src="./assets/images/item-1.png" alt="product 1">
                            </div>
                            <div class="product-rating text-end">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <hr>
                            <h4 class="product-name">Jupiter 25 EC</h4>
                            <button class="btn btn-primary">Tambah ke keranjang</button>
                        </div>
                    </div>
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
        $(document).ready(function () {
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

        $('#addQty').click(function () {
            var qty = parseInt($('#qty').val());
            $('#qty').val(qty + 1);
        });
        $('#subQty').click(function () {
            var qty = parseInt($('#qty').val());
            if (qty > 1) {
                $('#qty').val(qty - 1);
            }
        });
    </script>
</body>


</html>