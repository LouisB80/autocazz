<?php
session_start();
include 'validation.php';
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Asap&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/vente.css">
        <?php include('header.php') ?>
    <div class="container mt-4 mb-4">
        <!-- Debut Vendre un véhicule -->
        <p id="section" class="text-center">Vendre un véhicule</p>
        <?php include 'carousel.php'; ?>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <!-- Début du formulaire de vente -->
        <?php if (!isset($_GET['step'])) { ?>
            <form class="selForm" action="vente.php?step=2" method="POST">
                <div class="table">
                    <h1>Renseignements sur le véhicule</h1>
                    <div class="form-group">
                        <label for="immat">Renseignez l'immatriculation:</label>
                        <input class="form-control" type="text" id="immat" name="immat" placeholder="Ex: ab123cd">
                    </div>
                    <div class="form-group">
                        <label for="secretNumber">Renseignez les 3 derniers chiffres du numéro d'identification:</label>
                        <input class="form-control" type="text" id="secretNumber" name="secretNumber" placeholder="Ex: 123">
                    </div>
                    <input class="btn btn-success nextBtn" type="submit" value="Suivant" name="validation">
                </div>
            </form>            
        <?php } elseif ($_GET['step'] == 2) { ?>        
            <form class="selForm" action="vente.php?step=3" method="POST">
                <div class="table">
                    <h1>Etat du véhicule</h1>
                    <div class="form-group">
                    </div>
                    <input class="btn btn-secondary prevBtn" type="submit" value="Precedent" name="return">
                    <input class="btn btn-success nextBtn" type="submit" value="Suivant" name="validation">
                </div>                
            </form>
        <?php } elseif ($_GET['step'] == 3) { ?>
            <form class="selForm" action="vente.php?step=4" method="POST">
                <div class="table">
                    <h1>Photos</h1>
                    <div class="form-group">                        
                    </div>
                    <input class="btn btn-secondary" type="submit" value="Precedent" name="return">
                    <input class="btn btn-success nextBtn" type="submit" value="Suivant" name="validation">
                </div>                
            </form>
        <?php } elseif ($_GET['step'] == 4) { ?>
            <form class="selForm" action="vente.php?step=5" method="POST">
                <div class="table">
                    <h1>Coordonnées</h1>
                    <div class="form-group">                        
                    </div>
                    <input class="btn btn-secondary" type="submit" value="Precedent" name="return">
                    <input class="btn btn-success nextBtn" type="submit" value="Valider" name="validation">
                </div>                
            </form>
        <?php } elseif ($_GET['step'] == 5) { ?>
            <form class="selForm" action="vente.php?step=success" method="POST">
                <div class="table">
                    <h1>Options</h1>
                    <div class="form-group">                        
                    </div>
                    <input class="btn btn-secondary" type="submit" value="Precedent" name="return">
                    <input class="btn btn-success nextBtn" type="submit" value="Valider" name="validation">
                </div>                
            </form>
        <?php } elseif ($_GET['step'] == 'success') { ?>
            <p class="selForm">Vos données ont été enregistrées avec succés</p> 
            <a href="index.php"><button class="btn btn-info" type="button">Retourner sur la page d'accueil</button></a>
        <?php } ?>  
        <!-- Fin du formulaire de vente -->
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
