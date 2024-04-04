<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWL - Librarian Sign In</title>

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

        <form action="../includes/HSlibrarianvalidation.php" autocomplete="off" method="post">

            <div class="form-content">
                <label for="libID">Librarian ID</label><br>
                <input class="text-in" type="text" id="libID" name="libID" placeholder="0000000">
                
                <br><br>

                <label>Name</label><br>
                <input class="text-in" type="text" id="fname" name="firstName" placeholder="Full Name">
                
                <br><br>

                <label for="email"> Email</label><br>
                <input class="text-in" type="email" placeholder="some_email@example.com">
                <br><br>

                <label for="password"> Password</label><br>
                <input class="text-in" type="password" >
                <br><br>

                <label for="role">Role</label>
                <select id="role" name="role">
                    <option value="Librarian">Librarian</option>
                    <option value="Admin">Administrator</option>
                </select>
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
