<?php

class ProdukController
{
    protected $connect;

    function __construct()
    {
        include 'config/connect.php';
        $this->connect = dbConnect();
    }

    function index()
    {
        $sql = "SELECT * FROM produk";
        $result = mysqli_query($this->connect, $sql);
        $data = [];
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $data[] = $row;
        }
    }

    function tambah_data($request)
    {
        if (isset($request['submit_data'])) {
            $nama_produk = $request['nama'];
            $harga_produk = $request['harga'];
            $stok_produk = $request['stok'];
            $deskripsi = $request['deskripsi'];
            $nama_produk = htmlspecialchars($nama_produk);
            $harga_produk = htmlspecialchars($harga_produk);
            $stok_produk = htmlspecialchars($stok_produk);
            $deskripsi = htmlspecialchars($deskripsi);
            // var_dump($["gambar"]);
            if (isset($_FILES["gambar"])) {
                // upload multiple images and store to assets/images
                $j = 0;
                $target_path = "";
                $pictures = array();
                for ($i = 0; $i < count($_FILES['gambar']['name']); $i++) {
                    $validextensions = array("jpeg", "jpg", "png");
                    $ext = explode('.', basename($_FILES['gambar']['name'][$i]));
                    $file_extension = end($ext);
                    $target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];
                    $j = $j + 1;
                    if (($_FILES["gambar"]["size"][$i] < 10000000) && in_array($file_extension, $validextensions)) {
                        if (move_uploaded_file($_FILES['gambar']['tmp_name'][$i], "assets/images/")) {
                            $pictures[] = $target_path;
                        } else {
                            $_SESSION['input_error']['gambar'] = "Gambar gagal diupload";
                            return header("Location: tambah_data.php");
                        }
                    } else {
                        $_SESSION['input_error']['gambar'] = "Gambar gagal diupload";
                        return header("Location: tambah_data.php");
                    }
                }
                // convert array to string
                $pictures = implode(",", $pictures);
            }
            $sql = "INSERT INTO produk (nama_produk, harga, stok, deskripsi_produk, gambar) VALUES ('$nama_produk', '$harga_produk', '$stok_produk', '$deskripsi', '$pictures')";
            try {
                $result = mysqli_query($this->connect, $sql);
                if ($result) {
                    $_SESSION['success'] = "Data berhasil ditambahkan";
                    return header("Location: index.php");
                } else {
                    $_SESSION['error'] = "Data gagal ditambahkan";
                    return header("Location: index.php");
                }
            } catch (\Throwable $th) {
                echo $th->getMessage();
            }
        }
    }
}
