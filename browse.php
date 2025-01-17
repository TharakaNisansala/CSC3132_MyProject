<?php
    require_once 'connection/connection.php';
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
     <?php require_once 'nav.php'; ?>

    <section class="main">
        <div class="cont">
            <h2>Find Your Favorite Recipe</h2>
            <div class="search_sec">
                <form action="" method="GET">
                    <input type="text" name="search" placeholder="Search recipes...">
                    <select name="category">
                        <option value="all">Show All Categories</option>
                        <option value="vegetarian">Vegetarian</option>
                        <option value="vegan">Vegan</option>
                        <option value="gluten-free">Gluten-Free</option>
                        <option value="dairy-free">Dairy-Free</option>
                        <option value="meat">Meat</option>
                    </select>
                    <button type="submit">Search</button>
                </form>
            </div>
            <div class="allrecipe">
            <?php
                    function getRecipes($connection, $sql) {
                        $result = mysqli_query($connection, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<div class='list_of_recipe'>";
                                // Ensure the image path is correct
                                $imagePath = '../IMAGES/' . htmlspecialchars($row['recepieimg']);
                                echo "<img src='$imagePath' alt='" . htmlspecialchars($row['rname']) . "'>";
                                echo "<h3>" . htmlspecialchars($row['rname']) . "</h3>";
                                echo "<p>" . htmlspecialchars($row['instruction']) . "</p>";
                                echo "</div>";
                            }
                        } else {
                            echo "<p>No recipes found matching your criteria.</p>";
                        }
                    }

                    $search = isset($_GET['search']) ? mysqli_real_escape_string($connection, $_GET['search']) : '';
                    $category = isset($_GET['category']) ? mysqli_real_escape_string($connection, $_GET['category']) : 'all';

                    if ($search || $category !== 'all') {
                        $sql = "SELECT * FROM recepies WHERE 1=1";

                        if (!empty($search)) {
                            $sql .= " AND rname LIKE '%$search%'";
                        }

                        if ($category !== 'all') {
                            $sql .= " AND category = '$category'";
                        }
                    } else {
                        $sql = "SELECT * FROM recepies";
                    }

                    getRecipes($connection, $sql);
                ?>
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
