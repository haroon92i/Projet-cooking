<!DOCTYPE HTML>
<html lang="fr">

    <head>

        <title>Cooking</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">

        <!---------------------------Bootstrap------------------------->
        <link href="css/bootstrap-grid.css" rel="stylesheet">
        <link href="css/bootstrap-reboot.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!---------------------------CSS------------------------------->
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!---------------------------Font------------------------------>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Dokdo" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <div class="container-fluid">
            <!-- ******************************************************* -->
            <!-- Header -->
            <!-- ******************************************************* -->
            <div class="row header">
                    <div class="container-fluid">
                        


                        <div class="row">
                            <div class="col-md-2 text-center recherche">
                                <form action="recherche.php" class="form-inline my-2 my-lg-0 rech" method="get">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Tapez votre recherche" aria-label="Search" name="recherche">
                                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
                                        <i class="fas fa-search"></i>
                                        
                                    </button>
                                </form>
                            </div>

                            <div class="col-md-8 text-center logo">
                                <a href="./index.php"><img src="images/logo-cooking.png" alt="logo" id="logocooking"></a>
                                <p class="lead slogan">miam miam, gloups gloups, laps laps.</p>
                            </div>

                            <div class="col-md-2 text-center droiteentete">
                                <button type="button" class="btn btn-danger depot"><a href="depot.php">Déposer une recette</a></button>
                            </div>
                        
                        </div>
                    </div>
            </div>
            
            <!-- ******************************************************* -->
            <!-- NavBar -->
            <!-- ******************************************************* -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.php">Cooking</a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="recettes.php">Recettes <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="membres.php">Membres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >Menus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >Minceur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >Ateliers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >Contact</a>
                    </li>
                </ul>

                <a href="connecter.php" target="_blank"><button type="button" class="btn btn-success">Se connecter</button></a>
                <a href="inscrire.php" target="_blank"><button type="button" class="btn btn-primary">Créer un compte</button></a>
                
                                
                </div>
                
            </nav>
