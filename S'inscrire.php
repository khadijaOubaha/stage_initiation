<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$bdname = "bd_clients";

// Create connection
$conn = new mysqli($servername, $username, $password, $bdname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Vérifier si le formulaire a été soumis pour l'inscription ou la connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["S'inscrire"])) {
        // Code pour l'inscription
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $adresse = $_POST["adresse"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $mot = $_POST["mot"];
        
$mot_hache = password_hash($mot, PASSWORD_DEFAULT);
// Ensuite, utilisez $mot_hache pour enregistrer le mot de passe dans la base de données.
$_SESSION['nom'] = $nom;
$_SESSION['prenom'] = $prenom;
$_SESSION['adresse'] = $adresse;

        // Requête d'insertion
        $insert = "INSERT INTO Clients (Nom, Prenom, Adresse, Tel, Email, passwd) 
                   VALUES ('$nom', '$prenom', '$adresse', '$tel', '$email', '$mot_hache')";

        if ($conn->query($insert) === TRUE) {
            // Démarrer la session et définir une variable de session pour l'e-mail de l'utilisateur
            $_SESSION["email"] = $email;
           
            header("Location: index.html");
            exit();
        } else {
            echo "Erreur lors de votre inscription : " . $conn->error;
        }
    } 
    

  // ...

elseif(isset($_POST['Se_connecter'])){
    if(!empty($_POST['lemail']) && !empty($_POST['lpassword'])){
        $lemail = htmlspecialchars($_POST['lemail']);
        $lpassword = $_POST['lpassword'];

        $recupUser = $conn->prepare('SELECT * FROM Clients WHERE Email = ?');
        $recupUser->execute(array($lemail));
        $user = $recupUser->fetch(); // Récupérer les données de l'utilisateur

        if($user && password_verify($lpassword, $user['passwd'])){
            // Mot de passe correct, rediriger ou effectuer des actions appropriées
            header('Location: index.html');
            exit();
        } else {
            // echo "Votre mot de passe ou email est incorrect";
            header('Location: index.html');
        }
    } else {
        echo "Veuillez compléter tous les champs";
    }
}

// ...
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="style.css">
    <style>
         /* body {
            background-image: url('ccc.jpg');
            background-size: cover;
            background-attachment: fixed;
           
        } */
        body .form{ 
    display:flex;
    align-items: center; 
    justify-content: center;
    height: 100vh;
    /* flex-direction: column; */
   
    
}
form {
    display: flex;
    flex-direction: column;
    background-color: #fff;
    padding:80px;
    margin:60px;
    top:30%;
    border-radius: 6px;
    box-shadow: 0 0 10px  red;
    position: absolute;
   width: 40%;
   border-radius: 20px;
}
#connect{
    display: flex;
    flex-direction: column;
    background-color: #fff;
    padding:80px;
    margin:60px;
    top:30%;
    border-radius: 6px;
    box-shadow: 0 0 10px  red;
    position: absolute;
    left:50%;
    border-radius: 20px;
}
.logo {
    top: 0%;
    position:relative;
            margin-top: 50px; 
            
       
        }
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
#insc {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
            position: absolute;
            left:18%;
            padding:2%;
        }
#conn{
    text-align: center;
            font-size: 20px;
            margin-top: 20px; 
            position: absolute;
            left:65%;
            padding:2%;
}
    </style>
</head>
<body style=" background-size: cover; background-attachment: fixed;">
    <header class="logo" style="   background-color:rgba(219, 60, 60, 0.943);">
        <img src="image/img.png" alt="" style="height:100px;width:120px;top:0px;">
</header>
    <h4 style="align-items: center;justify-content: center; text-align:center;" id="insc">S'inscrire</h4>
    <form action="S'inscrire.php" method="post">
    <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" style="padding: 5px; "required>
       
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom" style="padding: 5px; "required>
       
        <label for="adresse">Adresse :</label>
        <input type="text" name="adresse" id="adresse"style="padding: 5px; " required>
       
        <label for="tel">Tel :</label>
        <input type="tel" name="tel" id="tel" style="padding: 5px; "required>
       
        <label for="email">Email :</label>
        <input type="email" name="email" id="email"   style="padding: 5px; "required>

        <label for="password">mot de passe :</label>
        <input type="password" name="mot" id="password" style="padding: 5px; "required>
        <input type="submit" name="S'inscrire" value="S'inscrire" style="background-color:rgba(219, 60, 60, 0.943); padding:3px;">
    </form>

    <h4 style="align-items: center;justify-content: center; text-align:center;"id="conn">Se connecter</h4>
    <form action="" method="post" id="connect">
        <!-- Seuls l'email et le mot de passe seront affichés ici -->
        <label for="email">Email :</label>
        <input type="email" name="lemail" id="lemail"   style="padding: 5px; "required>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="lpassword" id="lpassword" style="padding: 5px; "required>

        <input type="submit" name="Se_connecter" value="Se connecter" style="background-color:rgba(219, 60, 60, 0.943);padding:3px;">
    </form>
</body>
</html>

