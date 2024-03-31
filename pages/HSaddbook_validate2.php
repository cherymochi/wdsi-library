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
        // Redirect to HSaddbook2.php
        header("Location: HSdisplaybook.php");

        // Write form data into HSbookdata.txt file
        $file = fopen("HSbookdata.txt", "a");

        // Add a new line of data to the file
        $data = "$isbn,$number,$subject,$copies\n";
        fwrite($file, $data);

        // Close the file
        fclose($file);

        exit; // Exit after redirection to prevent further execution
    }
}

