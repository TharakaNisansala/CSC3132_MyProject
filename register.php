<?php
    require_once 'connection/connection.php';
?>
<?php
    if(isset($_POST['sgn'])){
        if($_POST['pswd'] == $_POST['cpswd']){
            $mail = mysqli_real_escape_string($connection,$_POST['mail']);
            $user = mysqli_real_escape_string($connection,$_POST['user']);

            $sql = "INSERT INTO users () VALUES()";
            $result = mysqli_query();

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
    <title>Join Us | Yummy Union</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div class="reg"></div>
    <div class="cont">
        <h1>Register Yummy Union</h1>
        <p>Signup with and share your recipes among other members!</p>
        <form action="register.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="user" placeholder="Enter your username" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="mail" placeholder="Enter your email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="pswd" placeholder="Create a password" required>
            
            <label for="password">Confierm Password</label>
            <input type="password" id="password" name="cpswd" placeholder="Confierm a password" required>
            
            <!--
            <label for="profile-picture">Profile Picture</label>
            <input type="file" id="profile-picture" name="profile-picture" accept="image/*">
            -->
            
            
            <button type="submit" class="button" name="sgn">Sign Up</button> <br>
            <p>Already have you an account? <a href="login.html">Log in here</a></p>
        </form>
    </div>
</body>
</html>
