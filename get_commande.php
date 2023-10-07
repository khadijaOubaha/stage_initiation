<?php



























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
        width: 100%;
        position:absolute;
        padding: 12px;
        top: 15%;
    }
    #cart-btn{
            text-decoration: none;
            color: red;
        }
#page-header h2,h1,
#page-header p{
    color: antiquewhite;
    text-align: center;
}
.coca {
   cursor: pointer;
   height: 480px;
   width: 300px;
   left: 4px;
   top: 60%;
   border-radius: 20px;
   position: absolute;
   background-color:white; /* Arrière-plan noir semi-transparent */
   box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombre autour de l'élément */
    /* ... Votre autre style ... */
}
.c{
    position: relative;
    left: 15%;
    top: 3%;
    border-radius: 20px;
}
.fanta {
    cursor: pointer;
   height:480px;
   width: 300px;
   left: 25%;
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
.sprite{
    cursor: pointer;
    border-radius: 20px;
    height:480px;
   width: 300px;
   left: 50%;
   top: 60%;
   position: absolute;
   background-color:white; /* Arrière-plan noir semi-transparent */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombre autour de l'élément */
    /* ... Votre autre style ... */
}
.schweppes{
    cursor: pointer;
    border-radius: 20px;
    height: 480px;
   width: 340px;
   left: 6%;
   top: 135%;
   position: absolute;
   background-color:white; /* Arrière-plan noir semi-transparent */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombre autour de l'élément */
    /* ... Votre autre style ... */
}
.w{
    /* position: relative; */
    left: 6%;
    top: 3%;  

    border-radius: 20px;
    position: relative;
}
.hawai{
    cursor: pointer;
    border-radius: 20px;
    height: 480px;
   width: 300px;
   left: 75%;
   top: 60%;
   position: absolute;
   background-color:white; /* Arrière-plan noir semi-transparent */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombre autour de l'élément */
    /* ... Votre autre style ... */
}
.p{
    /* position: relative; */
    left: 80px;
    top: 3%;  

    border-radius: 20px;
    position: relative;
}
.poms{
    cursor: pointer;
    border-radius: 20px;
    height: 480px;
    width: 340px;
   left: 35%;
   top: 135%;
   position: absolute;
   background-color:white; /* Arrière-plan noir semi-transparent */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombre autour de l'élément */
    /* ... Votre autre style ... */
}
.t{
    /* position: relative; */
    left: 30px;
    top: 3%;  

    border-radius: 20px;
    position: relative;
}
.tops{
    cursor: pointer;
    border-radius: 20px;
    height: 480px;
    width: 340px;
    left: 65%;
    top: 135%;
    position: absolute;
    background-color:white; /* Arrière-plan noir semi-transparent */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombre autour de l'élément */
    /* ... Votre autre style ... */
}
.h{
    /* position: relative; */
    left: 20.5%;
    top: 3%;  

    border-radius: 20px;
    position: relative;
}
.des i{
    font-size: 12px;
    color: rgb(210, 182, 22);
}
#lien{
    text-decoration: none;
    
}
.des span{
    font-size:x-large;
}
footer{
    background-color: rgb(20, 91, 54);
    padding: 12px;
    text-align: center;
    color: antiquewhite;
    position: absolute;
    top: 310%;
    width: 100%;
}
#eau{
    background-color: rgb(20, 91, 54);
    padding: 12px;
    text-align: center;
    color: antiquewhite;
    position: absolute;
    top: 410%;
    width: 100%;
}
.rani{
    cursor: pointer;
    border-radius: 20px;
    height: 480px;
   width: 300px;
   left: 23%;
   top: 330%;
   position: absolute;
   background-color:white; /* Arrière-plan noir semi-transparent */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombre autour de l'élément */
    /* ... Votre autre style ... */
}
.r{
    /* position: relative; */
    left: 20%;
    top: 3%;  

    border-radius: 20px;
    position: relative;
}
.cappy{
    cursor: pointer;
    border-radius: 20px;
    height:480px;
   width: 300px;
   left: 55%;
   /* bottom: 23%; */
   top: 330%;
   position: absolute;
   background-color:white; /* Arrière-plan noir semi-transparent */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombre autour de l'élément */
    /* ... Votre autre style ... */
}
.y{
    /* position: relative; */
    left: 0%;
    top: 3%;  

    border-radius: 20px;
    position: relative;
}
.bonaqua{
    cursor: pointer;
    border-radius: 20px;
    height: 480px;
   width: 300px;
   left: 36%;
   top: 230%;
   position: absolute;
   background-color:white; /* Arrière-plan noir semi-transparent */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombre autour de l'élément */
    /* ... Votre autre style ... */
}
.b{
    /* position: relative; */
    left: 15%;
    top: 3%;  

    border-radius: 20px;
    position: relative;
}
.ciel{
    cursor: pointer;
    border-radius: 20px;
    height: 480px;
   width: 300px;
   left: 38%;
   /* bottom: 23%; */
   top: 430%;
   position: absolute;
   background-color:white; /* Arrière-plan noir semi-transparent */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombre autour de l'élément */
    /* ... Votre autre style ... */
}
.i{
    /* position: relative; */
    left: 17%;
    top: 3%;  

    border-radius: 20px;
    position: relative;
}
    </style>
