<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en, id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurniStyle - Design Your Space</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="/image/erasebg-transformed (2).png" type="image/png">
</head>
<body>
    <header>
        <div class="hero">
            <div class="navbar">
                <div class="logo"><a href="">Furni<span>Style.</span></a></div>
                <ul class="links">
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#shop">Shop</a></li>
                    <li><a href="#sale">Sale</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

                <div class="nav-icons">
                    <?php if (isset($_SESSION['user_id'])): ?>
                    <span class="icon-btn" title="Logged in"><i class="fa-solid fa-user-check"></i></span>
                    <a href="logout.php" class="icon-btn" title="Logout"><i class="fa-solid fa-sign-out-alt"></i></a>
                    <?php else: ?>
                    <a href="#" class="icon-btn" id="userIcon"><i class="fa-solid fa-user"></i></a>
                    <?php endif; ?>
                    <a href="#" class="icon-btn"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <a href="#" class="icon-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="toggle-btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>

            <div class="content-hero">
                <h1>Design Your <span>Space</span></h1>
                <p>Bringing Your Dream Space to Life with Style and Comfort</p>
            </div>

            <div class="dropdown-menu">
                <li><a href="#hero">Home</a></li>
                <li><a href="#shop">Shop</a></li>
                <li><a href="#sale">Sale</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown-icons">
                    <a href="#" class="icon-btn"><i class="fa-solid fa-user"></i></a>
                    <a href="#" class="icon-btn"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <a href="#" class="icon-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                </li>
            </div>
        </div>
    </header>

    <!-- Shop By Category Section -->
    <section id="shop" class="shop-categories">
        <div class="container">
            <h2 class="section-title">SHOP BY CATEGORY</h2>
            <div class="categories-grid">
                <div class="category-item living-room">
                    <img src="image/Rectangle 4.png" alt="Living Room">
                    <div class="category-label">LIVING ROOM</div>
                </div>
                <div class="category-item kitchen">
                    <img src="image/Rectangle 6.png" alt="Kitchen">
                    <div class="category-label">KITCHEN</div>
                </div>
                <div class="category-item office">
                    <img src="image/Rectangle 9.png" alt="Office">
                    <div class="category-label">OFFICE</div>
                </div>
                <div class="category-item bedroom">
                    <img src="image/Rectangle 5.png" alt="Bedroom">
                    <div class="category-label">BEDROOM</div>
                </div>
                <div class="category-item laundry">
                    <img src="image/Rectangle 7.png" alt="Laundry">
                    <div class="category-label">LAUNDRY</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Products Section -->
    <section class="top-products">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">TOP PRODUCTS</h2>
                <a href="#" class="explore-link">EXPLORE COLLECTION →</a>
            </div>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-img">
                        <img src="image/Picsart_25-03-07_08-41-15-819 1.png" alt="Chair">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Chair</h3>
                        <p class="product-price">Rp 2.200.000</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="image/Picsart_25-03-08_09-37-50-496 1.png" alt="Sofa">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Sofa</h3>
                        <p class="product-price">Rp 3.000.000</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="image/Picsart_25-03-05_08-23-29-935 1.png" alt="Lamp">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Lamp</h3>
                        <p class="product-price">Rp 350.000</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="image/Picsart_25-03-08_09-34-00-527 1.png" alt="Modern Chair">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Chair</h3>
                        <p class="product-price">Rp 1.500.000</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="image/Picsart_25-03-08_09-27-53-954 1.png" alt="Table">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Table</h3>
                        <p class="product-price">Rp 2.250.000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop The Season Section -->
    <section id="sale" class="shop-season">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">SHOP THE SEASON</h2>
                <a href="#" class="explore-link">EXPLORE ALL ITEMS →</a>
            </div>
            <div class="season-grid">
                <div class="season-item">
                    <img src="image/spacejoy-IH7wPsjwomc-unsplash 1.png" alt="Seasonal Living Room">
                </div>
                <div class="season-item">
                    <img src="image/josh-hemsley-7QOKbETFg94-unsplash 1.png" alt="Seasonal Kitchen">
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="about-us">
        <div class="container">
            <div class="about-container">
                <div class="about-text-box">
                    <h2 class="about-title">ABOUT US</h2>
                    <p>At Furniture you will find well-designed furniture, home décor and accessories that are functional and affordable. We have everything from kitchens and mattresses to a large selection of modern bedroom furniture, sofas and more.</p>
                    <div class="explore-link-container">
                        <span class="explore-text">EXPLORE COLLECTION</span>
                        <a href="#" class="explore-button">→</a>
                    </div>
                </div>
                <div class="about-image">
                    <img src="image/john-tuesday-9K9mzLxOuXg-unsplash.jpg" alt="Modern Interior">
                </div>
                <div class="bottom-images">
                    <div class="lamp-image">
                        <img src="image/robby-mccullough-BiOE7iBX9M8-unsplash 1.png" alt="Modern Lamp">
                    </div>
                    <div class="brand-description">
                        <div class="brand-name">
                            <h2>Furni<span class="style-text">Style</span></h2>
                        </div>
                        <p>Realize your dream home furniture with the help of personalized furniture design and innovative products tailored to your style, space, and budget.</p>
                        <p>Whether you're furnishing a new home, renovating an existing space, the process of selecting perfect furniture pieces can be both enjoyable and challenging.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title">FREQUENTLY ASKED QUESTIONS</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>HOW TO ORDER</span>
                        <i class="arrow-icon">+</i>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>HOW TO CHOOSE FINISH</span>
                        <i class="arrow-icon">+</i>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>WHAT PAYMENT METHODS YOU ACCEPT?</span>
                        <i class="arrow-icon">+</i>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>HOW LONG DOES DELIVERY TAKE?</span>
                        <i class="arrow-icon">+</i>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>WHAT IS YOUR RETURN POLICY?</span>
                        <i class="arrow-icon">+</i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="container">
            <h2 class="newsletter-title">SUBSCRIBE TO OUR NEWSLETTER</h2>
            <form class="newsletter-form">
                <input type="email" placeholder="Your email address">
                <button type="submit">SUBSCRIBE</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-links">
                <div class="footer-col">
                    <h4>SHOP</h4>
                    <ul>
                        <li><a href="#">Living Room</a></li>
                        <li><a href="#">Kitchen</a></li>
                        <li><a href="#">Bedroom</a></li>
                        <li><a href="#">Office</a></li>
                        <li><a href="#">Laundry</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>HELP</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Order Status</a></li>
                        <li><a href="#">Payment Options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>COMPANY</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Sustainability</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>CONTACT</h4>
                    <ul>
                        <li>furnistyle@gmail.com</li>
                        <li>+62 87817653570</li>
                        <li>Jln. Sumanto Makan Sapi</li>
                        <li>Purwokerto, Jawa Tengah</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 FurniStyle. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Login/Register Popup -->
