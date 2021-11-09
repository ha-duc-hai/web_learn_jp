<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "test_tu_vung_n5");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};
?>