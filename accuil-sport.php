<?php
//les meta données indépendqntes
    $_title = "Camer info club : l'actualité sportive en cotinue";
    $_description = "Suivez toute l'actualité sportive du monde en directe : league des champions, premier league, europa league, serie A, bundesliga, ligue 1, MTN élite one, MTN élite two...";
?>
<?php
    include('head.php');
?>
        <main class="main">
            <div class="container__breaking__new article__col__2">
                <!--=======================ajouter l'article a la une ici en modifiant le contenu==========-->
                    <article class="brankin__news">
                        <p class="p__title"> <span class="span__title">A la une</span></p>
                        <a href="#">
                                <header>
                                    <h1> Cristiano Ronaldo en route pour le championat saoudien ?</h1>
                                </header>
                                <div>
                                    <img src="images/sport/mercato-cristiano-ronaldo-arabie-saoudite.JPG" alt="">
                                </div>
                                <span class="p__name__folder">Mercato</span>
                                <p>Libre de tout contrat depuis la résiliation de son contrat avec Manchester united, les dirigeants du club saoudien Al-Nassr seraient itéressés par les services du quinduple ballons d'or. </p>                       
                        </a>
                                <hr>
                    </article>
                <!--========================fin article a la une==========================-->
                    <div class="main__art">
                        <!--================ajouter  un nouvel  articles==================-->
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
                                        <img src="images/sport/mercato-cristiano-ronaldo-arabie-saoudite-visite-medicale.JPG" alt="">
                                    </div>
                                    <div class='row__article'>
                                        <span class="p__name__folder">Mercato</span>
                                        <h2 class="sub__title__article">AI-Nassr : la visite médicale de Ronaldo est fixée</h2>
                                    </div>
                                </a>   
                            </article>  
                        </div>
                <!--============================fin========================-->
            </div>
            <hr class="spacing">
            <!--=========================colonne 2============================-->
            <div class="annonce article__col__2">
                    <article class="press__reviews">
                        <?php
                            include('presse.php');
                        ?>
                    </article>
            </div>
            <!--=========================fin===================-->
        </main>
        <?php
            include ('footer.php');
        ?>
        <!-- ===================script====================================== -->
        <script src="app.js"></script> 
    </body>
</html>