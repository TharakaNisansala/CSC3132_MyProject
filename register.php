<?php
    require_once 'connection/connection.php';
?>
<?php
    if(isset($_POST['sgn'])){
        if($_POST['pswd'] == $_POST['cpswd']){
            $mail = mysqli_real_escape_string($connection,$_POST['mail']);
            $user = mysqli_real_escape_string($connection,$_POST['user']);

            $sql = "INSERT INTO users (uname,mail,pswd) VALUES('{$user}','{$mail}','{$_POST['pswd']}')";
            $result = mysqli_query($connection,$sql);

            if(isset($result)){
                header("Location: login.php");
            }
        }
    }
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
    <link rel="stylesheet" href="../CSS/register.css">
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
            <p>Explore and Share Healthy Recipes</p>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="submit.html">Submit Recipe</a></li>
                    <li><a href="browseReceipe.html">Browse Recipes</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="main">
        <div class="cont">
            <h2>Create Your Account</h2>
            <form class="register_form">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <button type="submit">Register</button>
                <p>Already have an account? <a href="login.html">Login Here</a></p>
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


