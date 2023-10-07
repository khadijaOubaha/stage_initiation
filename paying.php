<?php
session_start();

$conn = new mysqli("localhost", "root", "", "bd_clients");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$select_query = "SELECT produit, bouteille, contenance FROM commande";
$result = $conn->query($select_query);

$selected_products = array();

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $selected_products[] = "{$row['produit']}|{$row['bouteille']}|{$row['contenance']}";
    }
}

$total_price = 0;

foreach ($selected_products as $product) {
    list($produit, $bouteille, $contenance) = explode("|", $product);
    $get_price_query = "SELECT prix FROM produits WHERE produit = '$produit' AND bouteille = '$bouteille' AND contenance = '$contenance'";
    $price_result = $conn->query($get_price_query);

    if ($price_result->num_rows > 0) {
        $row = $price_result->fetch_assoc();
        $total_price += $row['prix'];
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits Sélectionnés</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Produits Sélectionnés</h1>
    <table>
        <tr>
            <th>Produit</th>
            <th>Bouteille</th>
            <th>Contenance</th>
        </tr>
        <?php
        foreach ($selected_products as $product) {
            list($produit, $bouteille, $contenance) = explode("|", $product);
            echo "<tr>";
            echo "<td>$produit</td>";
            echo "<td>$bouteille</td>";
            echo "<td>$contenance</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <p>Prix total : <?php echo $total_price; ?> EUR</p>
</body>
</html>
