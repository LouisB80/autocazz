<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Asap&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/location.css">
        <?php include('header.php') ?>
        <!-- Debut Louer un véhicule -->
    <p id="section" class="text-center">Louer un véhicule</p>
    <!-- Fin Louer un véhicule -->
    <div class="container-fluid d-flex justify-content-center">
        <!-- Debut Affichage Base De Donnée -->
        <div id="dataBaseList">
            <div class="input-group justify-content-center" id="search">
                <!-- Début Filtre -->
                <form class="text-center" action="index.html" method="post">
                    <select class="marque" name="Marque">
                        <option value="">--Marque--</option>
                        <option value="">Marque(BDD)</option>
                    </select>
                    <select class="model" name="Model">
                        <option value="">--Modèle--</option>
                        <option value="">Modèle(BDD)</option>
                    </select>
                    <select class="carburant" name="Carburant">
                        <option value="Essence">Essence</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Electrique">Electrique</option>
                        <option value="Hybrid">Hybrid</option>
                        <option value="Autre">Autre</option>
                    </select>
                    <select class="region" name="Region">
                        <option value="Région">--Région--</option>
                        <option value="Diesel">Région(BDD)</option>
                    </select>
                    <input type="button" class="btn btn-success" name="recherche" value="Recherche">
                </form>
                <!-- Fin Filtre -->
            </div>
        </div>
        <!-- Fin Affichage Base De Donnée -->
    </div>
    <!-- Fin Corps de site -->
    <?php include('footer.php'); ?>
</body>
</html>
