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

$sql = "DELETE FROM makeup WHERE product_id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Product deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: admin.php");
?>
