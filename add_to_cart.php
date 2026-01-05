<?php
session_start();

// Get product ID from AJAX request
$product_id = $_POST['product_id'];

// Add product to cart array
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$_SESSION['cart'][] = $product_id;

// Return success message
echo 'Product added to cart!';
?>