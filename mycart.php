<?php
session_start();

// Get cart array from session
$cart = $_SESSION['cart'];
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Generate HTML for cart items
foreach ($cart as $product_id) {
    // Retrieve product data from database or data storage
    $product_data = getProductData($product_id);
    echo '<div class="cart-item">';
    echo '<h2>' . $product_data['name'] . '</h2>';
    echo '<p>' . $product_data['price'] . '</p>';
    echo '</div>';
}

// Function to retrieve product data from database or data storage
function getProductData($product_id) {
    // TO DO: implement this function to retrieve product data
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mycart.css">
</head>
<body>

   <?php
     include('header.php');
   ?>
    <header>
        <h1>Shopping Cart</h1>
    </header>
    <main>
        <div id="cart-container">
            <h2>Your Cart</h2>
            <div id="cart-items"></div>
            <div id="cart-total"></div>
            <button id="checkout-button">Proceed to Checkout</button>
        </div>
    </main>

    <?php
     include('footer.php');
    ?>
    <script src="mycart.js"></script>

</body>
</html>