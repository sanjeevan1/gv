<?php
$servername = "localhost";
$username = "username";
$password = "password";
$DBname="xiteb"

// Create connection
$conn = new mysqli($servername, $username, $password,$DBname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>