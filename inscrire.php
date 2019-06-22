<?php
include("inc/init.inc.php");
include("inc/header.inc.php");

?>

<!-- --------------------------BODY---------------------------- -->

<?php

if (!empty($_POST)){
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
    $pseudo = filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING);
    $mdp = sha1(filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING));

    $dateCreation = date("Y-m-d h:i:s");

    $gravatar = 'default.png';
    $statut = 'membre';

    $query = "INSERT INTO membres (gravatar, login, password, statut, prenom, nom) VALUES ('$gravatar' , '$pseudo' , '$mdp' , '$statut' , '$prenom' , '$nom')";
    $result = $pdo->query($query); 
    echo $query;
}


?>

<div class="row text-center">
    <br>
    <div class="col-sm-4">
        
    </div>
    <div class="col-sm-4">
        <form method="post">
            <div class="form-group">
              <label for="exampleInputnom">Nom</label>
              <input type="name" class="form-control" id="nom" name="nom" aria-describedby="emailHelp" placeholder="Entre votre nom">
            </div>
            <div class="form-group">
              <label for="exampleInputprenom">Prénom</label>
              <input type="name" class="form-control" id="prenom" name="prenom" aria-describedby="emailHelp" placeholder="Entrer votre prénom">
            </div>
            <div class="form-group">
              <label for="exampleInputlogin">Login</label>
              <input type="login" class="form-control" id="login" name="login" aria-describedby="emailHelp" placeholder="Entrer votre login">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-sm-4">
        
    </div>
    <br>
</div>

<!-- --------------------------- FOOTER ----------------------------- -->
<?php include("inc/footer.inc.php") ?>