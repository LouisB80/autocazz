<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Asap&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/styles.css">
        <?php
        include'header.php';
        include'carousel.php';
        ?>
    <div class="container-fluid">
        <div id="prez">
            <p>
                Bienvenue sur Aut'Occaz, site de vente de voiture en ligne entre particulier mais aussi location de véhicule de particulier à particulier.
            </p>
            <p>
                Aut'Occaz a pour but de révolutionner le monde de l'automobile en proposant de nouveaux services visant l'échange entre particulier (location de véhicule, achat, vente).
            </p>
        </div>
        <!-- Présentation du site -->

        <!-- Fin Présentation du site -->
        <div class="row justify-content-center">
            <!-- Début Annonces publiées recemment -->
            <div class="col-md-5 m-3" id="annonces">
                <article class="forecast text-center">
                    <h2 class="mb-3">Annonces publiées récemment</h2>
                    <article>
                        <h3>Voiture</h3>
                        <p>Descriptions</p>
                    </article>
                    <article>
                        <h3>Voiture</h3>
                        <p>Descriptions</p>
                    </article>
                    <article>
                        <h3>Voiture</h3>
                        <p>Descriptions</p>
                    </article>
                </article>
            </div>
            <!-- Fin Annonces publiées recemment -->
            <!-- Début Dernières actualitées Automobile -->
            <div class="col-md-5 m-3" id="actu">
                <section id="apiAuto">
                    <h2 class="mb-3 text-center">Actualité sur le monde automobile</h2>
                </section>
            </div>
            <!-- Fin Dernières actualitées Automobile -->
        </div>
    </div>
    <?php include('footer.php'); ?>
    <script src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>
    <script src="assets/js/apiActu.js"></script>
    <script src="assets/scraper/index.js"></script>
</body>
</html>