<div class="auth-popup" id="authPopup">
    <div class="auth-container">
        <span class="close-btn">&times;</span>
        
        <div class="auth-tabs">
            <button class="tab-btn active" data-tab="login">Login</button>
            <button class="tab-btn" data-tab="register">Register</button>
        </div>
        
        <!-- Login Form -->
        <form id="loginForm" class="auth-form active" action="login.php" method="POST">
            <div class="form-group">
                <label for="loginUsername">Username or Email</label>
                <input type="text" id="loginUsername" name="username" required>
            </div>
            <div class="form-group">
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" name="password" required>
            </div>
            <button type="submit" class="auth-btn">Login</button>
        </form>
        
        <!-- Register Form -->
        <form id="registerForm" class="auth-form" action="register.php" method="POST">
            <div class="form-group">
                <label for="regUsername">Username</label>
                <input type="text" id="regUsername" name="username" required>
            </div>
            <div class="form-group">
                <label for="regEmail">Email</label>
                <input type="email" id="regEmail" name="email" required>
            </div>
            <div class="form-group">
                <label for="regPassword">Password</label>
                <input type="password" id="regPassword" name="password" required>
            </div>
            <div class="form-group">
                <label for="regConfirmPassword">Confirm Password</label>
                <input type="password" id="regConfirmPassword" name="confirm_password" required>
            </div>
            <button type="submit" class="auth-btn">Register</button>
        </form>
        
        <div class="auth-message" id="authMessage"></div>
    </div>
