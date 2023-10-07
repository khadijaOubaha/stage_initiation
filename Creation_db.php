<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_clients";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE Clients (
    Nom VARCHAR(30) NOT NULL,
    Prenom VARCHAR(30) NOT NULL,
    Adresse VARCHAR(50) NOT NULL,
    Tel INT NOT NULL,
    Email VARCHAR(50),
    passwd VARCHAR(20)
  )";

if (mysqli_query($conn, $sql)) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>