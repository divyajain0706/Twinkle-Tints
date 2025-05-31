<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="css/1page.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/2footer.cs">       
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
    <form method="POST"  action="register.php">
    <div class="container11">
        <div class="text1">
            <h1>Sign up</h1>
            <input class="input1" type="text" name="firstname" placeholder="First Name">
            <input class="input2" type="text" name="lastname" placeholder="Last Name">
            <input class="input3" type="text" name="email" placeholder="E-mail">
            <input class="input4" type="text" name="pass" placeholder="password">
            <p>already a member?<span>
                <a href="./2Login.php">Log In</a>
                </a>
            </span></p>
            <button class="btn" name="signUp">Sign Up</button>
        </div>
        </div>
    </div>
    </form>
    <!--<footer>
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
    </footer>-->
</body>
</html>