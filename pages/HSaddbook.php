<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWL - Add Book</title>

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

    <div class="container">
        <div class=" form content">
            <h2>Add Book</h2>
            <form action="HSaddbook_validate.php" method="post" enctype="multipart/form-data">
                <label for="bookname">Book Name :</label>
                <input type="text" id="bookname" name="bookname" placeholder="Book Name" required value="<?php if(isset($_POST['bookname'])) echo htmlspecialchars($_POST['bookname']); ?>">
                <br><br>
                <label for="author">Author :</label>
                <input type="text" id="author" name="author" placeholder="Author" required value="<?php if(isset($_POST['author'])) echo htmlspecialchars($_POST['author']); ?>">
                <br><br>

                <label for="year">Year Published :</label>
                <input type="text" id="year" name="year" placeholder="Year" required value="<?php if(isset($_POST['year'])) echo htmlspecialchars($_POST['year']); ?>">
                <br><br>
                <label for="cover">Book Cover :</label>
                <input type="file" id="cover" name="cover"  required >
                <br><br>
                <button type="submit" class="next">Next</button>
            </form>
        </div>
        
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