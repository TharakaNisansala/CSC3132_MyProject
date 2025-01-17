<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Yummy Union</title>
    <link rel="stylesheet" href="../CSS/about.css">
</head>

<body>
    <!-- Header Section -->
    <header>
        <div class="slideshow">
            <div class="slide fade">
                <img src="../IMAGES/almon.jpg" alt="Almonds" class="fade">
            </div>
            <div class="slide fade">
                <img src="../IMAGES/Almond-Butter.jpg" alt="Almond Butter" class="fade">
            </div>
            <div class="slide fade">
                <img src="../IMAGES/apple.jpg" alt="Apple" class="fade">
            </div>
        </div>
        <div class="overlay">
            <img src="../IMAGES/logo.webp" alt="Yummy Union Logo" class="logo">
            <h1>About Us</h1>
            <p>Explore and Share Healthy Recipes</p>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="submit.php">Submit Recipe</a></li>
                    <li><a href="browse.php">Browse Recipes</a></li>
                    <li class="about_us"><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Section -->
    <section class="main">
        <div class="cont">
            <h2>Welcome to Yummy Union</h2>
            <p>
                Yummy Union is a platform that allows users to share and discover healthy recipes. Our mission is to inspire
                creativity and healthy living among our community. We believe that food has the power to bring people together,
                and our platform is designed to facilitate this. Whether you’re an expert chef or just starting your culinary
                journey, our community is here to support and inspire you to create healthy and delicious meals.
            </p>

            <h3>Our Story</h3>
            <p>
                Yummy Union was born out of a passion for healthy eating and the joy that comes from cooking with fresh, natural ingredients. 
                What started as a small group of like-minded individuals sharing recipes has grown into a large and diverse community. 
                Today, we are proud to provide a platform that connects food lovers from all walks of life, sharing recipes, tips, and inspiration 
                to promote healthier living.
            </p>

            <h3>Our Mission</h3>
            <p>
                Our mission is to create a space where everyone can share their healthy recipes, explore new dishes, and connect with others who share their passion for good food. 
                We believe that healthy eating should be accessible, fun, and delicious, and we aim to provide tools and resources to make this a reality for our users.
            </p>

            <h3>Our Values</h3>
            <ul>
                <li><strong>Community:</strong> We believe in the power of connection and support within our food-loving community.</li>
                <li><strong>Health:</strong> We are committed to promoting healthy eating habits that improve the well-being of our users.</li>
                <li><strong>Creativity:</strong> We encourage creativity in the kitchen and believe that every meal can be a masterpiece.</li>
                <li><strong>Sustainability:</strong> We are passionate about using ingredients that are sustainable, fresh, and locally sourced whenever possible.</li>
            </ul>

            <h3>Meet the Team</h3>
            <p>
                Our team is made up of food enthusiasts, chefs, nutritionists, and tech experts who are all passionate about making healthy living easier and more accessible.
            </p>
            <div class="team">
                <div class="team-member">
                    <img src="../IMAGES/almon.jpg" alt="Team Member 1">
                    <h4>John Doe</h4>
                    <p>Co-Founder & CEO</p>
                </div>
                <div class="team-member">
                    <img src="../IMAGES/recipe1.jpg" alt="Team Member 2">
                    <h4>Jane Smith</h4>
                    <p>Head Chef & Recipe Curator</p>
                </div>
                <div class="team-member">
                    <img src="../IMAGES/recipe2.jpg" alt="Team Member 3">
                    <h4>Emily White</h4>
                    <p>Community Manager</p>
                </div>
            </div>

            <h3>User Testimonials</h3>
            <div class="testimonials">
                <blockquote>
                    "Yummy Union has completely transformed the way I cook. I’ve discovered so many new healthy recipes that my family loves!" – <strong>Alice B.</strong>
                </blockquote>
                <blockquote>
                    "The community here is amazing! I’ve learned so much about healthy eating and met so many inspiring people." – <strong>Michael T.</strong>
                </blockquote>
                <blockquote>
                    "I love how easy it is to find new recipes and share my own. Yummy Union has made cooking fun and healthy!" – <strong>Sarah J.</strong>
                </blockquote>
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
            let i;
            let slides = document.getElementsByClassName("slide");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000); // Change slide every 3 seconds
        }
    </script>
</body>

</html>
