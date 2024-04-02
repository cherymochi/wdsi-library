<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
    <h2>Patron Signin</h2>
    <form action="HSpatronvalidation.php" method="post">
        
        <label for="username">Username :</label>
        <input type="text" id="username" name="username" placeholder="Username" required>

        <br><br>

        <label for="password">Password :</label>
        <input type="password" id="password" name="password" placeholder="Password" required>

        <br><br>
        <button type="submit">Signin</button>
        
    
    </form>
    
</body>
</html>