</div>

<script>
    const toggleBtn = document.querySelector('.toggle-btn');
    const dropdownMenu = document.querySelector('.dropdown-menu');
    const authPopup = document.getElementById('authPopup');
    const closeBtn = document.querySelector('.close-btn');
    const userIcon = document.querySelector('.fa-user');
    const tabBtns = document.querySelectorAll('.tab-btn');
    const authForms = document.querySelectorAll('.auth-form');
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    const authMessage = document.getElementById('authMessage');

    // Toggle dropdown menu
    toggleBtn.addEventListener('click', () => {
        dropdownMenu.classList.toggle('open');
    });

    // Show auth popup when user icon is clicked
    userIcon.parentElement.addEventListener('click', (e) => {
        e.preventDefault();
        authPopup.style.display = 'flex';
    });

    // Close popup
    closeBtn.addEventListener('click', () => {
        authPopup.style.display = 'none';
        authMessage.textContent = '';
        authMessage.className = 'auth-message';
    });

    // Close popup when clicking outside
    authPopup.addEventListener('click', (e) => {
        if (e.target === authPopup) {
            authPopup.style.display = 'none';
            authMessage.textContent = '';
            authMessage.className = 'auth-message';
        }
    });

    // Switch between login and register tabs
    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active tab
            tabBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            // Show corresponding form
            const tab = btn.dataset.tab;
            authForms.forEach(form => {
                form.classList.remove('active');
                if (form.id === `${tab}Form`) {
                    form.classList.add('active');
                }
            });
        });
    });

    // Handle login form submission
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        
        fetch('login.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                authMessage.textContent = data.message;
                authMessage.className = 'auth-message success';
                setTimeout(() => {
                    authPopup.style.display = 'none';
                    window.location.reload();
                }, 1500);
            } else {
                authMessage.textContent = data.message;
                authMessage.className = 'auth-message error';
            }
        })
        .catch(error => {
            authMessage.textContent = 'An error occurred. Please try again.';
            authMessage.className = 'auth-message error';
        });
    });

    // Handle register form submission
    registerForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        
        fetch('register.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                authMessage.textContent = data.message;
                authMessage.className = 'auth-message success';
                
                // Switch to login tab after successful registration
                setTimeout(() => {
                    document.querySelector('.tab-btn[data-tab="login"]').click();
                    authMessage.textContent = '';
                    authMessage.className = 'auth-message';
                }, 1500);
            } else {
                authMessage.textContent = data.message;
                authMessage.className = 'auth-message error';
            }
        })
        .catch(error => {
            authMessage.textContent = 'An error occurred. Please try again.';
            authMessage.className = 'auth-message error';
        });
    });

    // Check if user is logged in and update UI
    function checkLoginStatus() {
        fetch('check_login.php')
            .then(response => response.json())
            .then(data => {
                if (data.loggedIn) {
                    const userIcon = document.querySelector('.fa-user');
                    userIcon.classList.remove('fa-user');
                    userIcon.classList.add('fa-user-check');
                    userIcon.title = `Logged in as ${data.username}`;
                }
            });
    }

    // Check login status when page loads
    document.addEventListener('DOMContentLoaded', checkLoginStatus);
</script>


</body>
</html>