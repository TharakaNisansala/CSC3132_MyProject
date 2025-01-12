<?php
    //require_once 'connection/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Recipe - Yummy Union</title>
    <link rel="stylesheet" href="../CSS/submit.css">
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
            <h1>Submit Your Recipe</h1>
            <p>Explore and Share Healthy Recipes</p>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="submit"><a href="submit.php">Submit Recipe</a></li>
                    <li><a href="browse.php">Browse Recipes</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="main">
        <div class="cont">
            <h2>Share Your Recipe with the Community</h2>
            <form class="recipe_submision">
                <label for="recipe_name">Please enter the recipe name:</label>
                <input type="text" id="recipe_name" name="recipe_name" required>

                <label for="ingredients">Please enter the ingredients for the recipe:</label>
                <textarea class="not_resize" id="ingredients" name="ingredients" rows="4" required></textarea>

                <label for="instructions">Write down the instructions:</label>
                <textarea class="not_resize" id="instructions" name="instructions" rows="6" required></textarea>

                <label for="category">Please Select Category:</label>
                <select id="category" name="category">
                    <option value="vegetarian">Vegetarian</option>
                    <option value="vegan">Vegan</option>
                    <option value="gluten-free">Gluten-Free</option>
                    <option value="dairy-free">Dairy-Free</option>
                    <option value="meat">Meat</option>
                </select>

                <label for="image-upload">Upload Recipe Image:</label>
                <input type="file" id="image-upload" name="image-upload" accept="image/*">

                <button type="submit">Submit Your Recipe</button>
            </form>
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
