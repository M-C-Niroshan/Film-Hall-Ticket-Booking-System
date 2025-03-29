<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Prepare the SQL statement to insert the data into the database
    $sql = "INSERT INTO ideas (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
        header("Location: ThankYou.php");
        exit();
    } else {
        // Error occurred while inserting data
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close the database connection
    $conn->close();
}
?>