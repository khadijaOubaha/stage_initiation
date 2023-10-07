<?php
session_start();

if (!isset($_SESSION['selected_products'])) {
    $_SESSION['selected_products'] = array();
}

if (isset($_POST['remove_from_cart'])) {
    $index = $_POST['remove_from_cart'];
    if (isset($_SESSION['selected_products'][$index])) {
        unset($_SESSION['selected_products'][$index]);
        $_SESSION['selected_products'] = array_values($_SESSION['selected_products']);
    }
}

if (isset($_POST['add_to_cart'])) {
    $produit = $_POST['add_to_cart'];
    $_SESSION['selected_products'][] = $produit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <!-- Vos balises head ici -->
</head>
<body>
    <header>
        <!-- Votre en-tête ici -->
    </header>

    <main>
        <h2>Panier</h2>
        <?php if (empty($_SESSION['selected_products'])): ?>
            <p>Le panier est vide.</p>
        <?php else: ?>
            <ul>
                <?php foreach ($_SESSION['selected_products'] as $index => $productDetails): ?>
                    <?php
                        $productParts = explode('|', $productDetails);
                        $productName = $productParts[0];
                        $productType = $productParts[1];
                        $productImage = "image/{$productName}-{$productType}.jpg";
                    ?>
                    <li>
                        <img src="<?php echo $productImage; ?>" alt="Image du produit">
                        <p><?php echo $productName . ', ' . $productType; ?></p>
                        <form action="panier.php" method="post">
                            <input type="hidden" name="remove_from_cart" value="<?php echo $index; ?>">
                            <input type="submit" value="Supprimer">
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </main>

    <footer>
        <!-- Votre pied de page ici -->
    </footer>
</body>
</html>
