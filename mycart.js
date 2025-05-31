// Add event listener to "Add to Cart" button
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', event => {
        // Get product ID from button's data attribute
        const product_id = button.dataset.productId;

        // Send AJAX request to add product to cart
        fetch('add_to_cart.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `product_id=${product_id}`,
        })
        .then(response => response.text())
        .then(message => console.log(message))
        .catch(error => console.error(error));
    });
});








let cart = JSON.parse(localStorage.getItem('cart')) || [];

function updateCart() {
    let cartItemsContainer = document.getElementById('cart-items');
    let cartTotalContainer = document.getElementById('cart-total');
    cartItemsContainer.innerHTML = '';
    let total = 0;

    cart.forEach((product, index) => {
        total += product.price;
        cartItemsContainer.innerHTML += `
            <div class="cart-item">
                <div>${product.name}</div>
                <div>$${product.price.toFixed(2)}</div>
                <button onclick="removeFromCart(${index})">Remove</button>
            </div>
        `;
    });

    cartTotalContainer.innerHTML = `Total: $${total.toFixed(2)}`;
}

function removeFromCart(index) {
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCart();
}

document.getElementById('checkout-button').addEventListener('click', function() {
    localStorage.setItem('cart', JSON.stringify(cart));
    window.location.href = 'billingdetails.php';
});

window.onload = updateCart;
