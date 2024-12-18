<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Recipe - Yummy Union</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <header>
        <div class="cont">
            <h1>Submit a Recipe</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="submit.html">Submit Recipe</a></li>
                    <li><a href="browse.html">Browse Recipes</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
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
                <input type="file" id="image-upload" name="image-upload">

                <button type="submit">Submit Your Recipe</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="cont">
            <p>&copy; 2024 Yummy Union. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
