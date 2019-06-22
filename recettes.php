<!----------------------INCLUSION------------------------------>
<?php include("inc/init.inc.php") ;
 include("inc/header.inc.php") ;

$id_recette = filter_input(INPUT_GET,'idr',FILTER_SANITIZE_ENCODED);
/* Détails recette */
$query = "SELECT * FROM recettes";
$result = $pdo->query($query);
$recette = $result->fetch(PDO::FETCH_OBJ);
while ($recette = $result->fetch(PDO::FETCH_OBJ)) { 
?>
<div class="container">
    <div class="row mx-auto pt-5">
        <div class="col-sm-12 titre-recette p-5 text-center" style="color: <?php echo $couleurs[$recette->couleur];?>">
            <h1><?php echo $recette->titre;?></h1>
            <h6>Par <a href="membre-detail.php?idm=<?php echo $recette->idMembre; ?>"><?php echo ucfirst($recette->prenom); ?></a> | <i class="fas fa-utensils"></i> <?php echo $recette->difficulte; ?> | <i class="fas fa-euro-sign"></i> <?php echo $recette->prix ?> | <?php echo substr($recette->dateCrea,0,10);?></h6>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center mx-auto">
        <div class="col-sm-6 pb-5">
            <img src="photos/recettes/<?php echo $recette->img; ?>" class="rounded img-fluid" alt="<?php echo substr($recette->img,0, strpos($recette->img,'.'));?>" id="imageRecette">
        </div>
    </div>
    <div class="row mx-auto">
        <div class="col-sm-6 col-md-12 p-2">
            <p id="description">
                <?php echo $recette->chapo; ?>
            </p>
            <h6 id="recette-meta">Cuisson: <?php echo $recette->tempsCuisson;?> | Préparation: <?php echo $recette->tempsPreparation; ?> | Catégorie: <?php echo $recette->nom?></h6>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="col-sm-6 p-2" id="ingredients">
            <h5>Ingrédients</h5>
            <ul>
                <?php echo $recette->ingredient;?>
            </ul>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="col-sm-6 col-md-12 p-2">
            <h5>Préparation</h5>
            <div id="preparation">
                <?php echo $recette->preparation; ?>
            </div>
        </div>
    </div>
    <p>
        <a href="./index.php">Retour</a>
    </p>
</div>
<?php }

	?>
<br>
<!-----------------------------FOOTER-------------------------->
<?php include("inc/footer.inc.php") ?>
