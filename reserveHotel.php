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

<link rel="stylesheet" href="public/css/fly.css">

<!-- Global CSS -->

<link rel="stylesheet" href="./public/css/styleGeoffrey.css">

<body>

    <?php
    include("./includes/navbar.php");
    ?>

    <div class="gap-header"></div>

    <div class="Banner">
        <div class="tagline-banner">
            <h4 class="tagline">S'endormir & Voyager</h4>
        </div>
    </div>

    <div>
        <p class="text-center-justify white-text">
            Envie de se reposer ?</br>
            Nous vous proposons les hotels de nos partenaires
        </p>
    </div>

    <!--  start Recherche -->

    <h2>Reservation Hotel</h2>

    <div class="block-search" id="search">
        <?php include('message.php'); ?>

        <div class="search-container-input">
            <div class="input-line-top">

                <div class="box">

                    <input type="text" placeholder="Départ">
                </div>
                <div class="box">

                    <input type="text" placeholder="Arrivée">
                </div>
                <div class="box">

                    <input type="date" placeholder="Check-in-Date" id="color-date">
                </div>
            </div>
            <div class="input-line-bottom">
                <div class="box">

                    <input type="date" placeholder="Check-out-Date" value="" id="color-date">
                </div>
                <div class="box">

                    <input type="number" placeholder="Adultes">
                </div>
                <div class="box">

                    <input type="number" placeholder="Enfants">
                </div>
            </div>
            <div class="search">
                <input type="submit" value="Chercher un Hotel">
            </div>
        </div>


    </div>

    <!--  end Recherche -->

    <?php
    include("./includes/footer.php");
    ?>

</body>

</html>