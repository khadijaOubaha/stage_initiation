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
  height:480px;
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
  height:480px;
   width: 300px;
   left: 50%;
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
.prooo{
    cursor: pointer;
    border-radius: 20px;
   height:480px;
   width: 300px;
   left: 75%;
   top: 60%;
   position: absolute;
   background-color:white; /* Arrière-plan noir semi-transparent */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombre autour de l'élément */
    /* ... Votre autre style ... */
}
.prooooo{
    cursor: pointer;
    border-radius: 20px;
   height:480px;
   width: 300px;
   left: 60%;
   top: 140%;
   position: absolute;
   background-color:white; /* Arrière-plan noir semi-transparent */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombre autour de l'élément */
    /* ... Votre autre style ... */
}
.proooo{
    cursor: pointer;
    border-radius: 20px;
   height:480px;
   width: 300px;
   left: 35%;
   top: 140%;
   position: absolute;
   background-color:white; /* Arrière-plan noir semi-transparent */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombre autour de l'élément */
    /* ... Votre autre style ... */
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
    <div class="product">
    <form action="ajouter_panier.php" method="post">
        <div class="pro" >
            <img src="image/coca-P-25cl.jpg" height="300px"alt="Coca-Cola-plastic-25cl" class="c">
            <input type="hidden" name="product_name" value="Coca-Cola-plastic-25cl">
        <input type="hidden" name="product_image" value="image/coca-P-25cl.jpg">
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
              
                      
                        <input type="hidden" name="add_to_cart" value="coca-cola|verre|25cl" style="position:absolute;left:300%;">Coca-Cola Plastic 25cl
<br>
    <button type="submit"  style=" position:absolute;left:30%;top:103%;">Ajouter au panier</button>
                        <!-- <a href="paying.php?product=coca"><i class="fa fa-shopping-cart cart"></i></a> -->
   </form>
                        
                </div> 
                </div>       
        </div>
        <div class="product">
           <form action="ajouter_panier.php" method="post">
        <div class="proo">
            <img src="image/coca-p-0.5l.jpg" height="300px"alt="Coca-Cola-plastic-0.5l" class="f">
            <input type="hidden" name="product_name" value="Coca-Cola-plastic-0.5l">
        <input type="hidden" name="product_image" value="image/coca-p-0.5l.jpg">
            <div class="des">
                    <br>
                        <span style="color: red;"> Contenance:</span>
                        <h4>0.5l</h4>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                </div> 
                <input type="hidden" name="add_to_cart" value="coca-cola|plastic|0.5l">Coca-Cola Plastic 0.5l
                <br><button type="submit"  style=" position:absolute;left:30%;top:93%;">Ajouter au panier</button>
</form>
</div>     
            </div>
            <div class="product">
               <form action="ajouter_panier.php" method="post">
            <div class="prooo" >
                <img src="image/coca-p-1l.jpg" height="300px"alt="Coca-Cola-plastic-1l" class="f">
                <input type="hidden" name="product_name" value="Coca-Cola-plastic-1l">
        <input type="hidden" name="product_image" value="image/coca-p-1l.jpg">    
                <div class="des">
                        <br>
                            <span style="color: red;">Contenance:</span>
                            <h4>1L</h4>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <input type="hidden" name="add_to_cart" value="coca-cola|plastic|1l">Coca-Cola Plastic 1l
                    <br> <button type="submit"  style=" position:absolute;left:30%;top:103%;">Ajouter au panier</button>
                        <!-- <a href="paying.php?product=coca"><i class="fa fa-shopping-cart cart"></i></a> -->
</form> </div>
                   
                </div>
                <div class="product">
               <form action="ajouter_panier.php" method="post">
                <div class="proooo" >
                <img src="image/coca-p-1.5l.jpg" height="300px"alt="NotFound" class="f" style="left:80px">
                <input type="hidden" name="product_name" value="Coca-Cola-plastic-1.5l">
        <input type="hidden" name="product_image" value="image/coca-p-1.5l.jpg">
                    <div class="des">
                        <br>
                            <span style="color: red;">Contenance:</span>
                            <h4>1.5L</h4>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <input type="hidden" name="add_to_cart" value="coca-cola|Plastic|1l">Coca-Cola Plastic 1.5l
                    <br> <button type="submit"  style=" position:absolute;left:30%;top:103%;">Ajouter au panier</button>
                        <!-- <a href="paying.php?product=coca"><i class="fa fa-shopping-cart cart"></i></a> -->
</form> </div>
                   
                </div>
                <div class="product">
               <form action="ajouter_panier.php" method="post">
                <div class="prooooo" >
                <img src="image/coca-p-2l.jpg" height="300px"alt="Coca-Cola-plastic-2l" class="f" style="left:45px">
                <input type="hidden" name="product_name" value="Coca-Cola-plastic-2l">
        <input type="hidden" name="product_image" value="image/coca-p-2l.jpg">
                    <div class="des">
                        <br>
                            <span style="color: red;">Contenance:</span>
                            <h4>2L</h4>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <input type="hidden" name="add_to_cart" value="coca-cola|Plastic|2l">Coca-Cola Plastic 2l
                    <br> <button type="submit"  style=" position:absolute;left:30%;top:103%;">Ajouter au panier</button>
                        <!-- <a href="paying.php?product=coca"><i class="fa fa-shopping-cart cart"></i></a> -->
</form> </div>
                   
                </div>
        </div>

    </form>
  

    
</body>
</html>

