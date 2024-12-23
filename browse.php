<?php
    //require_once 'connection/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Recipes - Yummy Union</title>
    <link rel="stylesheet" href="css/styles1.css">
</head>
<body>
    <header>
        <div class="cont">
            <h1>Browse Recipes</h1>
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
            <h2>Search up the Recipe</h2>
            <div class="search_sec">
                <input type="text" placeholder="Search recipes...">
                <select>
                    <option value="all">Show All Categories</option>
                    <option value="vegetarian">Vegetarian</option>
                    <option value="vegan">Vegan</option>
                    <option value="gluten-free">Add gluten-free option</option>
                    <option value="dairy-free">Free of Dairy</option>
                    <option value="meat">Meat</option>
                </select>
                <button>Search</button>
            </div>
            <div class="allrecipe">
                <div class="list_of_recipe">
                    <img src="images/recipe1.jpg" alt="Avocado Salad">
                    <h3>Avocado Salad</h3>
                    <p>Light meal avocado salad fresh and healthy.</p>
                </div>
                <div class="list_of_recipe">
                    <img src="images/recipe2.jpg" alt="Grilled Chicken">
                    <h3>Grilled Chicken</h3>
                    <p>A healthy home-cooked way to enjoy Dairy Queen 
                        at its finest with a simple ground beef meal.</p>
                </div>
                <div class="list_of_recipe">
                    <img src="images/recipe3.jpg" alt="Avocado Salad">
                    <h3>Vegetarian Pasta</h3>
                    <p>Pasta mixed with mixed veggies and is delicious veg, particularly.</p>
                </div>
                <div class="list_of_recipe">
                    <img src="images/apple.jpg" alt="Avocado Salad">
                    <h3>Apple Pie</h3>
                    <p> </p>
                </div>
                <div class="list_of_recipe">
                    <img src="bkry/baguettes.jpg" alt="Avocado Salad">
                    <h3>Avocado Salad</h3>
                    <p> </p>
                </div>
                <div class="list_of_recipe">
                    <img src="bkry/banana.jpg" alt="Avocado Salad">
                    <h3>Banana Bread</h3>
                    <p> </p>
                </div>
                <div class="list_of_recipe">
                    <img src="bkry/blue.jpg" alt="Avocado Salad">
                    <h3>Blueberry Muffins</h3>
                    <p> </p>
                </div>
                <div class="list_of_recipe">
                    <img src="bkry/brownies.jpg" alt="Avocado Salad">
                    <h3>Brownies</h3>
                    <p> </p>
                </div>
                <div class="list_of_recipe">
                    <img src="bkry/chocolate.jpg" alt="Avocado Salad">
                    <h3>Chocolate Chip Cookies</h3>
                    <p> </p>
                </div>
                <div class="list_of_recipe">
                    <img src="bkry/cinnamon.jpg" alt="Avocado Salad">
                    <h3>Cinnamon Rolls</h3>
                    <p> </p>
                </div>
                <div class="list_of_recipe">
                    <img src="bkry/croissants.jpg" alt="Avocado Salad">
                    <h3>Croissants</h3>
                    <p> </p>
                </div>
                <div class="list_of_recipe">
                    <img src="bkry/danish.jpg" alt="Avocado Salad">
                    <h3>Danish Pastries</h3>
                    <p> </p>
                </div>
                <div class="list_of_recipe">
                    <img src="bkry/eclair.jpg" alt="Avocado Salad">
                    <h3>Eclairs</h3>
                    <p> </p>
                </div>
                <div class="list_of_recipe">
                    <img src="bkry/Madeleines.jpg" alt="Avocado Salad">
                    <h3>Madeleines</h3>
                    <p> </p>
                </div>
                <div class="list_of_recipe">
                    <img src="bkry/scone.jpg" alt="Avocado Salad">
                    <h3>Scones</h3>
                    <p> </p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="cont">
            <p>&copy; 2024 Yummy Union. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
