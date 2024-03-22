<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWL - Add Book</title>
    <link rel="stylesheet" href="CSS/style.css">

</head>

<body>
    <div class="header" id="head"></div>
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
                <a href = "HSindex.php">❀Back to Index❀</a>
                <br><br>
            </small>
    </div>
</body>
</html>