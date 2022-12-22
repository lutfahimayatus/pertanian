<?php

class CartController
{
    public $connect;

    function __construct()
    {
        include 'config/connect.php';
        $this->connect = dbConnect();
    }

    function add_to_cart($request)
    {
        $id_produk  = (int)$request['id_produk'];
        $quantity = (int)$request['quantity'];

        $sql = "SELECT * FROM produk WHERE id_produk = $id_produk ";
        $result = mysqli_query($this->connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                if (array_key_exists($id_produk, $_SESSION['cart'])) {
                    $_SESSION['cart'][$id_produk] += $quantity;
                } else {
                    $_SESSION['cart'][$id_produk] = $quantity;
                }
            } else {
                $_SESSION['cart'] = array($id_produk => $quantity);
            }
        }
    }

    function get_data_cart($data)
    {
        // 
        // id_produk => qty
        // fetch data produk and qty and calucalting total price
        foreach ($data as $id_produk => $qty) {
            $sql = "SELECT * FROM produk WHERE id_produk = $id_produk";
            $result = mysqli_query($this->connect, $sql);
            $row = mysqli_fetch_assoc($result);
            $gambar = explode(',', $row['gambar']);
            $data[$id_produk] = array(
                'id_produk' => $row['id_produk'],
                'nama_produk' => $row['nama_produk'],
                'harga' => $row['harga'],
                'gambar' => $gambar[0],
                'qty' => $qty,
                'total' => $row['harga'] * $qty
            );

            $total = 0;
            $total += $row['harga'] * $qty;

            return array('data' => $data, 'total' => $total);
        }
    }


    function checkout($data)
    {
        // data
        // array(2) { ["data"]=> array(2) { [44]=> array(6) { ["id_produk"]=> string(2) "44" ["nama_produk"]=> string(20) "Ex quibusdam dolorem" ["harga"]=> string(5) "12300" ["gambar"]=> string(30) "Screenshot_20221111_165107.png" ["qty"]=> int(1) ["total"]=> int(12300) } [48]=> int(1) } ["total"]=> int(12300) }


        // transaksi
        // id_transaksi	tanggal_transaksi	total_bayar		

        // detail transaksi
        // id_detailtransaksi id_transaksi 	id_user	id_produk	total_order	status_pesanan	tanggal_order	jam_order	no_telp	alamat	id_kota

        // kota
        // id_kota	nama_kota


        // insert transaksi
        $id_user = $_SESSION['id_user'];
        $tanggal_transaksi = date('Y-m-d');

        foreach ($data as $key => $value) {
            $id_transaksi = "INSERT INTO transaksi (id_user, tanggal_transaksi, total_bayar) VALUES ($id_user, '$tanggal_transaksi', $value)";
            $result = mysqli_query($this->connect, $id_transaksi);

            if ($result) {
                $id_transaksi = mysqli_insert_id($this->connect);
                $id_produk = $value['id_produk'];
                $total_order = $value['total'];
                $status_pesanan = 'belum bayar';
                $tanggal_order = date('Y-m-d');
                $jam_order = date('H:i:s');
                $no_telp = $_SESSION['no_telp'];
                $alamat = $_SESSION['alamat'];
                $id_kota = $_SESSION['id_kota'];

                $detail_transaksi = "INSERT INTO detail_transaksi (id_transaksi, id_user, id_produk, total_order, status_pesanan, tanggal_order, jam_order, no_telp, alamat, id_kota) VALUES ($id_transaksi, $id_user, $id_produk, $total_order, '$status_pesanan', '$tanggal_order', '$jam_order', '$no_telp', '$alamat', $id_kota)";
                $result = mysqli_query($this->connect, $detail_transaksi);
                if ($result) {
                    echo "berhasil";
                } else {
                    echo "gagal";
                }
            }
        }
    }
}