</head>
<body>

<header id="header" style=" z-index: 999;position:fixed;width: 100%;">
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
<!-- <a href="#" class="btn">checkoot now</a>  -->

<main id="page-header"  >
    <h2>Découvrir nos marques</h2>
    <p>Ici vous pouvez choisi votre parfums !</p>
     
</main>
<form action="calcul_prix.php" method="post">
<article id="product1" class="section-p1">
    <div class="pro-countainer" >
        
        <div class="coca">
            <img src="image/coca0.jpg" height="300px"alt="NotFound" class="c">
                <div class="des">
                    <br>
                        <span style="color: red;">Coca-Cola</span>
                      
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <form action="votre_page.php" method="post">
                             <input type="hidden" name="parfum" value="nom_du_parfum">
                             <label for="saveur">Choisissez une saveur :</label>
                             <select name="saveur" id="saveur">
                             <option value="saveur1">COCA COLA ZERO  </option>
                             <option value="saveur2">COCA COLA     </option>
                             <option value="saveur2">COCA LIGHT LEMON    </option>
                             <option value="saveur2">COCA-COLA LIGHT    </option>
                             <option value="saveur2">COCA COLA VANILLE     </option>
                             <!-- Ajoutez d'autres options de saveur ici -->
                            </select>
            <!-- <input type="submit" value="Ajouter au panier"> -->
        </form>
                 <br>       <a href="coca.html" id="lien">Continue</a>
                </div> 
               
            
       
        </div>
        <div class="fanta">
            <img src="image/fanta0.jpg" height="300px"alt="NotFound" class="f">
                <div class="des">
                    <br>
                        <span style="color: red;"> Fanta</span>
                     
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <form action="votre_page.php" method="post">
    <input type="hidden" name="parfum" value="nom_du_parfum">
    <label for="saveur">Choisissez une saveur :</label>
    <select name="saveur" id="saveur">
        <option value="saveur1">FANTA DES ILES </option>
        <option value="saveur2">FANTA ANANAS   </option>
        <option value="saveur2">FANTA LEMON    </option>    
        <option value="saveur2">FANTA GRENADE        </option> 

        <!-- Ajoutez d'autres options de saveur ici -->
    </select>
    <!-- <input type="submit" value="Ajouter au panier"> -->
