    <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = "";//I also don't know what to put here
            $password = "";
            
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            if (empty($username) || empty($password)) {
                echo "<script>alert('ERROR :  Please fill in all fields');</script>";

                header("Location: HSlibrariansign.php");
            }
            
            

            // Check if username and password are correct
            if ($_POST["username"] == $username && $_POST["password"] == $password) {
                //Redirect to librarian dashboard
                header("Location: HSlibrariandash.php");
            } else {
                echo "<script>alert('ERROR :  Invalid Username or Password');</script>";
            }
        }
    ?>
