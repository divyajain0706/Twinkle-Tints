<?php
// Include the database connection file
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "demowebsite";

$conn = new mysqli($servername,$username,$password,$db_name);
// Retrieve the products from the cart
$sql = "SELECT * FROM mycart";
$result = $conn->query($sql);

// Calculate the total price
$total_price = 0;
$products = array();
while ($row = $result->fetch_assoc()) {
    $product_id = $row['product_id'];
    $sql_product = "SELECT * FROM skinproducts WHERE product_id = $product_id UNION SELECT * FROM makeup WHERE product_id = $product_id UNION SELECT * FROM hairs WHERE product_id = $product_id UNION SELECT * FROM brushesandtools WHERE product_id = $product_id UNION SELECT * FROM fragrance WHERE product_id = $product_id";
    $product_result = $conn->query($sql_product);
    $product_row = $product_result->fetch_assoc();
    $total_price += $product_row['price'];
    $products[] = array(
        'name' => $product_row['product_name'],
        'price' => $product_row['price']
    );
}

// Generate the form
?>

<!DOCTYPE html>
<html>
<head>
    <title>Transaction Bill</title>
    <link rel="stylesheet" type="text/css" href="shopall.css">
</head>
<body>

     <?php
      include('header.php');
     ?>
    <div class="container">
        <h2>Transaction Bill</h2>
        <form action="process_transaction.php" method="POST">
            <table class="transaction-table">
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                </tr>
                <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td>Total:</td>
                    <td><?php echo $total_price; ?></td>
                </tr>
            </table>
            <input type="hidden" name="total_price" value="<?php echo $total_price; ?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="useremail" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="userphone" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea name="useraddress" required></textarea>
            </div>
            <input type="submit" value="Process Transaction" class="submit-button">
        </form>
    </div>

    <?php
      include('footer.php');
    ?>
</body>
</html>