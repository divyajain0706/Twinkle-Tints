<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country=$_POST['country'];
    $streetadress=$_POST['streetadd'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $phone = $_POST['phone'];
    $cardnumber = $_POST['cardnumber'];
    $email = $_POST['email'];

    // Set your email address where you want to receive emails
    $to = "your_email@example.com";

    // Email subject
    $subject = "Contact Form Submission";

    // Email content
    $body = "Name: $firstname\nLastname : $lastname\n Email: $email\n Phone : $phone";
}

$insert = false;
if(isset($_POST['firstname'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "billingdetails";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password, $db);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());
    }

    //collect post variables
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country=$_POST['country'];
    $streetadress=$_POST['streetadd'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $phone = $_POST['phone'];
    $cardnumber = $_POST['cardnumber'];
    $email = $_POST['email'];
    $sql = "INSERT INTO orderdetails(firstname, lastname, country, streetadd, city, state, phone, cardnumber, email) VALUES ('$firstname','$lastname', '$country','$streetadress','$city','$state','$phone', '$cardnumber','$email')";

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}

// Get product ID from query string
//$product_id = $_GET['product_id'];
//$product_id = isset($_GET['product_id'])? $_GET['product_id'] : 0;

// Connect to database
$server = "localhost";
$username = "root";
$password = "";
$db = "demowebsite";
$conn = mysqli_connect($server, $username, $password, $db);

// Retrieve product information from database
$query =  "SELECT * FROM skinproducts WHERE product_id=".$row_cart["product_id"]." UNION SELECT * FROM makeup WHERE product_id=".$row_cart["product_id"]." UNION SELECT * FROM hairs WHERE product_id=".$row_cart["product_id"]." UNION SELECT * FROM brushesandtools WHERE product_id=".$row_cart["product_id"]." UNION SELECT * FROM fragrance WHERE product_id=".$row_cart["product_id"];
$result = mysqli_query($conn, $query);


// Display product information
while($product_row = mysqli_fetch_assoc($result)){
$product_name = $product_row['product_name'];
$product_price = $product_row['price'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Now Form</title>
    <link rel="stylesheet" href="orderdetails.css">
</head>
<body>
 <?php
   include('header.php');
?>
<!---------Header------Finish----------->

    <div class="container">
        <h1>Billing details</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            
            <label for="first-name">First name *</label>
            <input type="text" id="first-name" name="firstname" required>

            <label for="last-name">Last name *</label>
            <input type="text" id="last-name" name="lastname" required>

            <label for="country">Country *</label>
            <input type="text" id="country" name="country" required>

            <label for="street-address">Street address *</label>
            <input type="text" id="street-address" name="streetadd" required>

            <label for="city">Town / City *</label>
            <input type="text" id="city" name="city" required>

            <label for="state">State *</label>
            <input type="text" id="state" name="state" required>

            <label for="phone">Phone *</label>
            <input type="text" id="phone" name="phone" required>

            <h2>Your order</h2>
            <div class="order-summary">
                <p>Product: <?php echo $product_name;?> ×1</p>
                <p>Subtotal: Rs.<?php echo $product_price;?></p>
                <p>Total: Rs.<?php echo $product_price;?></p>
            </div>

            <h2>Credit Cards</h2>
            <div class="credit-cards">
                <img src="Images/Amex.png" alt="American Express">
                <img src="Images/Discover.png" alt="Discover">
                <img src="Images/Mastercard.png" alt="Visa">
                <img src="Images/Visa.png" alt="Mastercard">
            </div>

            <label for="card-number">Card number *</label>
            <input type="text" id="card-number" name="cardnumber" required>

            <label for="email">Email *</label>
            <input type="email" id="email" name="email" required>


            <button type="submit" name="submit">Place Order</button>
        </form>
    </div>
    

    <?php
   include('footer.php');
}
 ?>


