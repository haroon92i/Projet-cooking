<!----------------------------HEADER----------------------------->
<?php 
include("inc/init.inc.php");
include("inc/header.inc.php");


$id_utilisateur = filter_input(INPUT_GET,'idr',FILTER_SANITIZE_ENCODED);
/* Détails recette */
$query = "SELECT * FROM membres";
$result = $pdo->query($query);
$membres = $result->fetch(PDO::FETCH_OBJ);
while ($membres = $result->fetch(PDO::FETCH_OBJ)) { 

?>

<!----------------------------BODY------------------------------>
<div class="row ">
        <div class="col-sm-4">
            
        </div>
        
        <div class="card col-sm-4  text-center carte-resultat" >
            <img class="card-img-top" src="photos/gravatars/<?php echo $membres->gravatar; ?>" alt="Image Gravatar <?php echo ($recette->titre); ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo ($membres->nom); ?> <?php echo ($membres->prenom); ?> </h5>
            </div>
        </div>
</div>

<?php }
?>
<!----------------------------FOOTER------------------------------>
<?php include("inc/footer.inc.php") ?>