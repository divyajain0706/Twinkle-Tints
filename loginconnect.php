<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the username and password from the form
    $uname= $_POST['loginusername'];
    $pass= $_POST['loginpassword'];
    $phone= $_POST['loginphone'];

// Sanitize the input
$uname = mysqli_real_escape_string($conn, $uname);
$pass = mysqli_real_escape_string($conn, $pass);
$phone = mysqli_real_escape_string($conn, $phone);

// Query to check if the user exists in the database
$sql = "SELECT * FROM userlogin WHERE loginusername='$uname' AND loginpassword='$pass'";
$result = $conn->query($sql);

// If the user exists
if ($result->num_rows > 0) {
    // Get the user data
    $row = $result->fetch_assoc();

    // Set session variables
    session_start();
    $_SESSION["loginusername"] = $row["loginusername"];
    $_SESSION["loginpassword"] = $row["loginpassword"];
    $_SESSION["loginphone"] = $row["loginphone"];

    // Redirect to the home page
    header("Location: beautyweb.php");
    exit;
} /*else {
    // User does not exist
    echo "Invalid username or password.";
}*/

// Close the database connection
$conn->close();
?>