<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdname = "bd_clients";

$conn = new mysqli($servername, $username, $password, $bdname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['produits']) && is_array($_POST['produits'])) {
    $selectedProducts = $_POST['produits'];
    
    $totalPrice = 0;

    foreach($selectedProducts as $selectedProduct) {
        list($produit, $bouteille, $contenance) = explode('|', $selectedProduct);

        $sql = "SELECT prix FROM produits WHERE produit = '$produit' AND bouteille = '$bouteille' AND contenance = '$contenance'";
        $result = $conn->query($sql);

        if($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $totalPrice += $row['prix'];
        }
    }

    echo "Prix total des produits sélectionnés : $totalPrice";
} else {
    echo "Aucun produit sélectionné.";
}

$conn->close();
?>
