<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Yummy Union</title>
    <link rel="stylesheet" href="../CSS/contact.css">
</head>
<body>
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="submit.php">Submit Recipe</a></li>
                    <li><a href="browseReceipe.php">Browse Recipes</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li class="contact"><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Section -->
    <section class="main">
        <div class="cont">
            <h2>Get in Touch</h2>
            <p>We'd love to hear from you! Whether you have a question, a suggestion, or just want to say hi, please don't hesitate to reach out.</p>
            <form action="mailto:yummyunion@gmail.com" method="post" enctype="text/plain">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="6" required></textarea>

                <button type="submit">Send</button>
            </form>
        </div>
    </section>

    <address>
        <p>Address: 123 Main St, Anytown, USA 12345</p>
        <p>Phone: 555-555-5555</p>
        <p>Email: <a href="mailto:yummyunion@gmail.com">yummyunion@gmail.com</a></p>
    </address>

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
