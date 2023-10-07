<?php
 session_start();
 
 if(isset($_POST['produits']) && is_array($_POST['produits'])) {
     $_SESSION['selected_products'] = $_POST['produits'];
 }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commander : </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .des{
           
            left: 4%;
            position: relative;
        }
        body{
            background-color: antiquewhite;
        }
    #page-header{
        background-color: rgb(202, 91, 54);
        height: 30% ;
        padding: 12px;
    }
#page-header h2,h1,
#page-header p{
    color: antiquewhite;
    text-align: center;
}
.pro {
   cursor: pointer;
   height: 480px;
   width: 300px;
   left: 25%;
   top: 60%;
   border-radius: 20px;
   position: absolute;
   background-color:white; /* Arrière-plan noir semi-transparent */
   box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombre autour de l'élément */
    /* ... Votre autre style ... */
}
.c{
    position: relative;
    left: 20%;
    top: 3%;
    border-radius: 20px;
}
.proo {
    cursor: pointer;
   height: 480px;
   width: 300px;
   left: 60%;
   top: 60%;
   position: absolute;
   background-color:white;/* Arrière-plan noir semi-transparent */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombre autour de l'élément */
    border-radius: 20px;/* ... Votre autre style ... */
}
.f{
    position: relative;
    left: 19%;
    top: 3%;
    
    border-radius: 20px;
}
.s{
    /* position: relative; */
    left: 50%;
    top: 3%;  

    border-radius: 20px;
    position: relative;
}

#product1 .pro .cart{
    width: 50px;
    height: 45px;
    line-height: 40px;
    border-radius: 50px;
    background-color: white;
    color: #810808;
 
    position: absolute;
    bottom: 10px;
    
    right: 9px;
    left: 80%;
}
#product1 .proo .cart{
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50px;
    color: #810808;
  
   background-color: white;
    position: absolute;
    bottom: 10px;
    
    right: 9px;
    left: 80%;
}
#product1 .prooo .cart{
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50px;
    background-color: white;
    color: #810808;
  
    position: absolute;
    bottom: 10px;
    
    right: 9px;
    left: 80%;
}
.des i{
    font-size: 12px;
    color: rgb(210, 182, 22);
}
#lien{
    text-decoration: none;
    
}
.des span{
    font-size:larger;
}
.condition{
    background-color: white;
    color: #810808;
    top: 40%;
    position: relative;
    height: 17%;
    width: 20%;
}
    </style>
</head>
<body>

    <header class="header">
        <a href="#" class="logo">
            <img src="image/img.png" alt=""style="height: 100px; width: 140px;" >
        </a>
        <nav class="navbar">
            <a href="index.html">Accueil</a>
            <a href="#apropos">Apropos</a>
            <a href="#temoingnage">Temoingnage</a>
            <a href="#service">Service</a>
            <a href="#contact">Contact</a>
        </nav>
       
       
        <div class="icons">
            <input type="search" id="search-box" placeholder="chercher...">
            <label for="search-box" class="fas fa-search"></label>
            <a href="ajouter_panier.php"><div class="fas fa-shopping-cart" id="cart-btn"></div></a>
            <div class="fas fa-bars" id="menu-btn"></div>
            
        </div>
        <!-- <a href="#" class="btn">checkoot now</a> -->
</header>
<main id="page-header">

    <h2>Les Contenances </h2>
    <p> Vous pouvez maintenant sélectionner le produit que vous souhaitez  </p>
</main>
<div class="condition">
   <p>Les boissons sont vendues dans une boite contenant 24 pièces!!</p> 
</div>

<article id="product1" class="section-p1">
    <div class="pro-countainer" >

        <div class="product" >
        <form action="ajouter_panier.php" method="post">
    <div class="pro" >
            <img src="fanta-canette-25cl.jpeg" height="300px"alt="fanta-Canette-25cl" class="c" style="left:0px">
            <input type="hidden" name="product_name" value="fanta-canette-25cl">
        <input type="hidden" name="product_image" value="fanta-canette-25cl.jpeg">
                <div class="des">
                    <br>
                        <span style="color: red;">Contenance:</span>
                        <h4>25cl</h4>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
</div>
                        <input type="hidden" name="add_to_cart" value="fanta|canette|25cl" >Fanta canette 25cl
                        <br>
                        <button type="submit"  style=" position:absolute;left:26%;top:105%;">Ajouter au panier</button>
                        <!-- <a href="paying.php?product=coca"><i class="fa fa-shopping-cart cart"></i></a> -->
                        </form>

                </div> 
                        </div> </div>
        
        <div class="product">
        <form action="ajouter_panier.php" method="post">
        <div class="proo">
            <img src="fanta-canette-33cl.jpeg" height="300px"alt="fanta-canette-33cl" class="f" style="left:0px">
            <input type="hidden" name="product_name" value="fanta-canette-33cl">
        <input type="hidden" name="product_image" value="fanta-canette-33cl.jpeg" >
                <div class="des">
                    <br>
                        <span style="color: red;"> Contenance:</span>
                        <h4>33cl</h4>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <input type="hidden" name="add_to_cart" value="fanta|canette|33cl" >Fanta canette 33cl
                        <br>
                        <button type="submit"  style=" position:absolute;left:27%;top:105%;">Ajouter au panier</button>
                      
                </div> 
               </form>
            </div>
           
        </div>

    </form>
    <!-- <article class="choix">
        <h2 class="titre"> </h2>
    <form action="commande.php" method="post">
   <a href="coca.html"><img src="coca0.jpg" class="c"></a>
     </form>

<form action="commande.php" method="post">
   <a href="fanta.html"> <img src="fanta0.jpg" class="f"></a>

</form>

<form action="commande.php" method="post">
    <a href="sprite.html"><img src="sprite0.jpg" class="s"></a>

</form>
</article> -->
   
     <!-- <input type="submit" value="Ajouter au panier"></a> -->
    
</body>
</html>

