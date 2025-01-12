<?php
    //require_once 'connection/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Yummy Union - Explore and share healthy recipes. Discover popular recipes like Avocado Salad, Grilled Chicken, and Vegetarian Pasta.">
    <title>Yummy Union Recipe Sharing System</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="../CSS/index.css">
    <!-- AOS Library for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="slideshow">
            <div class="slide fade">
                <img src="../IMAGES/almon.jpg" alt="almon">
            </div>
            <div class="slide fade">
                <img src="../IMAGES/Almond-Butter.jpg" alt="Almond-Butter">
            </div>
            <div class="slide fade">
                <img src="../IMAGES/apple.jpg" alt="apple">
            </div>
        </div>
        <div class="overlay">
            <img src="../IMAGES/logo.webp" alt="Yummy Union Logo" class="logo">
            <h1>Yummy Union</h1>
            <button type="button" class="login-button">
            <a href="login.php"><img src="../IMAGES/user.png" alt="User Icon" class="user-icon">Login</a>
            </button>


            <p>Explore and Share Healthy Recipes</p>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="submit.php">Submit Recipe</a></li>
                    <li><a href="browse.php">Browse Recipes</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Section -->
    <section class="main">
        <div class="cont">
            <h2>Welcome to Yummy Union</h2>
            <p>Discover an incredible array of delicious and healthy recipes. Whether you are a seasoned chef or a beginner in the kitchen, our platform is designed to inspire creativity and health-conscious living. Join us and share your passion for food!</p>
        </div>
    </section>

    <!-- Recipe Section -->
    <section class="recipe">
        <div class="cont">
            <h2>Popular Recipes</h2>
            <div class="allrecipe">
                <!-- Recipe Cards -->
                <div class="list_of_recipe">
                    <img src="../IMAGES/recipe1.jpg" alt="Avocado Salad">
                    <h3>Avocado Salad</h3>
                    <p>Fresh and perfect for summer.</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="list_of_recipe">
                    <img src="../IMAGES/recipe2.jpg" alt="Grilled Chicken">
                    <h3>Grilled Chicken</h3>
                    <p>Protein-packed meal.</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="list_of_recipe">
                    <img src="../IMAGES/recipe3.jpg" alt="Vegetarian Pasta">
                    <h3>Vegetarian Pasta</h3>
                    <p>Loaded with vegetables.</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="list_of_recipe">
                    <img src="../IMAGES/chocolate.jpg" alt="Chocolate Smoothie">
                    <h3>Chocolate Smoothie</h3>
                    <p>A perfect sweet treat.</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="cont">
            <p>&copy; 2024 Yummy Union. Connect with us on <a href="https://www.facebook.com/login.php/">Facebook</a> and <a href="https://www.instagram.com/accounts/login/?hl=en">Instagram</a>.</p>
        </div>
    </footer>

    <!-- Slideshow JavaScript -->
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            const slides = document.querySelectorAll('.slide');
            slides.forEach(slide => (slide.style.display = 'none'));
            slideIndex++;
            if (slideIndex > slides.length) slideIndex = 1;
            slides[slideIndex - 1].style.display = 'block';
            setTimeout(showSlides, 4000); // Change every 4 seconds
        }
    </script>

    <!-- AOS JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
        });
    </script>
</body>
</html>
