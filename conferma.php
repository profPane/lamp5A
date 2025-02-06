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

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];

$sql = "INSERT INTO iscritti (nome, cognome, email)
VALUES ('$nome', '$cognome', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>