
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="Shopnow.css">
</head>
<body>

    <?php
       include('header.php');
    ?>
    
    <main>
        <section class="product-details">
            <div class="product-image">
                <img src="Images/matt lipstic.png" alt="Matt Lipstic">
            </div>
            <div class="product-info">
                <h1>Glossy Matte Lipstic</h1>
                <p class="product-description">Glossy pink Matte Lipstic</p>
                <p class="skin-type">Skin Type: All Skin Types</p>
                <p class="price">₹1,230</p>
                <div class="size-selection">
                    <label for="size">Size:</label>
                    <select id="size">
                        <option value="100ml">100 ML</option>
                        <option value="30ml">30 ML</option>
                    </select>
                </div>
                <button class="add-to-cart">Add to Cart</button>
                <a href="orderdetails.php">
                <button class="shop-now">Shop Now</button>
                </a>
            </div>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 Twinkle Tints</p>
    </footer>

</body>
</html>