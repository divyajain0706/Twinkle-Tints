<!DOCTYPE html>
<html>
<head>
    <title>Billing Details</title>
    <link rel="stylesheet" href="billingdetails.css">
    <script>
        window.onload = function() {
            const cartData = localStorage.getItem('cart');
            const cart = JSON.parse(cartData);
            let billingDetailsContainer = document.getElementById('billing-details');
            let total = 0;

            cart.forEach(product => {
                total += product.price;
                billingDetailsContainer.innerHTML += `<div>${product.name} - $${product.price.toFixed(2)}</div>`;
            });

            billingDetailsContainer.innerHTML += `<div>Total: $${total.toFixed(2)}</div>`;
            document.getElementById('cart-data').value = cartData;
        };
    </script>
</head>
<body>
    <header>
        <h1>Billing Details</h1>
    </header>
    <main>
        <div class="container">
            <h2>Billing Details</h2>
            <form action="orderdetails.php" method="post">
                <div id="billing-details"></div>
                <input type="hidden" name="cart_data" id="cart-data">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                <input type="submit" value="Place Order">
            </form>
        </div>
    </main>
</body>
</html>
