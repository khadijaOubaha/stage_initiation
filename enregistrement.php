<?php
$conn = mysqli_connect("localhost", "root", "", "bd_clients");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['produits']) && is_array($_POST['produits'])) {
    $selected_products = $_POST['produits'];

    foreach ($selected_products as $product) {
        list($produit, $bouteille, $contenance) = explode("|", $product);

        // Insert the product into the commande table
        $insert_query = "INSERT INTO commande (produit, bouteille, contenance) VALUES ('$produit', '$bouteille', '$contenance')";
        $result = mysqli_query($conn, $insert_query);

        if (!$result) {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
