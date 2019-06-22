<?php 
include("inc/init.inc.php");
include("inc/header.inc.php"); 


if(!empty($_POST)){
    $pseudo = filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING);
    $mdp = sha1(filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING));
    
    $result = $pdo->query("SELECT * FROM membres WHERE login='$pseudo' AND password = '$mdp'");
    $employe = $result->fetch(PDO::FETCH_OBJ);
    
    if($employe == false) {
        echo "Mauvais ID";
    } else {
        $_SESSION["idMembre"] = $employe->idMembre;
        $_SESSION["gravatar"] = $employe->gravatar;
        $_SESSION["pseudo"] = $employe->login;
        $_SESSION["statut"] = $employe->statut;
        $_SESSION["prenom"] = $employe->prenom;
        $_SESSION["prenom"] = $employe->nom;
        
        if($employe->statut == 'membre') {
            header('Location : account.php');
            exit();
        } else if ($employe->statut == 'admin') {
            header('Location : admin/admin.php');
            exit();
        }
    }
}