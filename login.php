<?php
    require_once 'connection/connection.php';
?>
<?php
    if(isset($_POST['lgn'])){
        $user = mysqli_real_escape_string($connection,$_POST['user']);
        $pswd = mysqli_real_escape_string($connection,$_POST['pswd']);
        
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Yummy Union</title>
    <link rel="stylesheet" href="css/styles1.css">
</head>
<body>
    <header>
        <div class="cont">
            <h1>Login</h1>
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
            <h2>Login into Your Account</h2>
            <form class="sing_in_form" method="post" action="login.php">
                <label for="username">Username:</label>
                <input type="text" id="username" name="user" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="pswd" required>

                <button type="submit" name="lgn">Login</button>
                <p>Hove no account yet? <a href="register.html">Register Here</a></p>
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
