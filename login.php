<?php
require_once('config.php');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT password FROM users WHERE username='$username' LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$password_hashed = $row['password'];

if (password_verify($password, $password_hashed)) {
     //echo 'Password is valid!';
     session_start();
     $_SESSION['logged'] = true;

} else {
    echo 'Invalid password.';
}

$conn->close();
header("Location: index.php");
exit;
?>