<?php
session_start();
// If the user clicked the add to cart button on the product page we can check for the form data
if (isset($_GET['id_produk'], $_GET['quantity']) && is_numeric($_GET['id_produk']) && is_numeric($_GET['quantity'])) {
    // Set the post variables so we easily identify them, also make sure they are integer

    $id_produk = (int)$_GET['id_produk'];
    $quantity = (int)$_GET['quantity'];

    $data = [
        'id_produk' => $id_produk,
        'quantity' => $quantity
    ];
    require_once 'controllers/CartController.php';
    $cart = new CartController();

    $cart->add_to_cart($data);

    // Prevent form resubmission...
    header('location: index.php?page=cart');
}