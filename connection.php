<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="Employee leaving management system";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
