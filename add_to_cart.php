<?php
session_start();

$product_id = $_GET['id'];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (!isset($_SESSION['cart'][$product_id])) {
    $_SESSION['cart'][$product_id] = 0;
}

$_SESSION['cart'][$product_id] += 1;

echo json_encode(["message" => "Product added to cart"]);
?>
