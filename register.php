<?php
require_once('config.php');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$password_hashed = password_hash("$password", PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, email, password)
VALUES ('$username', '$email', '$password_hashed')";

if ($conn->query($sql) === TRUE) {
    //echo "New records created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: index.php");
exit;
?>