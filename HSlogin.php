<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWL - Login</title>
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
    <div class="header" id="head"></div>
    <div class="container">
        
        <div class="login">
            <h2>Login</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <label for="username">Username :</label>
                <input type="text" id="username" name="username" placeholder="Username" required value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>">

                <br><br>

                <label for="password">Password :</label>
                <input type="password" id="password" name="password" placeholder="Password" required>

                <br><br>
                <button type="submit" class="login_b">Login</button>
            </form>
        </div>
    </div>

    <!-- PHP Script -->
    <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = "HSadmin";
            $password = "HSpages123";

            // Check if username and password are correct
            if ($_POST["username"] == $username && $_POST["password"] == $password) {
                // Redirect to HSaddbook.php
                header("Location: HSaddbook.php");
            } else {
                echo "<script>alert('ERROR :  Invalid Username or Password');</script>";
            }
        }
    ?>

    <div class="footer">
        <br>
        <hr/> 

            <small>
                Created by Nathalea Evans - 2101707. 
                <br>
                © All images are copyrighted by their respective owners
                <br><br>
                John Wolmer Library was created using HTML and PHP
                <br><br>
                --ˋˏ ༻❁༺ ˎˊ--
                <br><br>
            </small>
    </div>
</body>
</html>