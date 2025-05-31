<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demowebsite";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$name = $_POST['product_name'];
$prod_id = $_POST['product_id'];
$price = $_POST['price'];
$image = $_POST['product_image'];

$sql = "INSERT INTO makeup (product_name, product_id, price, product_image) VALUES ('$name', '$prod_id', '$price','$image')";

if ($conn->query($sql) === TRUE) {
    echo "New product added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: admin.php");
?>
