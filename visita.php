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

$sql = "SELECT * FROM iscritti;";

$risultati = mysqli_query($conn, $sql);

if ($risultati -> num_rows > 0) {
    echo "La QUERY ha generato: " . $risultati -> num_rows . " righe ";
  while($row = mysqli_fetch_array($risultati)) { //visita
    $nome = $row['nome'];    
    $cognome = $row['cognome'];
    $email = $row['email'];
    echo "<br />Nome: ".$cognome." Cognome: ".$nome." email: ".$email;
  } // visita
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>