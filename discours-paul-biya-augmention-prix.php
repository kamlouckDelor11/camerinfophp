<?php
//les meta données indépendqntes
    $_title = "Discour de fin d'année : Paul Biya annonce l'augmentation des prix des produits pétroliers et du gaz domestique en 2023.";
    $_description = "Le président Paul Biya annonce la hausse du prix des produits pétroliers.";
?>
<?php
    include('head.php');
?>
        
    <div class="headline">
        <hr class="hr__headline hr__headline__top">
        <span class="name__folder__healine">POLITIQUE</span>
        <h1 class="headline__title">Paul Biya annonce l'augmentation des prix des produits pétroliers et du gaz domestique en 2023.</h1>
        <p>Une hausse des prix des produits pétroliers et du gaz domestique est envisgeable au Cameroun au cours de l'exercice pubgétaire 2023.</p>
        <p><time class="headline__date" datetime="2023-01-01T10:07:25+00:00">01 janvier 2023 à 11:07</time> | <span class="headline__author-name">par Carem KAMLOUCK</span></p>
        <hr class="hr__headline">
    </div>
    <main class="main__home-page">
        <div class="container__breaking__new article__col__2">
            <!--====================================ajouter le contenu de l'articie ici=============================-->
            <article class="home__article">
                <div class="image__home-page">
                    <img src="images/actualite/img__discours__paul__biya__fin__annee__2022.JPG" alt="photo du president paul biy" class="img__home-page">
                    <p class="overlay__img__home-page">Le président de la République Paul Biya</p>
                </div>
                <div class="contain__home-page">
                    <p>Le président de la républque Paul Biya lors de son traditionnel discous de fin d'année a annoncé implicitement une augmentation future des prix des produits pétroliers et du gaz domestique.</p>
                    <p>Il a d'abord souligné les efforts conssentis par le gouvernement pour la stabilisation des dits prix au cours de l'exercice budgétaire 2022 grace aux subventions de l'Etat. Soit 700 milliards de francs CFA pour le carburant et 75 milliards de francs CFA pour le gaz domestique.</p>
                    <p>Le président de la République a poursuivi son discours en précisant qu'il est évident que le Cameroun, comme bien d'autres pays n'échappera pas indéfiniment à un ajustement des prix des produits pétroliers.</p>
                    <P>Selon le président Paul Biya, cet ajustement est nécessaire pour la poursuite des équilibres budgétaires et de la mise en oeuvre de la politique de développement.</P>
                    <p>Cette annonce vient confirmer les inquiétudes du Fonds Monétaire International qui en mi 2022 doutait déjà de la capacité du Cameroun à continuer à subventionner les produits pétroliers au regard de la conjoncture actuelle.</p>
                    <p>L'institution financière internationale avait donc suggérée au gouvernement camerounais de supprimer les subventions des produits pétroliers.</p>
                    <p class="catch"><span class="catch__title" style="font-weight: bold; color: #000;">Source :</span> <span class="catch__desc"><a href="../../index.html" style="color:#0070b2; border-bottom:solid .1rem #0070b2 ">Camer info club</a></span></p>
                
                </div>
            </article>
            <hr>
            <!--======================================fin contenu de l'articie ici=========================-->
            <div class="main__art">
                <!--================================ajouter  un nouvel  articles=============================-->
                        <article> 
                            <a href="#">
                                <div class='row__article article__col-img'>
                                    <img src="images/sport/img-maroc-portugal-mondiale-2022.JPG" alt="">
                                </div>
                                <div class='row__article'>
                                    <span class="p__name__folder">Sport</span>
                                    <h2 class="sub__title__article">Qatar 2022 : le Maroc, première équipe africaine en demi-finale de Coupe du Monde</h2>
                                </div>
                            </a>                       
                        </article>

                        <article> 
                            <a href="deces-ekambi-brillant.php">
                                <div class='row__article article__col-img'>
                                    <img src="images/culture/img__deces__ekambi__brillant.JPG" alt="">
                                </div>
                                <div class='row__article'>
                                    <span class="p__name__folder">culture</span>
                                    <h2 class="sub__title__article">Nécrologie : le musicien camerounais EKAMBI Brillant, est décédé</h2>
                                </div>
                            </a> 
                        </article>  
                    </div>
            <!--========================fin=======================-->
        </div>
        <hr class="spacing">
        <!--=====================colonne 2 : annonces============-->
        <div class="annonce article__col__2">
                <article class="press__reviews">
                    <?php
                        include('presse.php');
                    ?>
                </article>
        </div>
        <!--=================fin========================-->
    </main>
    <!-- ===============================footer======================================== -->
        <?php
            include ('footer.php');
        ?>
</body>
</html>