<!-- --------------------INCLUSION---------------------------- -->
<?php include("inc/init.inc.php") ?>
<?php include("inc/header.inc.php") ?>

<!-- --------------------CORPS-------------------------------- -->
<body>
    
    <!-- -----------------------SLIDES----------------------- -->
    <div class="bd-example slides">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="photos/slides/creme-petits-poids.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Crème petits pois</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            
            <div class="carousel-item">
                <img src="photos/slides/carottes-glacees-orange.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Carottes glacées orange</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            
            <div class="carousel-item">
                <img src="photos/slides/girolles-paysanne.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Girolles paysannes</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            
        </div>
            
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
            
        </div>
    </div>
    <br>
    <!-- --------------------Images rondes--------------------- -->
    <div class="row">
        <div class="col-md-12 text-center miniimages">
            <img src="photos/recettes/carottes-glacees-orange.jpg" alt="Carottes glacées orange" class="img-thumbnail">
            <img src="photos/recettes/creme-petits-poids.jpg" alt="Crème petits pois" class="img-thumbnail">
            <img src="photos/recettes/girolles-paysanne.jpg" alt="Girolles paysannes" class="img-thumbnail">
            <img src="photos/recettes/lotte-legumes.jpg" alt="Lotte légumes" class="img-thumbnail">
            <img src="photos/recettes/marmelade-carottes.jpg" alt="Marmelade carottes" class="img-thumbnail">
            <img src="photos/recettes/navarin-agneau.jpg" alt="Navarin agneau" class="img-thumbnail">
            <img src="photos/recettes/pain-viande-legume.jpg" alt="Pain viande legume" class="img-thumbnail">
            <br><br>
            <img src="photos/recettes/penne-aux-petits-legumes.jpg" alt="Penne aux petit legumes" class="img-thumbnail">
            <img src="photos/recettes/pomme-de-terre-aux-herbes.jpg" alt="Pomme de terre aux herbes" class="img-thumbnail">
            <img src="photos/recettes/pommes-de-terre-roquefort.jpg" alt="Pommes de terre roquefort" class="img-thumbnail">
            <img src="photos/recettes/quiche-legume-printemps.jpg" alt="Quiche legume printemps" class="img-thumbnail">
            <img src="photos/recettes/risotto-feves-asperges.jpg" alt="Risotto feves asperges" class="img-thumbnail">
            <img src="photos/recettes/risotto-poulet-carottes.jpg" alt="Risotto poulet carottes" class="img-thumbnail">
            <img src="photos/recettes/salade-riz-legumes.jpg" alt="Salade riz legume" class="img-thumbnail">
        </div>
    </div>
    <br>
    
    <!-- -----------------------------Recette du jour----------------- -->
    
    <h3>Recettes du jour</h3>
    <div class="row">
        
        
        
        <div class="col-md-4 recette1">
            <div class="card w-100" style="width: 18rem;">
                <img src="photos/recettes/carottes-glacees-orange.jpg" class="card-img-top" alt="Carottes galcées orange">
                
                <div class="card-body">
                    <h5 class="card-title">Carrottes glacées orange</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                
                <div class="card-body">
                    <a href="#" class="card-link">En savoir plus</a>
                </div>
                
                <div class="card-footer text-muted">
                    Proposé par :
                </div>
            </div>    
        </div>
        
        <div class="col-md-4 recette2">
            <div class="card w-100" style="width: 18rem;">
                <img src="photos/recettes/creme-petits-poids.jpg" class="card-img-top" alt="Crème petits poids">
                
                <div class="card-body">
                    <h5 class="card-title">Crèmes petits poids</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                
                <div class="card-body">
                    <a href="#" class="card-link">En savoir plus</a>
                </div>
                
                <div class="card-footer text-muted">
                    Proposé par :
                </div>
            </div>
        </div>
        
        <div class="col-md-4 recette3">
            <div class="card w-100" style="width: 18rem;">
                <img src="photos/recettes/girolles-paysanne.jpg" class="card-img-top" alt="Girolles paysanne">
                
                <div class="card-body">
                    <h5 class="card-title">Girolles Paysannes</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                
                <div class="card-body">
                    <a href="#" class="card-link">En savoir plus</a>
                </div>
                
                <div class="card-footer text-muted">
                    Proposé par :
                </div>
            </div>
        </div>
        
    </div>

            
<!-- ---------------------------FOOTER------------------------ -->
<?php include("inc/footer.inc.php") ?>