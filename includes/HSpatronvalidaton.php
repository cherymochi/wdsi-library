    <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = "";//IRDK what to put here
            $password = "";
            
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            if (empty($username) || empty($password)) {
                echo "<script>alert('ERROR :  Please fill in all fields');</script>";

                header("Location: HSpatronsign.php");
            }
            
            

            // Check if username and password are correct
            if ($_POST["username"] == $username && $_POST["password"] == $password) {
                //Redirect to patron dashboard
                header("Location: HSpatrondash.php");
            } else {
                echo "<script>alert('ERROR :  Invalid Username or Password');</script>";
            }
        }
    ?>
