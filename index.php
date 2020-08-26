<?php 

function dateToFrench($date, $format)
{
    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $french_days = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
    return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date))));
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>E-media</title>
    <link rel="icon" type="icon" href="img/logo E-media copie.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.8.2-web/css/all.min.css">
    <!--<link rel="stylesheet" href="css/aos.css">-->
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
</head>

<body>

    <!--https://www.youtube.com/watch?v=MubsuxA72yU-->
    <section>
        <div class="container-fluid mt-5 mb-lg-5">
            <div class="row banner ml-2 ml-sm-2 ml-md-5 ml-lg-5 mt-5 mb-lg-5">
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7 marge mb-lg-5 mt-lg-5">
                   <div class="row">
                        <h1 class="col-12 animated bounceInRight" style="animation-delay: 1s">Université <span class="banner-media"> E-media</span></h1>
                        <h4 class="animated animated bounceInLeft" style="animation-delay: 2s">Visons haut et loin</h4>
                        <p class="col-10 col-sm-10 col-md-10 col-lg-12 col-xl-10 banner-text ml-1 animated bounceInDown" style="animation-delay: 3s;">Notre vision c’est de bâtir l’Afrique de demain, donner à tout et en chacun une formation Universitaire de haut niveau mais à moindre cout, et avec plusieurs spécialisations au choix.</p>
                        <div class="col-12 mt-4 d-sm-block d-md-flex d-lg-flex">
                            <button type="button" class="btn mt-2 btn-info animated zoomInLeft" style="animation-delay: 3s;">Contact</button>
                            <button type="button" class="btn mt-2 ml-lg-3 btn-outline-info animated zoomInRight" style="animation-delay: 3s;">Se connecter</button>
                        </div>
                        <div class="col-5 col-sm-3 col-md-3 col-lg-3 social ml-3 mt-4 mb-sm-5 p-2 text-center animated zoomIn" style="animation-delay: 4s;">
                            <a href=""><i class="fab fa-facebook-square"></i></a>
                            <a href="" class="ml-2"><i class="fab fa-linkedin"></i></a>
                            <a href="" class="ml-2"><i class="fab fa-twitter-square"></i></a>    
                        </div>           
                   </div>
                </div>
                
                <div class="col-5 test animated zoomIn" style="animation-delay: 2s;">
                    
                </div>
            </div>
        </div>
    </section>

    <div id="header" class="main-menu">
        <nav class="navbar navbar-expand-lg">
            <div class="ml-5">
                <img id="LogoMenu" src="img/accueil/logo E-media.png" alt="logo">
            </div>
            <button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <img src="img/accueil/menu.png" alt="">
            </button>
            <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mr-2"><a class="nav-link" href="#accueil">Accueil<span class="bottom-solid"></span></a></li>
                    <li class="nav-item mr-2"><a class="nav-link" href="#actualite">Actualité<span class="bottom-solid"></span></a></li>
                    <li class="nav-item mr-2"><a class="nav-link" href="#formation">Formation<span class="bottom-solid"></span></a></li>
                    <li class="nav-item mr-2"><a class="nav-link" href="#objectif">Objectif<span class="bottom-solid"></span></a></li>
                    <li class="nav-item mr-2"><a class="nav-link" href="#contact">Contact<span class="bottom-solid"></span></a></li>
                    <li class="nav-item ml-2 nav-seconnecter" data-tooltip="Se connecter"><a class="nav-link" href="#lien"><i class="fa fa-user"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container-fluid contenu">

        <!--apropos-->
        <div class="row apropos mt-3 ml-2 ml-lg-5" id="accueil">
            <div class="col-4 apropos-left mt-5 aos-init aos-animate code code--small code--up" data-aos="fade-up" data-aos-duration="2000">
                <img src="img/accueil/apropos2.jpg" alt="" class="img-fluid mt-5">
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-8  apropos-right">
                <h1 class="ml-5 mt-5 aos-init aos-animate code code--small code--left" data-aos="zoom-out" data-aos-duration="2000">A propos de l'<span class="banner-media">E-media</span></h1>
                <div class="row">
                    <div class="cree col-10 col-sm-10 col-md-6 col-lg-6 mt-5 aos-init aos-animate code code--small code--left" data-aos="zoom-in" data-aos-duration="2000">
                        <span>Crée en 2011, E-MEDIA est actuellement un établissement de référence et un acteur incontournable dans le domaine de la formation à Madagascar et notamment en Afrique francophone.
                         Il s’oriente dans plusieurs domaines et spécialisations</span>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-5 aos-init aos-animate code code--small code--left" data-aos="fade-up-left" data-aos-duration="2000">
                        <img src="img/accueil/apropos1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 ml-md-5 ml-lg-5 aos-init aos-animate code code--small code--right" data-aos="fade-up-right" data-aos-duration="2000">
                        <img src="img/accueil/apropos1.jpg" alt="" class="img-fluid oui ml-md-5 ml-lg-5">
                    </div>
                </div>
            </div>
        </div>

        <!--actulites-->
        <div class="row actualites mt-5" id="actualite">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                <div class="row card-deck">
                    <div class="col-12 actualites ml-5 mt-5">
                        <h1 class="mt-4"><span class="banner-media">Nos</span> actualités</h1>
                    </div>
                    <div class="card col-12 col-sm-12 col-md-6 col-lg-6 mt-5">
                        <img class="card-img-top" src="img/accueil/emedia pour site 2.jpg" class="img-fluid" alt="universite">
                        <div class="card-body">
                            <h5 class="card-title">Formation Universitaire en ligne</h5>
                            <small class="card-text">La formation en ligne de l'Université E-media est maintenant ouverte pour tous les pays d’Afrique francophones.</small>
                        </div>
                    </div>
                    <div class="card col-12 col-sm-12 col-md-6 col-lg-6 mt-5">
                        <img class="card-img-top" src="img/accueil/alefa sita-01.jpg" class="img-fluid" alt="universite">
                        <div class="card-body">
                            <h5 class="card-title">Formation baccalauréat en ligne</h5>
                            <small class="card-text">La formation en ligne de Baccalauréat de l'E-media est bientôt disponible pour tous les Malagasy.</small>
                        </div>
                    </div>
                </div>
            </div>

            <!--google news-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 google-news mt-5">
                <div class="row mt-5">
                    <ul class="nav nav-pills col-12 nav-justified mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active news " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Technologie</a>
                            <span class="bottom-solid"></span>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link news" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Santé</a>
                            <span class="bottom-solid"></span>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link news" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Economie</a>
                            <span class="bottom-solid"></span>
                        </li>
                    </ul>
                    
                    <div class="tab-content tab-actualite col-12 overflow-auto" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <?php
                                date_default_timezone_set('UTC');
                                $date = date('d-m-y');
                                $url = 'http://newsapi.org/v2/everything?q=technologie&from=".$date."&language=fr&sortBy=publishedAt&apiKey=a8ef73a0f34641f18ac14d7ff914fad6 ';
                                $response = file_get_contents($url);
                                $NewsData = json_decode($response); 
                        
                                foreach($NewsData->articles as $News)
                                {          
                            ?>
                                <div class="row mt-3 google-body">
                                    <div class="col-4 image">
                                        <img src="<?php echo $News->urlToImage ?>" class="img-fluid" alt="aucune img">
                                    </div>

                                    <div class="col-8 information">
                                        <h6><?php echo $News->title; ?></h6>
                                        <div class="top-solid mb-1"></div>
                                        <small class="p-1" align="center"><?php echo dateToFrench($News->publishedAt,"l j F Y à H:i") ?></small>
                                        <a href="<?php echo $News->url ?>" class="btn m-2" target="_blank">Voir plus</a>
                                    </div>
                                </div>
                            <?php 
                                }
                            ?>
                
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <?php
                            date_default_timezone_set('UTC');
                            $date = date('d-m-y');
                            $url = 'http://newsapi.org/v2/everything?q=santé&from=".$date."&language=fr&sortBy=publishedAt&apiKey=a8ef73a0f34641f18ac14d7ff914fad6 ';
                            $response = file_get_contents($url);
                            $NewsData = json_decode($response); 
                        
                            foreach($NewsData->articles as $News)
                                {          
                            ?>
                                <div class="row mt-3 google-body">
                                    <div class="col-4 image">
                                        <img src="<?php echo $News->urlToImage ?>" class="img-fluid" alt="aucune img">
                                    </div>

                                    <div class="col-8 information">
                                        <h6><?php echo $News->title; ?></h6>
                                        <div class="top-solid mb-1"></div>
                                        <small class="p-1"><?php echo dateToFrench($News->publishedAt,"l j F Y à H:i") ?></small>
                                        <a href="<?php echo $News->url ?>" class="btn m-2" target="_blank">Voir plus</a>
                                    </div>
                                </div>
                            <?php 
                                }
                            ?>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <?php
                            date_default_timezone_set('UTC');
                            $date = date('d-m-y');
                            $url = 'http://newsapi.org/v2/everything?q=economie&from=".$date."&language=fr&sortBy=publishedAt&apiKey=a8ef73a0f34641f18ac14d7ff914fad6 ';
                            $response = file_get_contents($url);
                            $NewsData = json_decode($response); 
                        
                            foreach($NewsData->articles as $News)
                                {          
                            ?>
                                <div class="row mt-3 google-body">
                                    <div class="col-4 image">
                                        <img src="<?php echo $News->urlToImage ?>" class="img-fluid" alt="aucune img">
                                    </div>

                                    <div class="col-8 information">
                                        <h6><?php echo $News->title; ?></h6>
                                        <div class="top-solid mb-1"></div>
                                        <small class="p-1"><?php echo dateToFrench($News->publishedAt,"l j F Y à H:i") ?></small>
                                        <a href="<?php echo $News->url ?>" class="btn m-2" target="_blank">Voir plus</a>
                                    </div>
                                </div>
                            <?php 
                                }
                            ?>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>

        <!--Nos formations-->
        <div class="formation mt-5" id="formation">
            <h1 class="ml-5"><span class="banner-media">Nos</span> formation</h1>
            <div class="">
                <img class="choisir img-fluid" src="img/accueil/71382219_1113234622208342_1065529829350178816_o.jpg" alt="">
            </div>
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12 col-sm-6 col-md-4 col-lg-4" align="center">
                        <div class=" pres col-10 col-sm-10 col-md-10 col-lg-10">
                            <div class="icon-formation">
                                <i class="mt-5 fas fa-user-graduate"></i>
                            </div>
                            <div class="mt-5">
                                <h3 class="card-titre">Université Présentielle</h3>
                                <div class="mt-3 savoir-plus">
                                    <a class="" href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-4" align="center">
                        <div class="ligne col-10 col-sm-10 col-md-10 col-lg-10">
                            <div class="icon-formation">
                                <i class="mt-5 fab fa-audible"></i>
                            </div>
                            <div class="mt-5">
                                <h3 class="card-titre">Université en ligne</h3>
                                <div class="mt-3 savoir-plus">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-4" align="center">
                        <div class="cfp col-10 col-sm-10 col-md-10 col-lg-10">
                            <div class="icon-formation">
                                <i class="mt-5 fas fa-graduation-cap"></i>
                            </div>
                            <div class="mt-5">
                                <h3 class="card-titre">Formation professionnelle</h3>
                                <div class="mt-3 savoir-plus">
                                    <a href="#">En savoir plus</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--media-->
        <div class="row media mt-5">
            <div class="col-4 aos-init aos-animate code code--small code--left" data-aos="fade-up-left" data-aos-duration="2000">
                <h1>Vidéo Formation de l'<span class="banner-media">E-media</span></h1>
            </div>
            <div class="col-4 aos-init aos-animate code code--small code--left" data-aos="fade-up-right" data-aos-duration="2000">
                <iframe width="100%" class="iframe-media float-right" src="https://www.youtube.com/embed/NslPwvRvMYg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-4 aos-init aos-animate code code--small code--right" data-aos="fade-up-left" data-aos-duration="2000">
                <iframe width="90%" class="iframe-media2" src="https://www.youtube.com/embed/uZO3QTWmNfQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="90%" class="iframe-media3" src="https://www.youtube.com/embed/jcY50CWcbTE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <!--Nos objectifs-->
        <div class="objectifs container-fluid mt-5" id="objectif">
            <h1 align="center"><span class="banner-media">Nos</span> objectifs</h1>

            <div class="row mt-3">
                <div class="col-6 mt-5 img-objectif">
                    <img src="img/objectif/1.jpg" class="img-fluid col-10" alt="">
                </div>

                <div class="col-6 mt-5 objectif-text">
                    <div class="col-12">
                        <h2 class="mt-4">Ouverture de l’établissement sur le plan international</h2>
                        <p class="text-justify mt-3">Le but de l’ouverture à l’international est d’aligner les formations dispensées au sein de l’établissement avec ceux des grands établissements reconnus mondialement</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-6 mt-5 objectif-text">
                    <div class="col-12">
                        <h2 class="mt-4">La construction d’un nouveau bâtiment</h2>
                        <p class="text-justify mt-3">La construction d’un bâtiment a pour finalité d’offrir environnement propice à l’épanouissement des étudiants. Doté de toutes les commodités nécessaires pour un apprentissage enrichissant et digne.</p>
                    </div>
                </div>
                <div class="col-6 mt-5 img-objectif">
                    <img src="img/objectif/2.jpg" class="img-fluid float-right col-11" alt="">
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-6 mt-5 img-objectif">
                    <img src="img/objectif/3.jpg" class="img-fluid col-11" alt="">
                </div>
                <div class="col-6 mt-5 objectif-text">
                    <div class="col-12">
                        <h2 class="mt-4">Mise à la disposition des étudiants des équipements à la pointe de la technologie</h2>
                        <p class="text-justify mt-3">L’établissement met un point d’honneur à se doter des matériels et équipements nécessaires pour parfaire la formation qu’elle dispense.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-6 mt-5 objectif-text">
                    <div class="col-12">
                        <h2 class="mt-4">L’acquisition de la norme ISO 9001-2015</h2>
                        <p class="text-justify mt-3">La norme ISO 9001-2015, en rapport avec le management qualité a pour but d’assurer la satisfaction des clients , notamment les étudiants, et ainsi de devenir la première institution sur la Grande Ile à jouir de la norme ISO.</p>
                    </div>
                </div>
                <div class="col-6 mt-5 img-objectif">
                    <img src="img/objectif/iso.jpg" class="img-fluid float-right col-11" alt="">
                </div>
            </div>

        </div>

        <!-- contact -->
        <div class="contact mt-5" id="contact">
            <h1 align="center"><span class="banner-media mt-5">Nos </span>Contact</h1>
            <div class="row d-flex justify-content-center">
            
                <div class="col-4 row contact-container mt-3 mb-5">
                    <div class="col-3 m-3">
                        <i class="icon-contact p-4 fas fa-map"></i>
                    </div>

                    <div class="col-7">
                        <h3>Adresse</h3>
                    </div>

                    <div class="col-12 ml-2">
                        <p>Lot II Y 33 Bis P Ampasanimalo Tsiadana-route de l'université-Immeuble bleu</p>
                    </div>
                </div>

                <div class="col-4 row contact-container mt-3 mb-5">
                    <div class="col-3 m-3">
                        <i class="icon-contact p-4 fas fa-envelope"></i>
                    </div>

                    <div class="col-7">
                        <h3>Email</h3>
                    </div>

                    <div class="col-12 ml-2">
                        <p>emedia.cfp.emedia@gmail.com<br>scolarite.universite.emedia@gmail.com</p>
                    </div>
                </div>

                <div class="col-4 row contact-container mt-3 mb-5">
                    <div class="col-3 m-3">
                        <i class="icon-contact p-4 fas fa-business-time"></i>
                    </div>

                    <div class="col-7">
                        <h3>Ouverture</h3>
                    </div>

                    <div class="col-12 ml-2">
                        <p>Lundi au Vendredi: 7h à 17h , 
                        Samedi: 8h à 12h
                        <br>et Dimanche: Fermé</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <footer>
            <div class="col-12 text-center p-2">
                © Copyright E-MEDIA 2020
            </div>
    </fooer>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>

    <script>/*navbar stop*/
        window.onscroll = function() {myFunction()};
        
        var header = document.getElementById("header");
        var sticky = header.offsetTop;
        
        function myFunction() {
          if (window.pageYOffset >= sticky) {
            header.classList.add("sticky")
          } else {
            header.classList.remove("sticky");
          }
        }
    </script>

    <script>/*animation on scroll*/
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });
    </script>
</body>

</html>