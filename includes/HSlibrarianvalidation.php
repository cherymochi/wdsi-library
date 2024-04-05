<?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $libID = $_POST["libID"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $role = $_POST["role"];

        // Array to store validation errors
        $errors = array();

        // Function to validate Librarian ID
        function validateLibID($libID) {
            if (empty($libID)) {
                return "Library ID is required.";
            } elseif (!preg_match("/^\d{7}$/", $libID)) {
                return "ID must be 7 digits long and contain only numbers";
            }
            return "";
        }

        // Function to validate name
        function validateName($name) {
            if (empty($name)) {
                return "Name is required.";
            }
            return "";
        }

        // Function to validate email address
        function validateEmail($email) {
            if (empty($email)) {
                return "Email is required.";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return "Invalid email format.";
            }
            return "";
        }

        // Function to validate password
        function validatePassword($password) {
            if (empty($password)) {
                return "Password is required.";
            } elseif (strlen($password) < 10 || strlen($password) > 20) {
                return "Password must be between 10 and 20 characters.";
            } elseif (preg_match("/\s/", $password)) {
                return "Password cannot have any spaces.";
            } elseif (!preg_match("/[a-zA-Z]/", $password) || !preg_match("/\d/", $password)) {
                return "Password must contain letter and numbers";
            }
            return "";
        }

        // Validate inputs
        $errors["libID"] = validateLibID($libID);
        $errors["name"] = validateName($name);
        $errors["email"] = validateEmail($email);
        $errors["password"] = validatePassword($password);

        if (empty($roles)) {
            $errors["roles"] = "At least one role must be selected.";
        }


        // If there are no errors, add to database
        if (empty($errors)) {
            try {
                // Get the database connection from another file
                require_once "dbh.inc.php";
    
                $query = "INSERT INTO librarian (libID, Name, Email, Password, Type) VALUES (?, ?, ?, ?, ?);";
    
                $stmt = $pdo ->prepare($query);
    
                $stmt ->execute([$libID,$name,$email, $password, $role]);
    
                // Clear Resources
                $pdo = null;
                $stmt = null;
    
                header("Location: ../pages/HSlibrariandash.php");
    
                die();
    
            } catch (PDOException $e) {
                die("Query Failed: " . $e->getMessage());
            }
    
        } else {
            echo "Error: ";
            header("Location: ../pages/HSlibrariansign.php");
        }

        }



        