</form>
                       <a href="fanta.html" id="lien">Continue</a>
                </div> 
               
            </div>
            <div class="sprite">
                <img src="image/sprite0.jpg" height="300px"alt="NotFound" class="f">
                    <div class="des">
                        <br>
                            <span style="color: red;">sprite</span>
                           
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <form action="votre_page.php" method="post">
    <input type="hidden" name="parfum" value="nom_du_parfum">
    <label for="saveur">Choisissez une saveur :</label>
    <select name="saveur" id="saveur">
        <option value="saveur1">SPRITE LIGHT </option>
        <option value="saveur2">SPRITE   </option>
        <!-- Ajoutez d'autres options de saveur ici -->
    </select>
    <!-- <input type="submit" value="Ajouter au panier"> -->
</form>
                           <a href="sprite.html" id="lien">Continue</a>
                    </div> 
                   
                </div>
                <div class="hawai">
                <img src="hawai0.jpg" height="300px"alt="NotFound" class="h">
                    <div class="des">
                        <br>
                            <span style="color: red;">hawai</span>
                         
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <form action="votre_page.php" method="post">
    <input type="hidden" name="parfum" value="nom_du_parfum">
    <label for="saveur">Choisissez une saveur :</label>
    <select name="saveur" id="saveur">
        <option value="saveur1">HAWAI ANANAS </option>
        <option value="saveur2">HAWAI TROPICAL      </option>
        <option value="saveur2">HAWAI  </option>
        <!-- Ajoutez d'autres options de saveur ici -->
    </select>
    <!-- <input type="submit" value="Ajouter au panier"> -->
</form>
                           <a href="hawai.html" id="lien">Continue</a>
                    </div> 
                   
                </div>
                <div class="schweppes">
                <img src="schweppes0.jpg" height="300px"alt="NotFound" class="w">
                    <div class="des">
                        <br>
                            <span style="color: red;">schweppes</span>
                            <h5></h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <form action="votre_page.php" method="post">
    <input type="hidden" name="parfum" value="nom_du_parfum">
    <label for="saveur">Choisissez une saveur :</label>
    <select name="saveur" id="saveur">
        <option value="saveur1">SCHWEPES</option>
        <option value="saveur2">SCHWEPES AGRUMES </option>
        <option value="saveur1">SHWEPES CITRON  </option>
        <option value="saveur1">SCHWEPES ORANGE  </option>
        <option value="saveur1">SCHWEPPS MANDARINE     </option>
        <option value="saveur1">SHWEPES TONIC  </option>
                        


        <!-- Ajoutez d'autres options de saveur ici -->
    </select>
    <!-- <input type="submit" value="Ajouter au panier"> -->
</form>
                           <a href="schweppes.html" id="lien">Continue</a>
                    </div> 
                   
                </div>
                <div class="poms">
                <img src="image/poms0.jpg" height="300px"alt="NotFound" class="p">
                    <div class="des">
                        <br>
                            <span style="color: red;">poms</span>
                           
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <form action="votre_page.php" method="post">
    <input type="hidden" name="parfum" value="nom_du_parfum">
    <label for="saveur">Choisissez une saveur :</label>
    <br> <select name="saveur" id="saveur">
        <option value="saveur1">POMS    </option>
        <option value="saveur2">Saveur 2</option>
        <!-- Ajoutez d'autres options de saveur ici -->
    </select>
    <!-- <input type="submit" value="Ajouter au panier"> -->
</form>
                           <a href="poms.html" id="lien">Continue</a>
                    </div> 
                   
                </div>

                <div class="tops">
                <img src="tops0.jpg" height="300px"alt="NotFound" class="t">
                    <div class="des">
                        <br>
                            <span style="color: red;">tops</span>
                         
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <form action="votre_page.php" method="post">
    <input type="hidden" name="parfum" value="nom_du_parfum">
    <label for="saveur">Choisissez une saveur :</label>
    
    <br><select name="saveur" id="saveur">
        <option value="saveur1">TOPS</option>
        <option value="saveur2">Saveur 2</option>
        <!-- Ajoutez d'autres options de saveur ici -->
    </select>
    <!-- <input type="submit" value="Ajouter au panier"> -->
