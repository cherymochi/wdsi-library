<?php

// Function to validate ISBN
function validateISBN($isbn) {
    // Check if ISBN is not empty and contains only numbers
    if (!empty($isbn) && preg_match("/^[0-9]*$/", $isbn)) {
        return true;
    }
    return false;
}

// Function to validate number
function validateNumber($number) {
    if (!empty($number)) {
        return true;
    }
    return false;
}

// Function to validate subject
function validateSubject($subject) {
    if (!empty($subject)) {
        return true;
    }
    return false;
}

// Function to validate copies
function validateCopies($copies) {
    if (!empty($copies) && is_numeric($copies) && $copies > 0) {
        return true;
    }
    return false;
}

// Validate all variables
function validateData($isbn, $number, $subject, $copies) {
    if (validateISBN($isbn) && validateNumber($number) && validateSubject($subject) && validateCopies($copies)) {
        return true;
    }
    return false;
}

// Usage:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isbn = $_POST["isbn"];
    $number = $_POST["number"];
    $subject = $_POST["subject"];
    $copies = $_POST["copies"];

    // Check if the data is valid
    if (!validateData($isbn, $number, $subject, $copies)) {
        echo "<script>alert('ERROR :  Invalid data entered');</script>";
        
        // Redirect back to HSaddbook2.php
        header("Location: HSaddbook2.php");
    } else {
        try {
            // Get the database connection from another file
            require_once "dbh.inc.php";

            $query = "INSERT INTO librarian (ISBN, CallNo, SubjectArea, Quantity) VALUES (?, ?, ?, ?);";

            $stmt = $pdo ->prepare($query);

            $stmt ->execute([$isbn,$number,$subject, $copies,]);

            // Clear Resources
            $pdo = null;
            $stmt = null;

            // Redirect to HSdisplaybook.php
            header("Location: ../pages/HSdisplaybook.php");

            die();

        } catch (PDOException $e) {
            die("Query Failed: " . $e->getMessage());
        }
    }
}

