<?php
include('config/app.php');
include('codes/authentication_code.php');
include('includes/header.php');
include('includes/chatbox.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'Safar - Accueil</title>
</head>

<!--  Fonts  -->

<!-- Mulish font -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">

<!-- Monserrat font -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Bonheur Royale font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&display=swap" rel="stylesheet">

<!-- Files CSS -->

<link rel="stylesheet" href="public/css/index.css">

<!-- Global CSS -->

<link rel="stylesheet" href="./public/css/style-general.css">

<!--  Script iconify -->

<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>





<body>



    <!-- start landing page -->



    <?php
    include('includes/navbar.php');

    ?>

    <!-- end landing page -->








    <div class="gap-header"></div>
    <div class="gap-header"></div>



    <?php


    ?>

    </div>
    <div id="slider">
        <div class="container-explore-your-desires">
            <div class="block-explore-your-desirese">
                <div class="block-text-explore-your-desires">
                    <p class="text-center-justify">O’safar vous propose les meilleurs tarifs sur les vols et les hôtels,</br>
                        week-ends et séjours sur mesure.</br>
                        Comparez les prix et réservez votre voyage pas cher dès maintenant.</p>
                </div>
                <div>
                    <h4 class="tagline">Comparer & Voyager</h4>
                </div>
                <div><input type="button" value="Explorer Vos Envies"></input></div>
            </div>
            <div id="slideshow">

            </div>

        </div>


    </div>
    <!--
    <div id="slider">
        <div class="container-explore-your-desires">
            <div class="block-explore-your-desirese">
                <div class="block-text-explore-your-desires">
                    <p class="text-center-justify">O’safar vous propose les meilleurs tarifs sur les vols et les hôtels,</br>
                        week-ends et séjours sur mesure.</br>
                        Comparez les prix et réservez votre voyage pas cher dès maintenant.</p>
                </div>
                <div>
                    <h4 class="tagline">Comparer & Voyager</h4>
                </div>
                <div><input type="button" value="Explorer Vos Envies"></input></div>
            </div>
            <img src="public/imgs/01.jpg" alt="La forêt de peupliers" id="slide">
        </div>
        <div>
            <div id="precedente" onclick="ChangeSlide(-1)">
                < </div>
                    <div id="suivante" onclick="ChangeSlide(1)">
                        >
                    </div>
            </div>
        </div>
    </div>
-->
    <!--  start Meilleur offre -->

    <div class="offre" id="offre">
        <div class="heading">
            <h2> Meilleurs offres</h2>
            <p class="text-center-justify white-text">Envie de créer un voyage sur mesure ?<br>
                Nous vous proposent les meilleures offres de voyages</p>
        </div>
    </div>

    <!-- container start -->


    <div class="container-pack">


        <div class="card-style" id="card0">
            <a href="./hotel.php?namehostel=The_Weinberg_Windhoek&price=194">
                <div class="imagecard">
                    <img class="img-back" id="img-card0" src="./images/The_Weinberg_Windhoek/image4.webp"></img>
                </div>

                <div id="text" class="container-text-card">

                    <div class="text-card">
                        <p class="text-card">Namibie</p>
                    </div>
                    <div class="text-card">
                        <p class="text-card">The Weinberg Windhoek</p>
                    </div>
                    <div class="text-card">
                        <p class="text-card">194 €</p>
                    </div>

                </div>
            </a>
        </div>
        c

        <div class="card-style" id="card1">
            <a href="./hotel.php">
                <div class="imagecard">
                    <img class="img-back" id="img-card1" src="./images/The_Belgium_Inn/image1.webp"></img>
                </div>

                <div id="text" class="container-text-card">

                    <div class="text-card">
                        <p class="text-card">Afrique du Sud</p>
                    </div>
                    <div class="text-card">
                        <p class="text-card">The Belgium Inn</p>
                    </div>
                    <div class="text-card">
                        <p class="text-card">106 €</p>
                    </div>
                </div>
            </a>
        </div>



        <div class="card-style" id="card2">
            <a href="./hotel.php">

                <div class="imagecard">
                    <img class="img-back" id="img-card2" src="./public/imgs/Background/CardsImgs/Img2.png"></img>
                </div>

                <div id="text" class="container-text-card">

                    <div class="text-card">
                        <p class="text-card">Maroc</p>
                    </div>
                    <div class="text-card">
                        <p class="text-card">Hôtel Framzissima Marrakech</p>
                    </div>
                    <div class="text-card">
                        <p class="text-card">600 €</p>
                    </div>
                </div>
            </a>
        </div>






    </div>



    <!-- container end -->

    <!--  end Meilleur offre -->

    <!--  start Nos packages-->


    <div class="package" id="package">
        <div class="heading">
            <h2>Nos packages</h2>
            <p class="text-center-justify white-text">Envie de créer un voyage sur mesure ?<br>
                Nous vous proposent les meilleures offres de voyages</p>
        </div>






        <!-- First Row Hotel start -->

        <div class="container-pack">


            <div class="card-style" id="card3">
                <a href="./hotel.php">

                    <div class="imagecard">
                        <img class="img-back" id="img-card3" src="./public/imgs/Background/CardsImgs/Img3.png"></img>
                    </div>

                    <div id="text" class="container-text-card">

                        <div class="text-card">
                            <p class="text-card">Maroc</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">Hôtel Framzissima Marrakech</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">600 €</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="card-style" id="card4">
                <a href="./hotel.php">

                    <div class="imagecard">
                        <img class="img-back" id="img-card4" src="./public/imgs/Background/CardsImgs/Img4.png"></img>
                    </div>

                    <div id="text" class="container-text-card">

                        <div class="text-card">
                            <p class="text-card">Maroc</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">Hôtel Framzissima Marrakech</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">600 €</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="card-style" id="card4">
                <a href="./hotel.php">

                    <div class="imagecard">
                        <img class="img-back" id="img-card5" src="./public/imgs/Background/CardsImgs/Img5.png"></img>
                    </div>

                    <div id="text" class="container-text-card">

                        <div class="text-card">
                            <p class="text-card">Maroc</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">Hôtel Framzissima Marrakech</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">600 €</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>



        <!-- first Row Hotel end -->

        <!-- Second Row Hotel start -->



        <div class="container-pack">


            <div class="card-style" id="card3">
                <a href="./hotel.php">

                    <div class="imagecard">
                        <img class="img-back" id="img-card6" src="./public/imgs/Background/CardsImgs/Img6.png"></img>
                    </div>

                    <div id="text" class="container-text-card">

                        <div class="text-card">
                            <p class="text-card">Maroc</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">Hôtel Framzissima Marrakech</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">600 €</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="card-style" id="card4">
                <a href="./hotel.php">

                    <div class="imagecard">
                        <img class="img-back" id="img-card7" src="./public/imgs/Background/CardsImgs/Img7.png"></img>
                    </div>

                    <div id="text" class="container-text-card">

                        <div class="text-card">
                            <p class="text-card">Maroc</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">Hôtel Framzissima Marrakech</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">600 €</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="card-style" id="card4">
                <a href="./hotel.php">

                    <div class="imagecard">
                        <img class="img-back" id="img-card8" src="./public/imgs/Background/CardsImgs/Img8.png"></img>
                    </div>

                    <div id="text" class="container-text-card">

                        <div class="text-card">
                            <p class="text-card">Maroc</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">Hôtel Framzissima Marrakech</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">600 €</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>


        <!-- Second Row Hotel end -->

        <!-- Third Row Hotel start -->

        <div class="container-pack">


            <div class="card-style" id="card3">
                <a href="./hotel.php">

                    <div class="imagecard">
                        <img class="img-back" id="img-card9" src="./public/imgs/Background/CardsImgs/Img9.png"></img>
                    </div>

                    <div id="text" class="container-text-card">

                        <div class="text-card">
                            <p class="text-card">Maroc</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">Hôtel Framzissima Marrakech</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">600 €</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="card-style" id="card4">
                <a href="./hotel.php">

                    <div class="imagecard">
                        <img class="img-back" id="img-card10" src="./public/imgs/Background/CardsImgs/Img10.png"></img>
                    </div>

                    <div id="text" class="container-text-card">

                        <div class="text-card">
                            <p class="text-card">Maroc</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">Hôtel Framzissima Marrakech</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">600 €</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="card-style" id="card4">
                <a href="./hotel.php">

                    <div class="imagecard">
                        <img class="img-back" id="img-card11" src="./public/imgs/Background/CardsImgs/Img2.png"></img>
                    </div>

                    <div id="text" class="container-text-card">

                        <div class="text-card">
                            <p class="text-card">Maroc</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">Hôtel Framzissima Marrakech</p>
                        </div>
                        <div class="text-card">
                            <p class="text-card">600 €</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <!-- Third Row Hotel end -->



        <!--  end Nos packages -->

        <?php
        include('includes/footer.php');
        ?>

        <!--  Script Card -->
        <script src="public/card.js"></script>
        <script src="public/js/SliderHeadIndex.js"></script>


</body>

</html>