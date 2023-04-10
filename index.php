<?php
//les meta données indépendqntes
    $_title = "Camer info club : l'actualité mondiale en directe";
    $_description = "Suivez toute l'actualité du Cameroun, d'Afrique et du monde en directe.";
    $_ogTitle = "Toute l'aculité du monde en directe sur Camer infos club";
    $_ogImg = "images/actualite/img__deputer__gifleur.JPG";
?>
<?php
    include('head.php');
?>

    
        <main class="main">
            <div class="container__breaking__new article__col__2">
                <!--==============================ajouter l'article a la une ici en modifiant le contenu===========================-->
                    <article class="brankin__news">
                        <p class="p__title"> <span class="span__title">A la une</span></p>
                        <a href="#">
                                <header>
                                    <h1>Sénégal  Affaire Amy Ndiaye : deux députés de l'opposition recherchés pour violences</h1>
                                </header>
                                <div>
                                    <img src="images/actualite/img__deputer__gifleur.JPG" alt="">
                                </div>
                                <span class="p__name__folder">Geopolitique</span>
                                <p>La scène, surréaliste, s’est déroulée jeudi 1er décembre en pleine session parlementaire, sous le regard consterné du président de l’Assemblée nationale. Qui a immédiatement saisi le procureur de la République. </p>                       
                        </a>
                                <hr>
                    </article>
                <!--==================================fin article a la une===========================================-->
                    <div class="main__art">
                        <!--===================================ajouter  un nouvel  articles============================-->
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
                                        <h2 class="sub__title__article">Nécrologie : le musicien camerounais EKAMBI Brillant, est décédé ce 12 Décembre 2022.</h2>
                                    </div>
                                </a>   
                            </article>  
                        </div>
                <!--=======================================fin=================================================-->
            </div>
            <hr class="spacing">
            <!--=========================================colonne 2========================================-->

            <div class="annonce article__col__2">
                <div class="article-col-2">
                    <article> 
                        <a href="discours-paul-biya-augmention-prix.php">
                            <div class='row__article article__col-img'>
                                <img src="images/actualite/img__discours__paul__biya__fin__annee__2022.JPG" alt="photo du president paul biya">
                            </div>
                            <div class='row__article article__col-txt'>
                                <span class="p__name__folder">Atualité</span>
                                <h2 class="sub__title__article">Paul Biya annonce l'augmentation des prix des produits pétroliers et du gaz domestique en 2023.</h2>
                            </div>
                        </a>   
                    </article>
                    <article> 
                        <a href="deces-ekambi-brillant.php">
                            <div class='row__article article__col-img'>
                                <img src="images/culture/img__deces__ekambi__brillant.JPG" alt="">
                            </div>
                            <div class='row__article article__col-txt'>
                                <span class="p__name__folder">culture</span>
                                <h2 class="sub__title__article">Nécrologie : le musicien camerounais EKAMBI Brillant, est décédé ce 12 Décembre 2022</h2>
                            </div>
                        </a>   
                    </article>
                </div>
                    <article class="press__reviews">
                        <?php
                            include('presse.php');
                        ?>
                    </article>
                    <div class="article-col-2">
                        <article> 
                            <a href="deces-ekambi-brillant.php">
                                <div class='row__article article__col-img'>
                                    <img src="images/culture/img__deces__ekambi__brillant.JPG" alt="">
                                </div>
                                <div class='row__article article__col-txt'>
                                    <span class="p__name__folder">culture</span>
                                    <h2 class="sub__title__article">Nécrologie : le musicien camerounais EKAMBI Brillant, est décédé ce 12 Décembre 2022.</h2>
                                </div>
                            </a>   
                        </article>
                        <article> 
                            <a href="deces-ekambi-brillant.php">
                                <div class='row__article article__col-img'>
                                    <img src="images/culture/img__deces__ekambi__brillant.JPG" alt="">
                                </div>
                                <div class='row__article article__col-txt'>
                                    <span class="p__name__folder">culture</span>
                                    <h2 class="sub__title__article">Nécrologie : le musicien camerounais EKAMBI Brillant, est décédé ce 12 Décembre 2022.</h2>
                                </div>
                            </a>   
                        </article>
                    </div>
            </div>
            
            <!--======================================fin===========================================-->
        </main>
        <!-- ===============================footer======================================== -->
        <?php
            include ('footer.php');
        ?>
        
    </body>
</html>