<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demowebsite";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['product_id'];
$name = $_POST['product_name'];
$image = $_POST['product_image'];
$price = $_POST['price'];

$sql = "UPDATE makeup SET ";
if (!empty($name)) $sql .= "product_name='$name',";
if (!empty($image)) $sql .= "product_image='$image',";
if (!empty($price)) $sql .= "price='$price',";
$sql = rtrim($sql, ',');
$sql .= " WHERE product_id='$id'"; // corrected this line

if ($conn->query($sql) === TRUE) {
    echo "Product updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: admin.php");
?>