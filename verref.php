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
        #cart-btn{
            text-decoration: none;
            color: red;
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
   background-color:white; 
   box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); 
  
}
.c{
    position: relative;
    left: 10%;
    top: 3%;
    border-radius: 20px;
}
.proo {
    cursor: pointer;
   height: 480px;
   width: 300px;
   left: 50%;
   top: 60%;
   position: absolute;
   background-color:white;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); 
    border-radius: 20px;
}
.f{
    position: relative;
    left: 0%;
    top: 3%;
    
    border-radius: 20px;
}
.s{
   
    left: 50%;
    top: 3%;  

    border-radius: 20px;
    position: relative;
}
.prooo{
    cursor: pointer;
    border-radius: 20px;
    height: 480px;
   width: 300px;
   left: 75%;
   top: 60%;
   position: absolute;
   background-color:white;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); 

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
    top: 45%;
    position: absolute;
    height: 9%;
    width: 21%;

    border-radius: 20px;
}
    </style>
</head>
<body>

    <header class="header">
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
        <img src="fanta-verre-25cl.jpeg" height="300px" alt="fanta-verre-25cl" class="c">
        <input type="hidden" name="product_name" value="fanta-verre-25cl">
        <input type="hidden" name="product_image" value="fanta-verre-25cl.jpeg">
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
                        <!-- <input type="checkbox" name="produits[]" value="coca-cola|verre|25cl"> Coca-Cola Verre 25cl<br> -->
                        <input type="hidden" name="add_to_cart" value="tanta|verre|25cl" style="position:absolute;left:300%;">Fanta Verre 25cl
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
            <img src="fanta-verre-33cl.jpeg" height="300px"alt="fanta-verre-33cl" class="f">
            <input type="hidden" name="product_name" value="fanta-verre-33cl">
        <input type="hidden" name="product_image" value="fanta-verre-33cl.jpeg">
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
                        <!-- <input type="checkbox" name="produits[]" value="coca-cola|verre|33cl"> Coca-Cola Verre 33cl<br> -->
                        <!-- <a href="paying.php?product=fanta"><i class="fa fa-shopping-cart cart"></i></a> -->
                </div> 
                <input type="hidden" name="add_to_cart" value="fanta|verre|33cl">Fanta Verre 33cl
                <br><button type="submit"  style=" position:absolute;left:30%;top:93%;">Ajouter au panier</button>
                        <!-- <a href="paying.php?product=coca"><i class="fa fa-shopping-cart cart"></i></a> -->
</form>
</div>   
            </div>
            <div class="product" >
            <form action="ajouter_panier.php" method="post">
            <div class="prooo" >
                <img src="fanta-verre-1l.jpeg" height="300px"alt="fanta-verre-1l" class="f">
                <input type="hidden" name="product_name" value="fanta-verre-1l">
        <input type="hidden" name="product_image" value="fanta-verre-1l.jpeg">
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
                            <!-- <input type="checkbox" name="produits[]" value="coca-cola|verre|1l"> <br> -->
                            <!-- <a href="paying.php?product=sprite"><i class="fa fa-shopping-cart cart"></i></a> -->
                    </div> 
                    <input type="hidden" name="add_to_cart" value="fanta|verre|1l">Fanta Verre 1l
                    <br> <button type="submit"  style=" position:absolute;left:30%;top:93%;">Ajouter au panier</button>
                        <!-- <a href="paying.php?product=coca"><i class="fa fa-shopping-cart cart"></i></a> -->
</form>
                </div>
                
                </div> 
                </div>
        </div>

  
    
</body>
</html>

