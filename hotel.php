<?php
include('config/app.php');
include('codes/authentication_code.php');
include('includes/header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'Safar</title>


</head>



<!-- Files CSS -->



<link rel="stylesheet" href="public/css/hotel.css">

<!-- Global CSS -->

<link rel="stylesheet" href="./public/css/styleGeoffrey.css">

<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

<body>

    <!-- /* navbar start */ -->


    <?php
    include('includes/navbar.php');
    ?>
    <div class="gap-header"></div>

    <!-- /* navbar end */ -->

    <div class="container-hotel">

        <div class="block-left">

            <div id="bloc-featured">
                <img id="featured" src="public/imgs/offre/suite.jpeg">
            </div>



            <div id="slide-wrapper">

                <div>
                    <iconify-icon id="slideLeft" class="arrow" icon="material-symbols:arrow-circle-left-rounded" width="25"></iconify-icon>
                </div>

                <div id="slider-container">

                    <img class="slider active" onmouseover="changementauclick()" src="public/imgs/offre/suite.jpeg">
                    <img class="slider " onmouseover="changementauclick()" src="public/imgs/offre/chdouble.jpeg">
                    <img class="slider " onmouseover="changementauclick()" src="public/imgs/offre/chambre.jpeg">
                    <img class="slider" onmouseover="changementauclick()" src="public/imgs/offre/salledebain.jpeg">
                    <img class="slider " onmouseover="changementauclick()" src="public/imgs/offre/maroco.jpeg">
                </div>

                <iconify-icon id="slideRight" class="arrow" icon="material-symbols:arrow-circle-right" width="25"></iconify-icon>

            </div>


        </div>

        <div class="block-right">

            <div class="text-block">
                <p>Nom Hotel</p>
            </div>
            <div class="text-block">
                <p>A partir de </p>
            </div>
            <p class="text-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat tempor ipsum. Phasellus id cursus urna. Mauris id dignissim ligula. Morbi posuere rutrum lacus, varius euismod erat placerat vitae. Nunc sit amet nisl sed massa mollis consectetur. Nullam id dui.</p>

            <button class="button-outline">Réserver</button>

        </div>

    </div>






    <script src="public/js/Slider.js"></script>



</body>

</html>