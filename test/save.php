<?php
// Connect to test_db
$conn = new mysqli("localhost", "root", "", "testt");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

// Insert query
$sql = "INSERT INTO users (id, name, email, password, role)
        VALUES ('$id', '$name', '$email', '$password', '$role')";

if ($conn->query($sql) === TRUE) {
    header("Location: success.php");
    exit();}
 else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>