<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camer infos club : actualité du monde en directe</title>
    <link rel="shortcut icon" href = '../favicon.ico'>
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="style-connexion-inscription.css">
</head>
<body>
        <header>
                    <div class="header">
                        <div class="btn__humberger">
                            <div class="humberger-1 humberger"></div>
                            <div class="humberger-2 humberger"></div>
                            <div class="humberger-3 humberger"></div> 
                        </div>
                        <div class="logo">
                            <img src="../logo.jpg" alt="logo" class="icon">
                        </div>
                        <div class="title__head">
                            <a href="../index.php"><img src="../logo-name-large.JPG" alt="nom du logo camer infos club"></a>
                            <!-- <a href="index.html"><span class="green">CAMER</span><span class="red">INFOS</span><span class="yellow">CLUB</span></a>  -->
                        </div>
                        <div class="user user__account">
                            <a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <nav class="navbar">
                        <ul>
                            <li class="boder__top"><a href="../index.php">ACTUALITéS</a></li>
                            <li class="boder__lef"><a href="../accuil-sport.php">SPORTS</a></li>
                            <li class="boder__left"><a href="../accuei-politique.php">GEOPOLITIQUE</a></li>
                            <li class="boder__left"><a href="#">CULTURE</a></li>
                            <li class="boder__left"><a href="#">SANTE</a></li>
                            <li class="boder__left"><a href="#">FINANCE</a></li>
                            <li class="boder__left"><a href="#">JOBS OFFER</a></li>
                        </ul>   
                    </nav>
                    <br>
                    <div class="header__flash">
                        <span class="header__title__flash breaking__flash activate">En ce moment</span>
                        <div class="flash breaking__flash">
                            <div class="flash__new actif"><a href="#">Necrologie : le musicien camerounais Ekambi brillant est décédé</a></div>
                            <div class="flash__new"><a href="#">Nécrologie : le mokossa de nouveau endeuillé, après EKAMBI Brillant, Djene Djento vient de casser son micro</a></div>
                            <div class="flash__new"><a href="#">Camer info club : le musicien camerounais Nkotti Francois est décédé</a></div>
                        </div>
                        <div class="btn__flash breaking__flash">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </div>
                        <span><a href="#" class="flash__more">Voir plus</a></span>
                    </div>
        </header>
    <div class="nav-connexion-inscription">
            <a href="connexion.php" class="nav-connexion active">Se connecter</a>
            <a href="inscription.php" class="nav-connexion">S'abonner</a>
    </div>
    <hr class="hr-connexion-inscription">
    <div class="main-form">
        <div class="login-form">
            <form action="#" method="POST">
                <div class="group-email">
                    <label for="email">Email ID *</label> <br>
                    <input type="email" placeholder="Entrez votre e-mail" name="email" id="email" required>
                </div>
                <div class="group-passWord">
                    <label for="passWord">Mot de passe *</label><br>
                    <input type="password" placeholder="Votre mot de passe" name="passWord" id="passWord" required>
                </div>
                <label class="indicateur">(*) Champs obligatoires</label>
                <p><a href="#">mot de passe oublié ?</a></p>
                <button type="submit" class="btn-connextion">connexion</button> <br> <br>
                <p>vous n'avez pas de compte ? <a href="inscription.php" class="a-btn-inscription">Créer mon compte</a></p>
            </form>
        </div>

    </div>

        <!-- ================================footer============================== -->
        <footer class="footer">
            <div class="title__footer"><a href="../index.php"><img src="../logo-footer.JPG" alt="nom du logo camer infos club"></a></div>
            <hr class="spacing__footer">
            <div class="footer__bottom">
                <div class="reseaux-sociaux">
                    <span>Suivez nous</span>
                    <div class="icons-reseau-sociaux">
                        <span class="icon-whatsapp contact">
                            <a href="https://api.whatsapp.com/send?phone=237694079949">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a>
                        </span>
                        <span class="icon-facbook contact">
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </span>
                        <span class="icon-twitter contact">
                            <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </span>
                    </div>
                </div>
                <span class="authorNameDesign">designed by <em>Carem KAMLOUCK</em></span>
                <span class="footer-bottom__copyright">© camer infos club&nbsp;2022 - 2023</span>
            </div>
        </footer>
<!-- ===================script====================================== -->
<script type="text/javascript"  src="script-connexion-inscription.js"></script>
</body>
</html>