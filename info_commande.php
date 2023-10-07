<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['email'])) {
    header('Location: S\'inscrire.php');
    exit();
}

// Récupérer les informations de commande du client depuis la session ou la base de données
$nomClient = $_SESSION['nom']; // Assurez-vous que cette information est stockée lors de l'inscription
$prenomClient = $_SESSION['prenom']; // Assurez-vous que cette information est stockée lors de l'inscription
$produitsSelectionnes = $_SESSION['cart']; // Assurez-vous que ces informations sont stockées dans la session lors de la sélection des produits
$adressClient = $_SESSION['adresse'];
// Vous pouvez également stocker la date de la demande dans la base de données lors de la soumission de la commande
$dateDemande = date('Y-m-d'); // Obtenez la date actuelle au format YYYY-MM-DD

?>
<!DOCTYPE html>
<html>
<head>
    <title>Informations de la Commande</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>#cart-btn{
            text-decoration: none;
            color: white;
        }
        .commande-info{
            position: absolute;
            top:40%;
            width: 120%;
            left:5%;
        }
        h2{
            position: absolute;
            top:25%;
            text-align:centre;
left:35%;
        }
            </style>
    <!-- Ajoutez vos styles CSS personnalisés ici -->
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
    <h2>Informations de la Commande</h2>
    <div class="commande-info">
        <table>
            <tr>
                <th>Nom du client</th>
                <td><?php echo $nomClient; ?></td>
            </tr>
            <tr>
                <th>Prénom du client</th>
                <td><?php echo $prenomClient; ?></td>
            </tr>
            <tr>
                <th>Adress du client</th>
                <td><?php echo $adressClient; ?></td>
            </tr>
            <tr>
                <th>Date de la demande</th>
                <td><?php echo $dateDemande; ?></td>
            </tr>
            <tr>
                <th>Produits sélectionnés</th>
                <td>
                    <ul>
                        <?php
                        foreach ($produitsSelectionnes as $produit) {
                            echo '<li>' . $produit['name'] . '</li>';
                        }
                        ?>
                    </ul>
                </td>
            </tr>
        </table>
    </div>

    <!-- Ajoutez d'autres éléments HTML ou styles si nécessaire -->

    
</body>
</html>

