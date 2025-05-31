<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="css/1page.css">
    <link rel="stylesheet" href="css/login.css">
    
</head>

<body>
    <header class="section">
        <div class="section">
        <nav class="navbar">
            <div class="logo">
                <img src="img/logo11.jpg" alt="mh_banner" width="200" height="200">
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
    <form  method="POST" action="register.php" >
    <div class="container">
        <div class="text">
            <h1>Login</h1>
            <input class="input1" type="text" name="email" placeholder="Enter UserName or E-mail">
            <input class="input2" type="password" name="pass" placeholder="Enter password">
            <p>Forget password</p>
            <button class="btn" name="Login">Login</button>
            <p>Not a member? <span>
                    <a href="./3signup.php">Sign UP</a>
                    </a>
            </span></p>
        </div>
    </div>
    </form>
</body>

</html>