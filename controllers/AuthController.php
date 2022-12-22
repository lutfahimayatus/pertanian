<?php

class AuthController
{
    protected $connect;

    function __construct()
    {
        
        $this->connect = dbConnect();
    }

    public function login($request)
    {
        $email = $request['email'];
        $password = $request['password'];
        $email = htmlspecialchars($email);
        $password = htmlspecialchars($password);
        $password = md5($password);
        $sql = "SELECT * FROM user WHERE email = '$email' OR username = '$email' AND password = '$password'";
        try {
            $result = mysqli_query($this->connect, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if ($count == 1) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['role'] = $row['role'];
                header("location: index.php");
            } else {
                $error = "Your Login Email or Password is invalid";
                $_SESSION['error_login'] = $error;
                header("location: login.php");
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
            // header("location: index.php");
        }
    }

    public function logout()
    {
        // revoke session
        session_start();
        session_destroy();
        header("location: login.php");
    }

    public function register($request)
    {
        // create register function with html_escape_characters php native
        $name = $request['name'];
        $kota = $request['kota'];
        $username = $request['username'];
        $no_telp = $request['no_telp'];
        $email = $request['email'];
        $alamat = $request['alamat'];
        $password = $request['password'];
        $password_confirmation = $request['password_confirmation'];
        $name = htmlspecialchars($name);
        $kota = htmlspecialchars($kota);
        $no_telp = htmlspecialchars($no_telp);
        $email = htmlspecialchars($email);
        $alamat = htmlspecialchars($alamat);
        $password = htmlspecialchars($password);
        $password_confirmation = htmlspecialchars($password_confirmation);
        // check password is match with confirm password
        if (!$password == $password_confirmation) {
            $error = "Password is not match with confirm password";
            $_SESSION['error_register'] = $error;
            // header("location: register.php");
        }


        $password = md5($password);
        $sql = "INSERT INTO user (username, nama_user, email, password, role, no_telp, id_kota, alamat)
         VALUES ('$username','$name', '$email', '$password', 'user', '$no_telp', '$kota', '$alamat')";
        try {
            $result = mysqli_query($this->connect, $sql);
            if ($result) {
                // set session
                $_SESSION['username'] = $username;
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['role'] = 'user';
                $_SESSION['no_telp'] = $no_telp;
                $_SESSION['alamat'] = $alamat;

                // get kota 
                $kotaController = new KotaController();
                $kota = $kotaController->ambil_kota_by_id($kota);
                $_SESSION['nama_kota'] = $kota['nama_kota'];
                $_SESSION['id_kota'] = $kota['id_kota'];
                header("location: index.php");
            } else {
                $error = "Your Login Email or Password is invalid";
                $_SESSION['error_login'] = $error;
                // header("location: register.php");
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}