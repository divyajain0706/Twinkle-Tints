<?php
session_start();

if (empty($_SESSION['mycart'])) {
    echo "<h2>Your cart is empty</h2>";
    exit;
}

// Function to calculate total price
function calculateTotalPrice($cart) {
    $total = 0;
    foreach ($cart as $product) {
        $total += $product['price'] * $product['quantity'];
    }
    return $total;
}

$cart = $_SESSION['cart'];
$totalPrice = calculateTotalPrice($cart);

// Display order summary and user information form
echo "<h2>Order Summary</h2>";
echo "<table border='1'>";
echo "<tr><th>Product Name</th><th>Price</th><th>Quantity</th><th>Total</th></tr>";
foreach ($cart as $product) {
    echo "<tr>";
    echo "<td>{$product['product_name']}</td>";
    echo "<td>{$product['price']}</td>";
    echo "<td>{$product['quantity']}</td>";
    echo "<td>" . $product['price'] * $product['quantity'] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h3>Total Price: $$totalPrice</h3>";

echo '<h2>Billing Information</h2>';
echo '<form action="process_order.php" method="POST">';
echo '<label for="name">Name:</label><input type="text" name="name" required><br>';
echo '<label for="email">Email:</label><input type="email" name="email" required><br>';
echo '<label for="address">Address:</label><textarea name="address" required></textarea><br>';
echo '<input type="submit" value="Place Order">';
echo '</form>';
?>
