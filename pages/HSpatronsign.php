<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWL - Patron Sign Up</title>

    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>

<!-- Navigation Bar -->
<nav>
    <div class="header">
        <a href="HSindex.php" class="logo"> JW Library</a>

        <div class="navbar">
            <a href="HSdisplaybook.php">Books</a>
            <a href="#">About Us</a>
            <a href="HSlogin.php">Login</a>
        </div>
        <div>
            <button class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</nav>
    <nav class="mobile">
        <a href="HSdisplaybook.php">Books</a>
        <a href="#">About Us</a>
        <a href="HSlogin.php">Login</a>
    </nav>

    <!-- Patron Signup Form -->
    <div class="container3">
        <h2 class="form-title">Sign Up</h2>
        <br>
        <hr>
        <br><br>

        <form action="../includes/HSpatronvalidaton.php" autocomplete="off" method="post">

            <div class="form-content">

                <label for="cardID">Library Card</label><br>
                <input class="text-in" type="text" id="cardID" name="cardID" placeholder="Card ID" value="<?php echo isset($cardID) ? $cardID : "" ?>">
                <span class="error">
                    <?php
                        echo isset($errors['cardID'])
                        ? $errors['cardID'] 
                        : "";
                    ?>
                </span>
                
                <br><br>

                <label>Name</label><br>
                <input class="text-in name" type="text" id="name" name="name" placeholder="Full Name" value="<?php echo isset($name) ? $name : "" ?>">
                <span class="error">
                    <?php
                        echo isset($errors['name'])
                        ? $errors['name'] 
                        : "";
                    ?>
                </span>
                
                <br><br>

                <label for="address"> Address</label><br>
                <input class="text-in" type="text"  id="address" name="address" placeholder="Full Address" value="<?php echo isset($address) ? $address : "" ?>">
                <span class="error">
                    <?php
                        echo isset($errors['address'])
                        ? $errors['address'] 
                        : "";
                    ?>
                </span>
                <br><br>
                
            </div>

            <hr>
            <br>
            <center>
                <button type="submit" name="submitted" class="button">SIGNUP</button>
                <br><br>

                <p class="sml-lnk">Already have an account?</p>
                <a class="sml-lnk" href="HSlogin.php">Log in here.</a>
            </center>
        </form>
    </div>

    <!-- Footer -->

    <div class="footer">
        <br>
        <hr> 

            <small>
                Created by Nathalea Evans [2101707] and Kevon Simpson [2000206]. 
                <br>
                © All images are copyrighted by their respective owners
                <br><br>
                John Wolmer Library was created using HTML, CSS, JavaScript, and PHP
                <br><br>
                <a class="adm-lnk" href="">Admin</a>
                <br>
                --ˋˏ ༻❁༺ ˎˊ--
            </small>
    </div>

    <script type="text/javascript" src="../script/script.js"></script>
    
</body>
</html>
