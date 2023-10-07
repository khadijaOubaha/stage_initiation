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
// ...
if (isset($_POST['Se_connecter'])) {
    extract($_POST);
    if (!empty($lemail) && !empty($lpassword)) {

        $q = $conn->prepare("SELECT * FROM Clients WHERE email = ?");
        $q->bind_param("s", $lemail);
        $q->execute();

        $result = $q->get_result()->fetch_assoc();

        if ($result) {
            if (password_verify($lpassword, $result['passwd'])) {
                // Mot de passe correct, effectuez les actions nécessaires ici
                header("Location: index.html");
                exit();
            } else {
                echo "Le mot de passe n'est pas correct.";
            }
        } else {
            echo "Le compte portant l'email " . $lemail . " n'existe pas.";
        }
    } else {
        echo "Veuillez compléter tous les champs.";
    }
}
// ...

?>
