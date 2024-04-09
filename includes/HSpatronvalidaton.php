<?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cardID = $_POST["cardID"];
        $name = $_POST["name"];
        $address = $_POST["address"];

        // Array to store validation errors
        $errors = array();


        // Validations
        if (empty($cardID)) {
            $errors[] = "Card ID is required.";
        } elseif (!preg_match("/^\d{7}$/", $cardID)) {
            $errors[] = "ID must be 7 digits long and contain only numbers";
        }
        
        if (empty($name)) {
            $errors[] = "Name is required.";
        }

        if (empty($address)) {
            $errors[] = "Address is required.";
        }

        // If there are no errors, add to database
        if (empty($errors)) {
            try {
                // Get the database connection from another file
                require_once "dbh.inc.php";
    
                $query = "INSERT INTO librarycard (cardID, Name, Address) VALUES (?, ?, ?);";
    
                $stmt = $pdo ->prepare($query);
    
                $stmt ->execute([$cardID,$name,$address]);
    
                // Clear Resources
                $pdo = null;
                $stmt = null;
    
                header("Location: ../pages/HSdisplaybook.php");
    
                die();
    
            } catch (PDOException $e) {
                die("Query Failed: " . $e->getMessage());
            }
    
        } else {
            echo "Error: ";
            header("Location: ../pages/HSpatronsign.php");
        }

        }



        