<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdname = "bd_clients";

// Create connection
$conn = new mysqli($servername, $username, $password, $bdname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `produits` (`produit`, `bouteille`, `contenance`, `prix`) VALUES
('coca-cola', 'verre', '25cl',123),
('coca-cola', 'verre', '33cl',123),
('coca-cola', 'verre', '1l',153),
('coca-cola', 'plastic', '25cl',183),
('coca-cola', 'plastic', '0.5l',123),
('coca-cola', 'plastic', '1l',123),
('coca-cola', 'plastic', '1.5l',123),
('coca-cola', 'plastic', '2l',123),
('coca-cola', 'canette', '25cl',13),
('coca-cola', 'canette', '33cl',23)";

if ($conn->query($sql) === TRUE) {
    echo "Données insérées avec succès.";
} else {
    echo "Erreur lors de l'insertion des données : " . $conn->error;
}

$conn->close();
?>
