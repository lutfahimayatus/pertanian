<?php
session_start();
include 'config/connect.php';
if( isset($_POST['role']) ){
    if ($_SESSION['role'] == 'admin') {
        header("location: index.php");
    } else if ($_SESSION['role'] == 'user') {
        header("location: index.php");
    }
}
include_once 'controllers/KotaController.php';
$kota = new KotaController();
$data_kota = $kota->ambil_kota();
if (isset($_POST['submit_register'])) {
   
    include_once 'controllers/AuthController.php';
    $auth = new AuthController();
    $auth->register($_REQUEST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | E-Commerce</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="./dist/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="./dist/fontawesome/css/brands.min.css">
    <link rel="stylesheet" href="./dist/fontawesome/css/solid.min.css">
    <link rel="stylesheet" href="./dist/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles.css">

    <!-- Scripts -->
    <script src="./dist/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <header id="header">
        <div class="container-fluid mx-auto">
            <div class="topbar row align-items-center md:justfy-content-center">
                <div class="col-lg-4 ms-auto">
                    <div class="logo">MAYASARI</div>
                </div>
                <div class="col-lg-8  header-info-list">
                    <div class="header-info-item">
                        <i class="fa fa-phone"></i>
                        <span>1-888-546-789</span>
                    </div>
                    <div class="header-info-item">
                        <i class="fa fa-map-pin"></i>
                        <span> Jl. Tamansari, Wuluhan, Jember</span>
                    </div>
                    <div class="header-info-item">
                        <i class="fa fa-clock"></i>
                        <span> 07:00 - 17:00, Senin - Sabtu</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main id="register">
        <div class="card auth-card">
            <div class="card-body">
                <h3 class="card-title">Register</h3>
                <form action="register.php" class="form-auth" method="POST">
                    <div class="form-group ">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" name="txt_name" id="name" class="form-control" placeholder="Masukkan nama lengkap anda" required>
                    </div>
                    <div class="form-group ">
                        <label for="username">Username</label>
                        <input type="text" name="name" id="username" class="form-control" placeholder="Masukkan username anda" required>
                    </div>
                    <div class="form-group ">
                        <label for="email">Email</label>
                        <input type="text" name="txt_email" id="email" class="form-control" placeholder="Masukkan email anda" required>
                    </div>
                    <div class="form-group">
                        <label for="Kota">Asal Kota/Kabupaten</label>
                        <select class="form-control" name="kota" id="kota">
                            <?php
                            foreach ($data_kota as $kota) {
                            ?>
                                <option value="<?= $kota['id_kota']; ?>"><?= $kota['nama_kota']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <!-- no telpon -->
                    <div class="form-group">
                        <label for="no_telpon">No Telp.</label>
                        <input type="text" name="no_telpon" id="no_telpon" class="form-control" placeholder="Masukkan nomor telepon anda" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="txt_password" id="password" class="form-control" placeholder="Masukkan password anda" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        <input type="password_confirmation" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Masukkan password anda sekali lagi" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
                <a class="mt-2" href="lupa-password.php"><span>Lupa Password</span></a>
                <hr>
                <a class="text-center" href="login.php"><span>sudah punya akun? <span class="text-dark">masuk
                            sekarang</span></span></a>
                <a class="text-center" href="#"><span>butuh bantuan?</span></a>
            </div>
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
</body>

</html>