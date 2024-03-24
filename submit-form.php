<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Form_check";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $comment-type = $_POST["comment-type"];
    $message = $_POST["message"];
    
    // SQL to insert form data into a table
    $sql = "INSERT INTO form_data (name, email, address, comment_type, message) VALUES ('$name', '$email', '$address', '$commentType', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Thank you! Your message has been stored in the database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close connection
    $conn->close();
} else {
    // If form is not submitted, redirect back to the form page
    header("Location: index.html");
}
?>
