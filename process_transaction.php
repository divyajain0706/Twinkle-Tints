<?php
// Include the database connection file
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "demowebsite";

$conn = new mysqli($servername, $username, $password, $db_name);

// Retrieve the transaction data
$total_price = $_POST['total_price'];
$name = $_POST['username'];
$email = $_POST['useremail'];
$phone = $_POST['userphone'];
$address = $_POST['useraddress'];

// Process the transaction (e.g., using PayPal, Stripe, etc.)
// For demonstration purposes, we'll assume the transaction is successful
$transaction_status = 'success';

// Update the cart status
//$sql = "UPDATE mycart SET status = 'paid' WHERE status = 'pending'";
//$conn->query($sql);

// Insert user data into userinfo table
$sql = "INSERT INTO userinfo (username, useremail, userphone, useraddress) VALUES ('$name', '$email', '$phone', '$address')";
if ($conn->query($sql) === TRUE) {
    //echo "User data inserted successfully!";
} else {
   // echo "Error inserting user data: " . $conn->error;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Transaction Bill</title>
    <style>
.transaction-message {
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
        </style>
</head>
<body>

     <?php
      include('header.php');
     ?>
<?php
// Display the success message
if ($transaction_status == 'success') {
    echo '<div class="transaction-message">';
    echo '<h2>Transaction Successful!</h2>';
    echo '<p>Thank you for purchasing our products!</p>';
    echo '</div>';
} else {
    echo '<h2>Transaction Failed!</h2>';
    echo '<p>Please try again or contact our support team.</p>';
}
?>