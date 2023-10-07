<?php

session_start();

// Vérifiez si la variable de session existe et contient des produits sélectionnés
if (isset($_SESSION['selected_products']) && is_array($_SESSION['selected_products'])) {
    echo "<html><head><title>Produits sélectionnés</title></head><body>";

    foreach ($_SESSION['selected_products'] as $productDetails) {
        $productParts = explode('|', $productDetails);
        $productName = $productParts[0];
        $productType = $productParts[1];
        $productImage = "image/{$productName}-{$productType}.jpg";

        echo "<img src='$productImage' alt='$productName'>";
    }

    echo "</body></html>";
} else {
    echo "Aucun produit sélectionné.";
}
?>
