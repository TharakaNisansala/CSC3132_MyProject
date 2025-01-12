<?php
    //require_once 'connection/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Recipes - Yummy Union</title>
    <link rel="stylesheet" href="../CSS/BrowseRecepi.css">
</head>
<body>
     <!-- Header Section -->
     <header>
        <div class="slideshow">
            <div class="slide fade">
                <img src="../IMAGES/almon.jpg" alt="almon" class="fade">
            </div>
            <div class="slide fade">
                <img src="../IMAGES/Almond-Butter.jpg" alt="Almond-Butter" class="fade">
            </div>
            <div class="slide fade">
                <img src="../IMAGES/apple.jpg" alt="apple" class="fade">
            </div>
        </div>
        <div class="overlay">
            <img src="../IMAGES/logo.webp" alt="Yummy Union Logo" class="logo">
            <h1>Browse Your Recipe</h1>
            <p>Explore and Share Healthy Recipes</p>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="submit.html">Submit Recipe</a></li>
                    <li class="Browse_Recipes"><a href="browseReceipe.html">Browse Recipes</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
      </header>


    <section class="main">
        <div class="cont">
            <h2>Find Your Favorite Recipe</h2>
            <div class="search_sec">
                <input type="text" placeholder="Search recipes...">
                <select>
                    <option value="all">Show All Categories</option>
                    <option value="vegetarian">Vegetarian</option>
                    <option value="vegan">Vegan</option>
                    <option value="gluten-free">Gluten-Free</option>
                    <option value="dairy-free">Dairy-Free</option>
                    <option value="meat">Meat</option>
                </select>
                <button>Search</button>
            </div>
            <div class="allrecipe">
                <div class="list_of_recipe">
                    <img src="../IMAGES/recipe1.jpg" alt="Avocado Salad">
                    <h3>Avocado Salad</h3>
                    <p>Light and healthy avocado salad with a refreshing taste.</p>
                </div>
                <div class="list_of_recipe">
                    <img src="../IMAGES/recipe2.jpg" alt="Grilled Chicken">
                    <h3>Grilled Chicken</h3>
                    <p>A home-cooked healthy twist on a classic grilled chicken dish.</p>
                </div>
                <div class="list_of_recipe">
                    <img src="../IMAGES/recipe3.jpg" alt="Chocolate Cake">
                    <h3>Chocolate Cake</h3>
                    <p>A rich and moist chocolate cake, perfect for any occasion.</p>
                </div>
                <div class="list_of_recipe">
                    <img src="../IMAGES/grilled-salmon.jpg" alt="Veggie Pasta">
                    <h3>Veggie Pasta</h3>
                    <p>A vibrant pasta dish with fresh vegetables and savory sauce.</p>
                </div>
                <div class="list_of_recipe">
                    <img src="../IMAGES/Almond-Butter.jpg" alt="Fruit Smoothie">
                    <h3>Fruit Smoothie</h3>
                    <p>A refreshing smoothie made with mixed fruits for a healthy snack.</p>
                </div>
                <div class="list_of_recipe">
                    <img src="../IMAGES/caprese.jpg" alt="Spicy Tofu Stir-fry">
                    <h3>Spicy Tofu Stir-fry</h3>
                    <p>A spicy and flavorful tofu stir-fry with vibrant vegetables.</p>
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
