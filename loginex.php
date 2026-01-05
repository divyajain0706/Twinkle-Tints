<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u_name = $_POST['loginusername'];
    $u_pass = $_POST['loginpassword'];
    $u_phone = $_POST['loginphone'];

    // Set your email address where you want to receive emails
    $to = "your_email@example.com";

    // Email subject
    $subject = "Contact Form Submission";

    // Email content
    $body = "Name: $u_name\nEmail: $u_pass\n\n$u_phone";

    // Send email
  /*  if (mail($to, $subject, $body)) {
        echo '<p class="success">Your message has been sent successfully! We will get back to you soon.</p>';
    } else {
        echo '<p class="error">Sorry, something went wrong. Please try again later.</p>';
    }
        */
}
?>
<?php
$insert = false;
if(isset($_POST['loginusername'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "loginform";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password, $db);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $u_name = $_POST['loginusername'];
    $u_pass = $_POST['loginpassword'];
    $u_phone = $_POST['loginphone'];
    $sql = "INSERT INTO userlogin (loginusername, loginpassword, loginphone) VALUES ('$u_name', '$u_pass', '$u_phone')";
    /*INSERT INTO trip.trip (name, age, gender, email, phone, other, dt) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());
    INSERT INTO contact_form (id, u_name, u_email, u_message) VALUES ('1', 's', 's@gmail.com', 'r');
    */
    // echo $sql;  
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title> 
    <link rel="stylesheet" href="loginform2.css">
    
</head>
<body>
    <header>
    <?php include('header.php');?>
</header>

<div class="card">
    <p class="heading">Form</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <div class="input">
      
      <div class="input-div">
      <input type="text" class="input" name="loginusername" placeholder="Username or Email">
      </div>

      <div class="input-div">
      <input class="input" type="text" name="loginpassword" placeholder="Password">
      </div>

      <div class="input-div">
      <input class="input" type="text" name="loginphone"    placeholder="Phone">
      </div>

    </div>
      <div class="button-div">
        <button class="submit" name="submit">Submit</button>
      </div>
      </form>
  </div>

<footer>
    <?php include 'footer.php'; ?>
</footer>
</body>
</html>