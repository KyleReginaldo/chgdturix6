<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link rel="stylesheet" href="home.css" />
    <!-- Font Awesome CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>
  <body>
    <!-- Top Header -->
    <?php
    include 'navbar.php';?>

    <!-- Banner -->
    <section class="banner">
      <div class="slider">
        <img
          src="C:\xampp\htdocs\ITEC75\images\banner.jpg"
          alt="Banner Image 1"
          class="slider-img active"
        />
        <img
          src="C:\xampp\htdocs\ITEC75\images\banner1.jpg"
          alt="Banner Image 2"
          class="slider-img"
        />
        <img
          src="C:\xampp\htdocs\ITEC75\images\banner2.jpg"
          alt="Banner Image 3"
          class="slider-img"
        />
      </div>
      <div class="banner-text">
        <h1>Prime Tire</h1>
        <p>Discover the best products and deals!</p>
        <a href="#" class="shop-now-button">Shop Now</a>
      </div>
      <div class="slider-controls">
        <span class="prev">&#10094;</span>
        <span class="next">&#10095;</span>
      </div>
    </section>

    <!-- Information Section -->
    <section class="info-section">
      <div class="info-item">
        <i class="fas fa-truck icon-img"></i>
        <p>Free Delivery</p>
      </div>
      <div class="info-item">
        <i class="fas fa-credit-card icon-img"></i>
        <p>Quick Payment</p>
      </div>
      <div class="info-item">
        <i class="fas fa-tags icon-img"></i>
        <p>Best Deals</p>
      </div>
      <div class="info-item">
        <i class="fas fa-globe icon-img"></i>
        <p>Ship Nationwide</p>
      </div>
    </section>

    <!-- Featured Products Section -->
    <section class="featured-products">
      <div class="categories">
        <h2>Categories</h2>
        <ul>
          <li><a href="#">All-Season Tires</a></li>
          <li><a href="#">Winter Tires</a></li>
          <li><a href="#">Summer Tires</a></li>
          <li><a href="#">Off-Road Tires</a></li>
          <li><a href="#">Performance Tires</a></li>
          <li><a href="#">Eco-Friendly Tires</a></li>
        </ul>
      </div>
      <div class="products">
        <h2>Featured Products</h2>
        <div class="product-grid">
          <div class="product">
            <img
              src="https://via.placeholder.com/300x200"
              alt="Featured Product 1"
            />
            <div class="product-info">
              <h3>Featured Product 1</h3>
              <p>$25.00</p>
              <button>Add to Cart</button>
            </div>
          </div>
          <!-- Repeat for more products -->
          <div class="product">
            <img
              src="https://via.placeholder.com/300x200"
              alt="Featured Product 2"
            />
            <div class="product-info">
              <h3>Featured Product 2</h3>
              <p>$30.00</p>
              <button>Add to Cart</button>
            </div>
          </div>
          <div class="product">
            <img
              src="https://via.placeholder.com/300x200"
              alt="Featured Product 3"
            />
            <div class="product-info">
              <h3>Featured Product 3</h3>
              <p>$35.00</p>
              <button>Add to Cart</button>
            </div>
          </div>
          <div class="product">
            <img
              src="https://via.placeholder.com/300x200"
              alt="Featured Product 4"
            />
            <div class="product-info">
              <h3>Featured Product 4</h3>
              <p>$40.00</p>
              <button>Add to Cart</button>
            </div>
          </div>
          <div class="product">
            <img
              src="https://via.placeholder.com/300x200"
              alt="Featured Product 4"
            />
            <div class="product-info">
              <h3>Featured Product 4</h3>
              <p>$40.00</p>
              <button>Add to Cart</button>
            </div>
          </div>
          <div class="product">
            <img
              src="https://via.placeholder.com/300x200"
              alt="Featured Product 4"
            />
            <div class="product-info">
              <h3>Featured Product 4</h3>
              <p>$40.00</p>
              <button>Add to Cart</button>
            </div>
          </div>
          <div class="product">
            <img
              src="https://via.placeholder.com/300x200"
              alt="Featured Product 4"
            />
            <div class="product-info">
              <h3>Featured Product 4</h3>
              <p>$40.00</p>
              <button>Add to Cart</button>
            </div>
          </div>
          <div class="product">
            <img
              src="https://via.placeholder.com/300x200"
              alt="Featured Product 4"
            />
            <div class="product-info">
              <h3>Featured Product 4</h3>
              <p>$40.00</p>
              <button>Add to Cart</button>
            </div>
          </div>
          <div class="product">
            <img
              src="https://via.placeholder.com/300x200"
              alt="Featured Product 4"
            />
            <div class="product-info">
              <h3>Featured Product 4</h3>
              <p>$40.00</p>
              <button>Add to Cart</button>
            </div>
          </div>

          <!-- Add more products as needed -->
        </div>
      </div>
    </section>
    <!-- Brand Slider Section -->
    <section class="brand-slider">
      <h2>Our Brands</h2>
      <div class="brand-slider-wrapper">
        <div class="brand">
          <img src="https://via.placeholder.com/150x100" alt="Brand 1" />
        </div>
        <div class="brand">
          <img src="https://via.placeholder.com/150x100" alt="Brand 2" />
        </div>
        <div class="brand">
          <img src="https://via.placeholder.com/150x100" alt="Brand 3" />
        </div>
        <div class="brand">
          <img src="https://via.placeholder.com/150x100" alt="Brand 4" />
        </div>
        <div class="brand">
          <img src="https://via.placeholder.com/150x100" alt="Brand 5" />
        </div>
        <div class="brand">
          <img src="https://via.placeholder.com/150x100" alt="Brand 6" />
        </div>
        <div class="brand">
          <img src="https://via.placeholder.com/150x100" alt="Brand 6" />
        </div>
        <div class="brand">
          <img src="https://via.placeholder.com/150x100" alt="Brand 6" />
        </div>
        <div class="brand">
          <img src="https://via.placeholder.com/150x100" alt="Brand 6" />
        </div>
        <!-- Add more brands as needed -->
      </div>
    </section>
    <!-- Blog Post Section -->
    <section class="blog-posts">
      <h2>Latest Blog Posts</h2>
      <div class="blog-grid">
        <article class="blog-post">
          <img src="https://via.placeholder.com/400x250" alt="Blog Post 1" />
          <div class="blog-info">
            <h3>Blog Post Title 1</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
              condimentum nunc nec leo efficitur...
            </p>
            <a href="#" class="read-more">Read More</a>
          </div>
        </article>
        <article class="blog-post">
          <img src="https://via.placeholder.com/400x250" alt="Blog Post 2" />
          <div class="blog-info">
            <h3>Blog Post Title 2</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
              condimentum nunc nec leo efficitur...
            </p>
            <a href="#" class="read-more">Read More</a>
          </div>
        </article>
        <article class="blog-post">
          <img src="https://via.placeholder.com/400x250" alt="Blog Post 3" />
          <div class="blog-info">
            <h3>Blog Post Title 3</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
              condimentum nunc nec leo efficitur...
            </p>
            <a href="#" class="read-more">Read More</a>
          </div>
        </article>
        <!-- Add more blog posts as needed -->
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <div class="footer-content">
        <div class="footer-section about">
          <h4>About Us</h4>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
        <div class="footer-section links">
          <h4>Quick Links</h4>
          <ul class="footer-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="footer-section legal">
          <h4>Legal</h4>
          <ul class="footer-links">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
        <div class="footer-section social-media">
          <h4>Follow Us</h4>
          <a href="#" aria-label="Facebook"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" aria-label="Instagram"
            ><i class="fab fa-instagram"></i
          ></a>
          <a href="#" aria-label="LinkedIn"
            ><i class="fab fa-linkedin-in"></i
          ></a>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 Prime Tire. All rights reserved.</p>
      </div>
    </footer>

    <script src="js/home.js"></script>
  </body>
</html>
