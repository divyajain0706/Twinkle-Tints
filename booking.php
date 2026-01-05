<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Booking Form</title>
<link rel="stylesheet" href="css/2footer.css">
<link rel="stylesheet" href="css/booking.css">
<link rel="stylesheet" href="css/1page.css">
<style>
    
</style>
</head>
<body>
<header>
        <div class="section">
        <nav class="navbar">
            <div class="logo">
                <img src="img/logo11.jpg" alt="mh_banner" width="150" height="100">
            </div>
            <div class="manu">
            <ul>
                <a href="./1page.php">Home</a>
                <a href="./3Tours.php">Tours</a>
                <a href="./5About.php">About</a>
                <a href="./6contact.php">Contact</a>
            </ul>
            </div>
            <div class="login">
             <a href="./2Login.php">Login</a>
            </div>
        </nav>
        </div>
    </header>
<?php
$host="localhost";
$user="root";
$pass="";
$db="Tourism_project";
$conn= mysqli_connect($host,$user,$pass,$db);


if(isset($_POST["Submit"])){
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$fullname = $_POST['fullname'];
$Date = $_POST['Date'];
$message = $_POST['message'];

$sql = "INSERT INTO bookingdb (fullname, email, phone, Date, message) VALUES ('$fullname', '$email', '$phone', '$Date','$message')";
$result = mysqli_query($conn, $sql);
 if($result){
    header ("location: booking.php");
   
 }
 else{
 echo "the record was not insereted successfly in the record";
 }
}
?>
<div class="container5">
    <h2>Booking Form</h2>
    <form action="#" method="POST">
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="fullname" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="date">Booking Date:</label>
            <input type="date" id="date" name="Date" required>
        </div>
        <div class="form-group">
            <label for="message">Additional Message:</label>
            <textarea id="message" name="message" rows="4"></textarea>
        </div>
        <div class="form-group">
            <button class="submit" type="submit" value="Submit" name="Submit">Submit</button>
        </div>
    </form>
    <!-- <main>
        <div class="text">
            <h1>Heading</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, delectus.</p>
        </div>
    </main> -->
</div>
<footer>
    <div class="container">
      <div class="footer-content">
        <h3>Contact Us</h3>
        <p><a href="mail: Tourism@gmail.com">Email: Tourism@gmail.com</a></p>
        <p><a href="tel: +83497778238484">Phone: +83497778238484</a></p>
      </div>
      <div class="footer-content">
        <h3>Follow Us</h3>
        <p>Facebook</p>
        <p>Twitter</p>
        <p>Instagram</p>
      </div>
      <div class="footer-content">
        <h3>Address</h3>
        <p>123 Tourism, </p>
        <p>Washim India</p>
      </div>
    </div>
  </footer>

</body>
</html>
