<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TwinkleTints: Makeup and Beauty</title>
    <link rel="stylesheet" href="style1.css"/>
    <link rel="font awesome" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
  body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
  }
  *{
  box-sizing: border-box;
}
.nav-links {
    list-style: none;
    display: flex;
    gap: 2rem;
    letter-spacing: 3px;
    margin: 0;
    padding: 14px;
    max-width: 100%;
}

</style>
</head>
<body>
    <!--Navigation Bar-->
    <nav class="navigation">
        <!--Logo-->
        <a href="#" class="logo">
            <img src="images/twinkle tints 1.png">
        </a>

        <!--Search bar-->
        <form class="search-box">
            <input type="text" placeholder="search products here">
                 <img src="images/search (1).png" width="18px" height="20px">
        </form>
        
        <!--Nav-buttons-->
        <div class="nav-btns">

            <!--nav-user-->
            <a href="loginform2.php" class="nav-user">
                <img src="images/user.png" width="30px">
            </a>

            <!--nav-cart-->
            <a href="cart.php" class="nav-cart">
                <img src="images/shopping-cart.png" width="30px"><span><sup>0</sup></span>
            </a>
        </div>
    </nav>
    <ul class="nav-links">
        <li><a href="beautyweb.php">HOME</a></li>
        <li><a href="makeup.php">MAKEUP</a></li>
        <li><a href="skin.php">SKIN</a></li>
        <li><a href="hairs.php">HAIR</a></li>
        <li><a href="brushesandtools.php">BRUSHES&TOOLS</a></li>
        <li><a href="fragrance.php">FRAGRANCE</a></li>
      </ul>

      
      <!--Main-part--->
      <section id="main">

        <!--Text----->
        <div class="main-text">
            <span>Welcome to Twinkle Tints</span>
            <h3>Your Destination for All Things Beauty</h3>
               <p>Discover the Art of Makeup
                At Twinkle Tints, we believe that beauty is an art form. Our extensive range of makeup and beauty products is designed to help you express yourself, highlight your best features, and feel confident in your own skin.

                Explore Our Collections</p>
            
                <button>
                    <div class="box">
                       Add to cart
                    </div>
                </button>
                
        </div>
        <!--Main---image--->
        <div class="main-img">
        <img src="images/mainimg3.png">
        </div>
      </section>

         <div class="grid-heading">
         <h3>Top Categories</h3>
         </div>

      <!--Product-Grid------>
      <div class="product-grid-3">

          <!--Product-grid-Box-->
        <div class="product-grid-box">
            <img src="images/makeup.png">

          <!--Product-Grid-Text-->
           <div class="product-grid-text">
            <strong>Makeup</strong>
           </div>
        </div>
          
        <!--Product-grid-box2-->
        <div class="product-grid-box">
            <img src="images/hairs.png">

          <!--Product-Grid-Text-->
           <div class="product-grid-text">
            <strong>Hairs</strong>
           </div>
        </div>

         <!--Product-grid-box3-->
        <div class="product-grid-box">
            <img src="images/Skincare.png">

          <!--Product-Grid-Text-->
           <div class="product-grid-text">
            <strong>Skincare</strong>
           </div>
        </div>

        <!--Product-grid-box4-->
        <div class="product-grid-box">
            <img src="images/Fragrance.png">

          <!--Product-Grid-Text-->
           <div class="product-grid-text">
            <strong>Fragrance</strong>
           </div>
        </div>
      </div>

      <!--CSS cards-->
        
      <!--<div class="card-head"><h3>Popular</h3></div>-->
        <div class="card-container">
            <!--Card1-->
            <div class="card">
                <img src="images/matt lipstic.png">
                <div class="card-content">
                    <b>Glossy Matt Listic</b>
                    <p>Rs.1,230</p>
                    <a href="Shopnow.php">
                    <button>Add to cart</button>
                    </a>
                </div>
            </div>
            <!--card2-->
            <div class="card">
                <img src="images/concealer.png">
                <div class="card-content">
                    <b>Concealer</b>
                    <p>Rs.1,580</p>
                    <button>Add to cart</button>
                </div>
            </div>
             <!--Card3-->
            <div class="card">
                <img src="images/Fluid foundation.png">
                <div class="card-content">
                    <b>Fluid Foundation</b>
                    <p>Rs.1,799</p>
                    <button>Add to cart</button>
                </div>
            </div>
            <!--Card4-->
            <div class="card">
                <img src="images/kajal eyeliner.png">
                <div class="card-content">
                    <b>Black glossy Eyeliner</b>
                    <p>Rs.1,299</p>
                    <button>Add to cart</button>
                </div>
            </div>
            <!--Card5-->
            <div class="card">
                <img src="images/blush.png">
                <div class="card-content">
                    <b>Pink Blush</b>
                    <p>Rs1.379</p>
                    <button>Add to cart</button>
                </div>
            </div>
            <!--Card6-->
            <div class="card">
                <img src="images/moisturizer.png">
                <div class="card-content">
                    <b>Moisturizer</b>
                    <p>Rs.899</p>
                    <button>Add to cart</button>
                </div>
            </div>

            <!--Card7-->
            <div class="card">
                <img src="images/kajal eyeliner.png">
                <div class="card-content">
                    <b>Kajal Eyeliner</b>
                    <p>Rs.699</p>
                    <button>Add to cart</button>
                </div>
            </div>

            <!--Card8-->
            <div class="card">
                <img src="images/cleansingwater.png">
                <div class="card-content">
                    <b>Cleansing water</b>
                    <p>Rs.580</p>
                    <button>Add to cart</button>
                </div>
            </div>
        </div>

        <div class="back-image">
            <img src="images/backimage.jpg">
        </div>


        <!--Footer-----Section-->

        <footer>
            <div class="footer-container">
                <div class="footer-section">
                    <img src="images/authenticity.png" alt="100% Authentic">
                    <h3>100% Authentic</h3>
                    <p>All our products are directly sourced from brands</p>
                </div>
                <div class="footer-section">
                    <img src="images/free-delivery.png" alt="Free Shipping">
                    <h3>Free Shipping</h3>
                    <p>On all orders above ₹299</p>
                </div>
                <div class="footer-section">
                    <img src="images/financial-advisor.png" alt="Certified Beauty Advisors">
                    <h3>Certified Beauty Advisors</h3>
                    <p>Get expert consultations</p>
                </div>
                <div class="footer-section">
                    <img src="images/delivery-status.png" alt="Easy Returns">
                    <h3>Easy Returns</h3>
                    <p>Hassle-free pick-ups and refunds</p>
                </div>
            </div>

            <div class="newsletter">
                <h4>Be the first to hear all things about Twinkle Tints</h4>
                <p>Stay connected for exclusive offers and latest updates, delivered straight to your inbox</p>
                <form>
                    <input type="email" placeholder="Enter your email">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </footer>
</body>
</html>