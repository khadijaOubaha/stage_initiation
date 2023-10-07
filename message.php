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
    if (isset($_POST["Envoyer"])) {
        // Code pour l'inscription
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $adresse = $_POST["adresse"];
        $message = $_POST["message"];
        
        $insert = "INSERT INTO `message_clients` (Nom, Prenom ,Tel,  Email ,Adresse, Message) 
                   VALUES ('$nom', '$prenom', '$tel','$email','$adresse', '$message')";

        if ($conn->query($insert) === TRUE) {
            echo "votre message est envoyer " ;
    
        } else {
            echo "Erreur  : " . $conn->error;
        }
 
    }
   

$conn->close();
?>
