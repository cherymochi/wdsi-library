<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWL - Login</title>

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

    <div class="container3">
        
            <h2 class="form-title">Login</h2>
            <br>
            <hr>
            <br><br>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <div class="form-content">

                <label for="username">Username :</label>
                <input class="text-in" type="text" id="username" name="username" placeholder="Username" required value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>">

                <br><br>

                <label for="password">Password :</label>
                <input class="text-in" type="password" id="password" name="password" placeholder="Password" required>

                <br><br>
                

                </div>
                <hr>
                <br>

                <center>
                    <button type="submit" class="login_b">Login</button>
                    <br><br>

                    <small>
                        <p class="sml-lnk">Don;t have an account?</p>
                        <a class="sml-lnk" href="HSlibrariansign.php">Create Librarian Account</a>
                        <br>
                        <a class="sml-lnk" href="HSpatronsign.php">Create Patron Account</a>

                    </small>
                </center>

            </form>
    </div>

    <!-- PHP Script -->
    <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"]; 
            $pass = $_POST["password"]; 

            try {
                // Get database connection
                require_once "../includes/dbh.inc.php";

                // Query to fetch data from librarycard
                $query = "SELECT * FROM librarycard WHERE username = :cardID";
                $stmt = $pdo -> prepare($query);
                $stmt -> bindParam(":cardID", $username);
                $stmt -> execute();
                $user = $stmt -> fetch(PDO::FETCH_ASSOC);

                // If user is not found in librarycard, test against librarian
                if (!$user) {
                    $query = "SELECT * FROM librarian WHERE username = libID:";
                    $stmt = $pdo->prepare($query);
                    $stmt -> bindParam("libID", $username);
                    $stmt -> execute();
                    $librarian = $stmt -> fetch(PDO::FETCH_ASSOC);

                    // If no match was found, display error message and return to login page
                    if(!$user && !$librarian){
                        header ("Location: HSlogin.php?error=Invalid%20Username%20or%20Password");
                        exit();
                    } else{
                        // Set session variables for user or librarian
                        if ($librarian) {
                            $_SESSION["type"] = "Librarian";
                            $_SESSION["id"] = $librarian["libID"];
                        } else {
                            $_SESSION["type"] = "User";
                            $_SESSION["id"] = $user["patronID"];
                        }
                    }
                }
            } catch (PDOException $e) {
                die("Query Failed: " . $e->getMessage());
            }

            // Check if username and password are correct
            if ($_POST["username"] == $username && $_POST["password"] == $password) {
                // Redirect to HSaddbook.php
                header("Location: HSaddbook.php");
            } else {
                echo "<script>alert('ERROR :  Invalid Username or Password');</script>";
            }
        }
    ?>

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