<?php
require_once 'controllers/CartController.php';

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = [];
}

$cart2 = new CartController();
$total_cart = $cart2->get_number_cart($cart);
?>
<header id="header">
    <div class="container-fluid mx-auto">
        <div class="topbar-alt row align-items-center justify-content-between">
            <div class="col-lg-4 col-4 ">
                <div class="logo"><a href="/ecommerce">Mayasari</a></div>
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
        <div class="header-topbar row">
            <div class="col-lg-12 d-flex justify-content-between">
                <div class="search-form flex-0 me-4">
                    <form class="w-100" action="cari-produk.php" method="GET">
                        <input type="text" name="cari" id="search" class="search-input form-control" placeholder="">
                    </form>
                    <span class="text-dark">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
                <?php
                if (!isset($_SESSION['id_user'])) {
                ?>
                    <div>
                        <a href="register.php">
                            <button class="btn btn-primary sm-hidden">Register</button>
                        </a>
                        <a href="login.php">
                            <button class="btn btn-primary sm-hidden">Login</button>
                        </a>
                    </div>
                <?php
                } else {
                ?>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['name']; ?>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="order-history.php">Order History</a></li>
                            <li>
                                <a class="dropdown-item" href="keranjang.php">
                                    Keranjang
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="logout.php">
                                    Logout
                                </a>
                            </li>

                        </ul>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</header>