<?php

class CartController
{
    protected $connect;

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
}