</form>
                           <a href="tops.html" id="lien">Continue</a>
                    </div> 
                   
                </div>
<footer>
                <h4 >Pour les jus </h4>
                </footer>
  
                <div class="bonaqua">
                <img src="bonaqua0.jpg" height="300px"alt="NotFound" class="b">
                    <div class="des">
                        <br>
                            <span style="color: red;">bonaqua</span>
                           
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <form action="votre_page.php" method="post">
    <input type="hidden" name="parfum" value="nom_du_parfum">
    <label for="saveur">Choisissez une saveur :</label>
   <br>
    <select name="saveur" id="saveur">
        <option value="saveur1">BONAQUA</option>
        <option value="saveur2">Saveur 2</option>
        <!-- Ajoutez d'autres options de saveur ici -->
    </select>
    <!-- <input type="submit" value="Ajouter au panier"> -->
</form>
                           <a href="bonaqua.html" id="lien">Continue</a>
                    </div> 
                   
                </div>

                <div class="ciel">
                <img src="ciel0.jpg" height="300px"alt="NotFound" class="i">
                    <div class="des">
                        <br>
                            <span style="color: red;">ciel</span>
                        
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <form action="votre_page.php" method="post">
    <input type="hidden" name="parfum" value="nom_du_parfum">
    <label for="saveur">Choisissez une saveur :</label>
    <select name="saveur" id="saveur">
        <option value="saveur1">CIEL</option>
        <option value="saveur2">Saveur 2</option>
        <!-- Ajoutez d'autres options de saveur ici -->
    </select>
    <!-- <input type="submit" value="Ajouter au panier"> -->
</form>
                           <a href="ciel.html" id="lien">Continue</a>
                    </div> 
                   
                </div>

                <div class="rani">
                <img src="rani0.png" height="300px"alt="NotFound" class="r">
                    <div class="des">
                        <br>
                            <span style="color: red;">rani</span>
                        
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <form action="votre_page.php" method="post">
    <input type="hidden" name="parfum" value="nom_du_parfum">
    <label for="saveur">Choisissez une saveur :</label>
    <select name="saveur" id="saveur">
        <option value="saveur1">RANI</option>
        <option value="saveur2">Saveur 2</option>
        <!-- Ajoutez d'autres options de saveur ici -->
    </select>
    <!-- <input type="submit" value="Ajouter au panier"> -->
</form>
                           <a href="rani.html" id="lien">Continue</a>
                    </div> 
                   
                </div>

                <div class="cappy">
                <img src="cappy0.jpg" height="300px"alt="NotFound" class="y">
                    <div class="des">
                        <br>
                            <span style="color: red;">cappy</span>
                          
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <form action="votre_page.php" method="post">
    <input type="hidden" name="parfum" value="nom_du_parfum">
    <label for="saveur">Choisissez une saveur :</label>
    <select name="saveur" id="saveur">
        <option value="saveur1">CAPPY</option>
        <option value="saveur2">Saveur 2</option>
        <!-- Ajoutez d'autres options de saveur ici -->
    </select>
    <!-- <input type="submit" value="Ajouter au panier"> -->
</form>
                           <a href="cappy.html" id="lien">Continue</a>
                    </div> 
                   
                </div>
<article id="eau">
    <h4>Pour les eaux</h4>
</article>
        </div>
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

</form>-->
<!-- Afficher les produits sélectionnés -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["produits"])) {
    $produits = $_POST["produits"];
    echo "<h2>Produits sélectionnés :</h2>";
    echo "<ul>";
    foreach ($produits as $produit) {
        echo "<li>$produit</li>";
    }
    echo "</ul>";
}
?>

<!-- Bouton "Terminer" -->
<form action="calcul_prix.php" method="post">
    <input type="hidden" name="produits" value="<?php echo implode("|", $produits); ?>">
    <input type="submit" value="Terminer">
</form>

<input type="submit" value="DONE">
</article> 
</form>
</body>
</html>
