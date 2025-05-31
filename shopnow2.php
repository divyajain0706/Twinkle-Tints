<?php
  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "demowebsite";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Get the product details from the previous page
  $product_id = $_POST['product_id'];
  $product_name = $_POST['product_name'];
  $price = $_POST['price'];
  ?>

  
  <!DOCTYPE html>
<html>
<head>
    <title>Transaction Bill</title>
    <link rel="stylesheet" type="text/css" href="shopnow2.css">
</head>
<body>

     <?php
      include('header.php');
     ?>
     <?php
  echo "<div class='container'>";
  echo "<h2>Transaction Details</h2>";
  echo "<form action='processtransaction2.php' method='POST'>";
  echo "<label>Product Name:</label>";
  echo "<input type='text' name='product_name' value='$product_name' readonly><br><br>";
  echo "<label>Price:</label>";
  echo "<input type='text' name='price' value='$price' readonly><br><br>";
  echo "<label>Customer Name:</label>";
  echo "<input type='text' name='customer_name' required><br><br>";
  echo "<label>Customer Email:</label>";
  echo "<input type='email' name='customer_email' required><br><br>";
  echo "<label>Customer Phone:</label>";
  echo "<input type='text' name='customer_phone' required><br><br>";
  echo "<label>Payment Method:</label>";
  echo "<select name='payment_method'>";
  echo "<option value='Credit Card'>Credit Card</option>";
  echo "<option value='Debit Card'>Debit Card</option>";
  echo "<option value='Net Banking'>Net Banking</option>";
  echo "</select><br><br>";
  echo "<input type='submit' value='Make Payment'>";
  echo "</form>";
  echo "</div>";

  $conn->close();
?>

<?php
  //include('footer.php');
?>