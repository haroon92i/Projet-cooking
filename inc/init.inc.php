<?php
// CONNEXION SECURISE A LA BDD

include("_conf.inc.php");

try {
$pdo = new PDO($bdd, $user, $password, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
} catch (PDOException $pe){
    echo $pe->getMessage();
}

?>