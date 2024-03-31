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
            <form action="HSaddbook_validate2.php" method="post">
                <label for="isbn">ISBN :</label>
                <input type="text" id="isbn" name="isbn" placeholder="ISBN" required value="<?php if(isset($_POST['isbn'])) echo htmlspecialchars($_POST['isbn']); ?>">
                <br><br>

                <label for="isbn">Call Number :</label>
                <input type="text" id="number" name="number" placeholder="Call Number" required value="<?php if(isset($_POST['isbn'])) echo htmlspecialchars($_POST['number']); ?>">
                <br><br>

                <label for="isbn">Subject Area :</label>
                <input type="text" id="subject" name="subject" placeholder="Subject Area" required value="<?php if(isset($_POST['subject'])) echo htmlspecialchars($_POST['isbn']); ?>">
                <br><br>

                <label for="isbn">Number of Copies :</label>
                <input type="number" id="copies" name="copies" required value="<?php if(isset($_POST['isbn'])) echo htmlspecialchars($_POST['copies']); ?>">
                <br><br>

                
                <button type="submit" class="add_b">Add Book</button>
            </form>
            <a href="HSaddbook.php"><button class="back">Back</button></a>
        </div>
        
    </div>

    <!-- PHP Script -->
    <?php
        // Add login functionality


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
                <a href = "HSindex.php">❀Back to Index❀</a>
                <br><br>
            </small>
    </div>
</body>
</html>