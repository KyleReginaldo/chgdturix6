<!-- <?php
include 'db.php';
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>
    <header>
        <h1>Shopping Cart</h1>
    </header>
    <main>
        <section class="cart-container">
            <section class="cart">
                <h2>Selected Products</h2>
                <div class="cart-content">
                    <table id="cart-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Subtotal</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Product rows will be added here by JavaScript -->
                        </tbody>
                    </table>
                </div>
                <div class="total">
                    <strong>Total: $<span id="total-price">0.00</span></strong>
                </div>
            </section>
            <section class="cart-summary">
                <h2>Cart Summary</h2>
                <div class="summary-item">
                    <span>Subtotal:</span>
                    <span id="subtotal-price">$0.00</span>
                </div>
                <div class="summary-item">
                    <span>Shipping:</span>
                    <span id="shipping-price">$5.00</span>
                </div>
                <div class="summary-item">
                    <span>Tax:</span>
                    <span id="tax-price">$0.00</span>
                </div>
                <div class="summary-item">
                    <span>Total:</span>
                    <span id="final-total">$0.00</span>
                </div>
                <div class="checkout">
                    <button onclick="checkout()">Checkout</button>
                    <select id="delivery-address">
                        <option value="">Select Delivery Address</option>
                        <option value="address1">123 Main St</option>
                        <option value="address2">456 Elm St</option>
                    </select>
                </div>
            </section>
        </section>
        <section class="featured-products">
            <h2>Featured Products</h2>
            <div class="slider">
                <button class="slider-control prev" onclick="prevSlide()">&#10094;</button>
                <div class="slider-wrapper">
                    <div class="slider-track">
                        <!-- Product details -->
                        <div class="product">
                            <img src="https://via.placeholder.com/150" alt="Featured Product 1">
                            <div class="product-info">
                                <h3>Featured Product 1</h3>
                                <p>$25.00</p>
                                <button onclick="addToCart('Featured Product 1', 25.00)">Add to Cart</button>
                            </div>
                        </div>
                        <!-- Repeat for more products -->
                        <div class="product">
                            <img src="https://via.placeholder.com/150" alt="Featured Product 2">
                            <div class="product-info">
                                <h3>Featured Product 2</h3>
                                <p>$30.00</p>
                                <button onclick="addToCart('Featured Product 2', 30.00)">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product">
                            <img src="https://via.placeholder.com/150" alt="Featured Product 3">
                            <div class="product-info">
                                <h3>Featured Product 3</h3>
                                <p>$35.00</p>
                                <button onclick="addToCart('Featured Product 3', 35.00)">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product">
                            <img src="https://via.placeholder.com/150" alt="Featured Product 4">
                            <div class="product-info">
                                <h3>Featured Product 4</h3>
                                <p>$40.00</p>
                                <button onclick="addToCart('Featured Product 4', 40.00)">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product">
                            <img src="https://via.placeholder.com/150" alt="Featured Product 4">
                            <div class="product-info">
                                <h3>Featured Product 4</h3>
                                <p>$40.00</p>
                                <button onclick="addToCart('Featured Product 4', 40.00)">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product">
                            <img src="https://via.placeholder.com/150" alt="Featured Product 4">
                            <div class="product-info">
                                <h3>Featured Product 4</h3>
                                <p>$40.00</p>
                                <button onclick="addToCart('Featured Product 4', 40.00)">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product">
                            <img src="https://via.placeholder.com/150" alt="Featured Product 4">
                            <div class="product-info">
                                <h3>Featured Product 4</h3>
                                <p>$40.00</p>
                                <button onclick="addToCart('Featured Product 4', 40.00)">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product">
                            <img src="https://via.placeholder.com/150" alt="Featured Product 4">
                            <div class="product-info">
                                <h3>Featured Product 4</h3>
                                <p>$40.00</p>
                                <button onclick="addToCart('Featured Product 4', 40.00)">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product">
                            <img src="https://via.placeholder.com/150" alt="Featured Product 4">
                            <div class="product-info">
                                <h3>Featured Product 4</h3>
                                <p>$40.00</p>
                                <button onclick="addToCart('Featured Product 4', 40.00)">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product">
                            <img src="https://via.placeholder.com/150" alt="Featured Product 4">
                            <div class="product-info">
                                <h3>Featured Product 4</h3>
                                <p>$40.00</p>
                                <button onclick="addToCart('Featured Product 4', 40.00)">Add to Cart</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <button class="slider-control next" onclick="nextSlide()">&#10095;</button>
            </div>
        </section>
    </main>
    <script src="js/cart.js"></script>
</body>
</html>
