<link rel="stylesheet" href="assets/css/header.css">
<link rel="stylesheet" href="assets/css/footer.css">
<title>Bienvenue chez Aut'Occaz</title>
</head>
<body>
    <!-- Début Modal inscription-->
    <div class="modal fade" id="connection" tabindex="-1" role="dialog" aria-labelledby="connection" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="login-wrap">
                        <div class="login-html">
                            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Se connecter</label>
                            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">S'inscrire</label>
                            <div class="login-form">
                                <div class="sign-in-htm">
                                    <div class="group">
                                        <label for="userConnection" class="label">Nom de compte</label>
                                        <input id="userConnection" type="text" class="input">
                                    </div>
                                    <div class="group">
                                        <label for="passConnection" class="label">Mot de passe</label>
                                        <input id="passConnection" type="password" class="input" data-type="password">
                                    </div>
                                    <div class="group">
                                        <input id="check" type="checkbox" class="check" checked>
                                        <label for="check"><span class="icon"></span> Rester connécté</label>
                                    </div>
                                    <div class="group">
                                        <input type="submit" class="button" value="Valider">
                                    </div>
                                    <div class="hr"></div>
                                    <div class="foot-lnk">
                                        <a href="#forgot">Mot de passe oublié?</a>
                                    </div>
                                </div>
                                <div class="sign-up-htm">
                                    <div class="group">
                                        <label for="userInscription" class="label">Nom de compte</label>
                                        <input id="userInscription" type="text" class="input">
                                    </div>
                                    <div class="group">
                                        <label for="passInscription" class="label">Mot de passe</label>
                                        <input id="passInscription" type="password" class="input" data-type="password">
                                    </div>
                                    <div class="group">
                                        <label for="passValidation" class="label">Répeter le mot de passe</label>
                                        <input id="passValidation" type="password" class="input" data-type="password">
                                    </div>
                                    <div class="group">
                                        <label for="mailInscription" class="label">Adresse mail</label>
                                        <input id="mailInscription" type="text" class="input">
                                    </div>
                                    <div class="group">
                                        <input type="submit" class="button" value="Valider">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la Modal inscription-->
    <!-- Debut Navbar -->
    <div class="container-fluid text-center sticky-top">
        <div class="row justify-content-center">
            <div class="col-md-12" id="nav">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <!-- Redirection Accueil -->
                    <h1 id="navText"><a href="index.php">Aut'Occaz</a></h1>
                    <div id="navbar family-nav" >
                        <!-- Liens -->
                        <a class="navbar-brand ml-4" href="location.php">Louer un Véhicule</a></li>
                        <a class="navbar-brand ml-4" href="achat.php">Acheter un véhicule</a></li>
                        <a class="navbar-brand ml-4" href="vente.php">Vendre un véhicule</a></li>
                    </div><!--/.nav-collapse -->
                    <!-- Button connexion modal -->
                    <button type="button" class="btn btn-light ml-5" data-toggle="modal" data-target="#connection"><img id="loginIcon" src="assets/img/login.png" alt="Clé"></button>
                </nav>
            </div>
        </div>
    </div>
    <!-- Fin de Navbar -->