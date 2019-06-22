<!-- -------------------------- HEADER ----------------------------->
<?php 
include("inc/init.inc.php");
include("inc/header.inc.php") 
?>

<!-- -------------------------- BODY ------------------------------>
<?php


$recherche = filter_input(INPUT_GET, 'recherche', FILTER_SANITIZE_STRING);

//$result = $pdo->query("SELECT * FROM recettes WHERE titre LIKE '%$recherche%'");
$result = $pdo->query("SELECT r.idRecette, r.titre, r.chapo, r.img, r.membre, r.tempsCuisson, r.tempsPreparation, r.difficulte, r.prix, m.prenom,m.gravatar FROM recettes r, membres m WHERE titre LIKE '%$recherche%' AND r.membre=m.idMembre");

$nombreresultat = "SELECT COUNT(*) FROM recettes WHERE titre LIKE '%$recherche%'";
$nombreresultat_count = $pdo->query($nombreresultat)->fetchColumn();

$class="";
if ($nombreresultat_count==1) {
    $class="col-md-6";
} else {
    $class="col-sm-4 col-md-6";
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 ">
            <h4 class="titrerecherche">Il y a "<strong> <?php echo $nombreresultat_count?> </strong>" résultat(s) pour votre recherche "<strong> <?php echo $recherche ?> </strong>".
            </h4>
        </div>
    </div>
    



<?php
while ($recette = $result->fetch(PDO::FETCH_OBJ)){ ?>
    <!--<h1> <?php echo ($recette->titre); ?></h1>
     <p> <?php echo ($recette->preparation); ?></p>
    <img src='photos/recettes/<?php echo $recette->img; ?>' /> -->
<br>
    <div class="row ">
        <div class="col-lg-4">
            
        </div>
        
        <div class="card col-lg-4 w-100 text-center carte-resultat" >
            <img class="card-img-top" src="photos/recettes/<?php echo $recette->img; ?>" alt="Image Recette <?php echo ($recette->titre); ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo ($recette->titre); ?></h5>
              <p class="card-text"><?php echo ($recette->chapo); ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <img src="images/cuisson.png" alt="Temps de cuisson">: <?php echo ($recette->tempsCuisson); ?> 
                    <img src="images/temps.png" alt="Temps de préparation">: <?php echo ($recette->tempsPreparation); ?> 
                    <img src="images/fourchette.png" alt="Difficulté">: <?php echo ($recette->difficulte); ?> 
                    <img src="images/prix.png" alt="Prix">: <?php echo ($recette->prix); ?>
                </li>
              <li class="list-group-item">
                  <p>Proposé par : 
                    <a href="membres.php?idMembre=<?php echo $recette->membre; ?>"><?php echo $recette->prenom;?></a>
                  </p>
                  <img src="photos/gravatars/<?php echo $recette->gravatar; ?>">
              </li>
            </ul>
            <div class="card-body">
              <a href="recettes.php?idRecette=<?php echo $recette->idRecette; ?>">Voir détail</a>
            </div>
        </div>
        
    </div>


<?php }
?>
</div>

<!-- -------------------------- FOOTER ------------------------------>
<?php include("inc/footer.inc.php") ?>
