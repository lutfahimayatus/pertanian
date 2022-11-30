<?php 
require('koneksi.php');

session_start();

if(isset($_POST['submit'] ) ){
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_password'];

    if(!empty(trim($email)) && !empty(trim($pass))){
        $query = "SELECT * FROM user WHERE email ='$email'";
        $result = mysqli_query($koneksi,$query);
        $num = mysqli_num_rows($result);

    while($row=mysqli_fetch_array($result)){
        $id = $row['id_user'];
        $userVal = $row['email'];
        $passVal = $row['user_password'];
        $userName = $row['username'];
        $akses = $row['id_akses'];
    }
    if ($num !=0) {
        if($userVal==$email && $passVal==$pass){
            $_SESSION['id']=$id;
            $_SESSION['name']=$userName;
            $_SESSION['akses']=$akses;
            header('location: index.php');
        }
        else{
            $error = 'user atau password salah!!';
            header('location: login.php');
        }
    }else{
        $error='user tidak ditemukan!';
        header('location: login.php');
    }
    }
    else{
        $error='Data tidak boleh kosong!';
        echo $error;
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | E-Commerce</title>
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
    <main id="login">
        <div class="card auth-card">
            <div class="card-body">
                <h3 class="card-title">Login</h3>
                <form action="login.php" class="form-auth" method="POST">
                    <div class="form-group ">
                        <label for="username">Email</label>
                        <input type="text" name="txt_email" id="email" class="form-control" placeholder="Email"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="txt_password" id="password" class="form-control" placeholder="Password"
                            required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
                </form>
                <br>
                <a href="#"><span>Lupa Password</span></a>
                <hr>
                <a class="text-center" href="register.php"><span>Belum punya akun? Buat Sekarang</span></a>
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