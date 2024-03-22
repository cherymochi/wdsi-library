<?php 

// Function to redirect to HSaddbook2.php
function redirectToHSaddbook2() {
    header("Location: HSaddbook2.php");
    exit; // Stop further execution after redirection
}

// Function to save cover file to the uploads folder
function saveCoverToFile($file) {
    $uploadDirectory = "uploads/";

    // Ensure the directory exists, if not create it
    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true); // Recursive directory creation
    }

    $fileName = basename($file["name"]);
    $targetFilePath = $uploadDirectory . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Check if file already exists
    if (file_exists($targetFilePath)) {
        echo "<script>alert('ERROR: File already exists.');</script>";

        // Redirect to HSaddbook.php
        header("Location: HSaddbook.php");
        return false;
    }

    // Check file size
    if ($file["size"] > 2 * 1024 * 1024) { // 2MB
        echo "<script>alert('ERROR: File size exceeds 2MB.');</script>";

        // Redirect to HSaddbook.php
        header("Location: HSaddbook.php");
        return false;
    }

    // Allow certain file formats
    $allowedFileTypes = array("jpg", "png", "jpeg");
    if (!in_array($fileType, $allowedFileTypes)) {
        echo "<script>alert('ERROR: Only JPG, JPEG, PNG files are allowed.');</script>";

        // Redirect to HSaddbook.php
        header("Location: HSaddbook.php");
        return false;
    }

    // Move uploaded file to destination directory
    if (move_uploaded_file($file["tmp_name"], $targetFilePath)) {
        echo "<script>alert('File uploaded successfully.');</script>";
        return $fileName;
    } else {
        echo "<script>alert('ERROR: There was an error uploading your file.');</script>";

        // Redirect to HSaddbook.php
        header("Location: HSaddbook.php");
        return false;
    }
}

// Function to write data to HSbookdata.txt file
function writeDataToFile($bookname, $author, $year, $coverFileName) {
    $dataFilePath = "HSbookdata.txt";

    // Open the file in append mode
    $file = fopen($dataFilePath, "a");

    if ($file) {
        // Format the data as per your requirement
        $data = "$bookname,$author,$year,$coverFileName,";

        // Write data to the file
        fwrite($file, $data);

        // Close the file
        fclose($file);
    } else {
        echo "<script>alert('ERROR: Unable to open data file.');</script>";
    }
}

// Validate the data added into HSaddbook
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $bookname = $_POST["bookname"];
    $author = $_POST["author"];
    $year = $_POST["year"];
    $cover = $_FILES["cover"]; 

    // Check if the fields are empty
    if (empty($bookname) || empty($author) || empty($year) || empty($cover)) {
        echo "<script>alert('ERROR :  Please fill in all fields');</script>";

        // Redirect to HSaddbook.php
        header("Location: HSaddbook.php");
    }
    elseif (!preg_match("/^[a-zA-Z ]*$/", $bookname)) {
        echo "<script>alert('ERROR :  Only letters and white space allowed in Book Name');</script>";

        // Redirect to HSaddbook.php
        header("Location: HSaddbook.php");
    }
    elseif (!preg_match("/^[a-zA-Z ]*$/", $author)) {
        echo "<script>alert('ERROR :  Only letters and white space allowed in Author Name');</script>";

        // Redirect to HSaddbook.php
        header("Location: HSaddbook.php");
    }
    elseif (!preg_match("/^[0-9]*$/", $year)) {
        echo "<script>alert('ERROR :  Only numbers allowed in Year');</script>";

        // Redirect to HSaddbook.php
        header("Location: HSaddbook.php");
    }
    else {
        // Save cover file to uploads folder
        $savedFileName = saveCoverToFile($cover);
        
        if ($savedFileName) {
            // Write data to HSbookdata.txt file
            writeDataToFile($bookname, $author, $year, $savedFileName);
            
            // Redirect to HSaddbook2.php after successful validation, file upload, and data write
            redirectToHSaddbook2();
        }
    }
}