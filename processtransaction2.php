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

  // Get the transaction details from the previous page
  $product_name = $_POST['product_name'];
  $price = $_POST['price'];
  $customer_name = $_POST['customer_name'];
  $customer_email = $_POST['customer_email'];
  $customer_phone = $_POST['customer_phone'];
  $payment_method = $_POST['payment_method'];

  // Process the transaction (this is a simplified example)
  // In a real-world scenario, you would integrate a payment gateway here
  if ($payment_method == 'Credit Card') {
    // Process credit card payment
  } elseif ($payment_method == 'Debit Card') {
    // Process debit card payment
  } elseif ($payment_method == 'Net Banking') {
    // Process net banking payment
  }

  // Insert the transaction details into the database
  $sql = "INSERT INTO transactions (product_name, price, customer_name, customer_email, customer_phone, payment_method) VALUES ('$product_name', '$price', '$customer_name', '$customer_email', '$customer_phone', '$payment_method')";
  if ($conn->query($sql) === TRUE) {
    echo "<h2>Transaction Successful!</h2>";
    echo "Thank you for purchasing $product_name. Your transaction has been processed successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>