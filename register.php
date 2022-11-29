<?php
require('koneksi.php');
if( isset($_POST['register']) ){
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_password'];
    $userName = $_POST['txt_name'];

    $query = "INSERT INTO user (id_user, username, user_password, email, id_akses) VALUES ('', '$userName', '$userPass', '$userMail', 2)";
    $result = mysqli_query($koneksi, $query);
    //header('Location: login.php');
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
                        <span> Jl. Mastrip, Krajan Timur, Sumbersari, Jember</span>
                    </div>
                    <div class="header-info-item">
                        <i class="fa fa-clock"></i>
                        <span> 10:00 - 18:00, Senin - Jumat</span>
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
                        <input type="text" name="txt_name" id="name" class="form-control"
                            placeholder="Masukkan nama lengkap anda" required>
                    </div>
                    <div class="form-group ">
                        <label for="email">Email</label>
                        <input type="text" name="txt_email" id="email" class="form-control"
                            placeholder="Masukkan email anda" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="txt_password" id="password" class="form-control"
                            placeholder="Masukkan password anda" required>
                    </div>
                    <button type="submit" name="register" class="btn btn-primary w-100">Daftar</button>
                </form>
                <br>
                <a class="text-center" href="login.php"><span>Sudah Punya Akun? Masuk Sekarang</span></a>
                <hr>
                <a class="text-center" href="#"><span>Butuh Bantuan?</span></a>
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