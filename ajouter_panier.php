<?php
session_start();
include 'table_produit.php';

if (isset($_POST['product_name']) && isset($_POST['product_image'])) {
    $productName = $_POST['product_name'];
    $productImage = $_POST['product_image'];

    // Ajouter le produit au panier dans la session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $_SESSION['cart'][] = array(
        'name' => $productName,
        'image' => $productImage
    );

    // Rediriger vers la page actuelle pour afficher les produits ajoutés
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

// Code pour la suppression d'un produit du panier
if (isset($_GET['remove'])) {
    $removeIndex = $_GET['remove'];
    if (isset($_SESSION['cart'][$removeIndex])) {
        unset($_SESSION['cart'][$removeIndex]);
        // Réindexer le tableau pour éviter les clés manquantes
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="t.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
 
        #header {
    position: sticky;
    top: 0; 
    z-index: 100; 
    background-color: white; 
}
#cart-btn{
            text-decoration: none;
            color: white;
        }

        .cart {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            position: absolute;
            top:40%;
            margin-bottom: 20px;
        }

.total-price {
    text-align: center; 
    margin-top:45%;
 }

        .cart-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px;
        }

        .cart-item img {
            width: 100px;
            height: 80%;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .cart-item p {
            margin-top: 5px;
            text-align: center;
        }

        .remove-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        h2{
            position: absolute;
            text-align: center;
            left: 35%;
            top:20%;
        }
        #foot{
        position: absolute;
        width: 24%;
        left:20%;
        bottom: -250%;
        height: 60%;
        right: 0%;
        top: 250%;
    }
    </style>
</head>


<body>
    <header id="header" style="background-color: rgb(241, 50, 50); z-index: 999;position:fixed;width: 100%;">
        <a href="#" class="logo">
            <img src="image/img.png" alt=""style="height: 100px; width: 140px;" >
        </a>
        <nav class="navbar" >
            <a href="index.html"id="nav-accueil">Accueil</a>
            <a href="propos.html" id="nav-apropos">Apropos</a>
            <a href="temoingnage.html"id="nav-temoignage">Temoingnage</a>
            <!-- <a href="service.html" id="nav-service">Service</a> -->
            <a href="contact.html" id="nav-contact">Contact</a>
        </nav>
       
       
        <div class="icons">
            <input type="search" id="search-box" placeholder="chercher...">
            <label for="search-box" class="fas fa-search"></label>
            <a href="ajouter_panier.php"><div class="fas fa-shopping-cart" id="cart-btn"></div></a>
            <div class="fas fa-bars" id="menu-btn"></div>
            
        </div>
        <!-- <a href="#" class="btn">checkoot now</a> -->
</header>
    <h2>Produits ajoutés au panier :</h2>
    <div class="cart" ">
        <?php
        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
            foreach ($_SESSION['cart'] as $index => $product) {
                echo '<div class="cart-item">';
                echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                echo '<p>' . $product['name'] . '</p>';
                
    
                if (isset($prices[$product['name']])) {
                    echo '<p>Prix : ' . $prices[$product['name']] . ' DH</p>';
                }
                
                echo '<button class="remove-btn" onclick="removeProduct(' . $index . ')">Supprimer</button>';
                echo '</div>';
            }
        } else {
            echo '<p>Le panier est vide.</p>';
        }
        ?>
    </div>

   
    <div class="total-price">
    <?php
    $totalPrice = 0;

    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        foreach ($_SESSION['cart'] as $index => $product) {
            if (isset($prices[$product['name']])) {
                $totalPrice += $prices[$product['name']];
            }
        }
        echo '<p>Prix total : ' . $totalPrice . ' DH</p>';
    } else {
        echo '<p>Prix total : 0 DH</p>';
    }
    ?>
</div>
    
<script>
          function removeProduct(index) {
            if (confirm('Voulez-vous supprimer ce produit du panier ?')) {
                window.location.href = '<?php echo $_SERVER['PHP_SELF']; ?>?remove=' + index;
            }
        }
    </script>

</body>

</html>
