<?php
$servername = "127.0.0.1";
$username = "admin_club";
$password = "12345678";
$dbname = "club";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}