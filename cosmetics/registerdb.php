<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = "";     // Default XAMPP password is empty
$dbname = "register_db";

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$firstName = $_POST['fName'];
$lastName = $_POST['lName'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$total = $_POST['total'];

// Prepare SQL query to insert new user into CustomerInfo table
$SQL = "INSERT INTO CustomerInfo (first_name, last_name, shipping_address, phone_no, email, price) VALUES ('$firstName', '$lastName', '$address', '$phone', '$email', '$total')";

if (!mysqli_query($conn, $SQL))
{
die('Error: ' . mysqli_error($conn));
}

mysqli_close($conn);
?>