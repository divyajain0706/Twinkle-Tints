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
    <!--<link rel="stylesheet" href="loginform2.css">-->
    <style>
       .card {
    height: 30rem;
    width: 340px !important;
    background: lightgrey;
    background-color: #4158D0;
    background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
    border-top-left-radius: 2rem;
    border-bottom-right-radius: 2rem;
    padding: 1rem;
    box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
    transition: 0.5s ease-in-out;
    margin-left: 35% !important;
    margin-top: 2.5rem;
  }
  
  .heading {
    text-align: center;
    font-weight: 600;
    padding-top: 1rem;
    font-size: large;
  }
  .input{
      margin-top: 2px;
  }
  
  .input-div {
    display: flex;
    margin-top: 2rem;
    transition: 0.5s ease-in-out;
    margin-left: 50px;
  }
  
  .card input {
    background-color: transparent;
    border: none;
    border-bottom: 1px solid black;
    width: 12rem;
    padding: 8px;
    outline: none;
  }
  
  .button-div {
    text-align: center;
  }
  
  .submit {
    margin-top: 5rem;
    text-align: center;
    padding: 8px 3rem;
    border: none;
    border-top-left-radius: 1rem;
    border-bottom-right-radius: 1rem;
    background-color: black;
    color: white;
    transition: 0.5s ease-in-out;
    cursor: pointer
  }
  
  .submit:hover {
    box-shadow: rgba(44, 43, 43, 0.664) 5px 5px, rgba(45, 45, 45, 0.3) 10px 10px, rgba(60, 59, 59, 0.2) 15px 15px, rgba(54, 53, 53, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;
  }
  
  .card input::placeholder {
    color: black;
  }
  
  .input:focus {
    transition: 0.2s ease-in-out;
    box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
  }
  
  .input:hover {
    transition: 0.2s ease-in-out;
    box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
  }
    </style>
    
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