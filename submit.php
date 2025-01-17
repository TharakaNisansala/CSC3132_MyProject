<?php
    require_once 'connection/connection.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $rname = mysqli_real_escape_string($connection, $_POST['rname']);
        $ing = mysqli_real_escape_string($connection, $_POST['ingredients']);
        $category = mysqli_real_escape_string($connection, $_POST['category']);
        $instruction = mysqli_real_escape_string($connection, $_POST['instructions']);

        if (isset($_FILES['image-upload']) && $_FILES['image-upload']['error'] === 0) {
            $imageName = uniqid('recipe_', true) . '.' . pathinfo($_FILES['image-upload']['name'], PATHINFO_EXTENSION); // Generate a unique image name
            $imagePath = "../IMAGES/" . $imageName;

            // Ensure the directory exists
            if (!is_dir('../IMAGES')) {
                mkdir('../IMAGES', 0755, true);  // Create the directory if it doesn't exist
            }

            if (move_uploaded_file($_FILES['image-upload']['tmp_name'], $imagePath)) {
                $sql = "INSERT INTO recepies (rname, ingredients, instruction, category, recepieimg) 
                        VALUES ('$rname', '$ing', '$instruction', '$category', '$imageName')";

                if (mysqli_query($connection, $sql)) {
                    echo "<p>Recipe added successfully!</p>";
                } else {
                    echo "<p>Error: " . mysqli_error($connection) . "</p>";
                }
            } else {
                echo "<p>Failed to upload image. Please try again.</p>";
            }
        } else {
            echo "<p>Please upload a valid image.</p>";
        }
    }
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
    <?php require_once 'nav.php'; ?>

    <section class="main">
        <div class="cont">
            <h2>Share Your Recipe with the Community</h2>
            <form class="recipe_submision" action="submit.php" method="post" enctype="multipart/form-data">
                <label for="recipe_name">Please enter the recipe name:</label>
                <input type="text" id="recipe_name" name="rname" required>

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
