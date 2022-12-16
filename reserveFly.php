<?php
include('config/app.php');
include('codes/authentication_code.php');

include('./admin/controllers/VolController.php');



include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'Safar - Reservation Vol</title>
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
            <!--<h4 class="tagline">S'envoler & Voyager</h4>-->
        </div>
    </div>

    <div>
        <p class="text-center-justify white-text">
            Envie de se reposer ?</br>
            Nous vous proposons les hotels de nos partenaires
        </p>
    </div>

    <!--  start Recherche -->

    <h2>Reservation Vol</h2>
    <div class="container-search" id="search">
        <?php include('message.php'); ?>

        <?php
        /* en test */
        include('./includes/search.php');
        ?>

        <form action="" method="get">
            <div class="search-container-input">

                <div class="input-line-top">

                    <div class="block-search">

                        <input type="text" name="depart" placeholder="Départ">
                    </div>
                    <div class="block-search">

                        <input type="text" name="arriver" placeholder="Arrivée">
                    </div>
                    <div class="block-search">

                        <input type="date" name="aller" placeholder="Check-in-Date" id="color-date">
                    </div>
                </div>
                <div class="input-line-bottom">
                    <div class="block-search">

                        <input type="date" name="retour" placeholder="Check-out-Date" value="" id="color-date">
                    </div>
                    <div class="block-search">

                        <input type="number" name="adulte" placeholder="Adultes">
                    </div>
                    <div class="block-search">

                        <input type="number" name="enfant" placeholder="Enfants">
                    </div>
                </div>
                <!-- <a href="../admin/vol-view.php"> -->
                <div class="search">
                    <input type="submit" name="search_btn" value="Chercher un vol"></input>
                </div>
                </a>
        </form>
    </div>


    </div>

    <!--  end Recherche -->

    <?php

    $parameterSearch = new SearchCode;
    $resultSearchQuery = $parameterSearch->detailSearch();
    if ($resultSearchQuery) {
        foreach ($resultSearchQuery as $row) {
            var_dump($row);
    ?>
            <div class="container-block-fly-info">
                <p><?= $row['depart'] ?>- </p>
                <p> <?= $row['arriver'] ?></p>
            </div>
            <div class="container-block-fly-info">
                <p><?= date('d-M-y', strtotime($row['aller'])) ?></p>
            </div>

            <div class="container-block-fly-info">

                <div class="block-fly-info">
                    <p class="fly-info-title">Compagnie</p>
                </div>
                <div class="block-fly-info">
                    <p class="fly-info-title">Heure Départ</p>
                </div>
                <div class="block-fly-info">
                    <p class="fly-info-title">Heure Arriver</p>
                </div>
                <div class="block-fly-info">
                    <p class="fly-info-title">Numéro De Vol</p>
                </div>
                <div class="block-fly-info">
                    <p class="fly-info-title">Prix</p>
                </div>


            </div>

            <div class="container-block-fly-info">


                <div class="block-fly-info">
                    <p class="text-fly-info"><?= $row['compagnie'] ?></p>
                </div>
                <div class="block-fly-info">
                    <p class="text-fly-info"><?= date('H:m', strtotime($row['aller'])) ?></p>
                </div>
                <div class="block-fly-info">
                    <p class="text-fly-info"><?= date('H:m', strtotime($row['retour'])) ?></p>
                </div>
                <div class="block-fly-info">
                    <p class="text-fly-info"><?= "FR " . $row['id_vol'] ?></p>
                </div>
                <div class="block-fly-info">
                    <p class="text-fly-info"><?= $row['prix'] . " €" ?></p>
                </div>

            </div>

        <?php
        }
    } else { ?>

    <?php
    }
    ?>

    <div class="gap-header"></div>
    <div class="gap-header"></div>
    <div class="gap-header"></div>
    <div class="gap-header"></div>
    <div class="gap-header"></div>
    <div class="gap-header"></div>
    <div class="gap-header"></div>


    <?php
    // affichage des Vols
    $vols = new VolController;
    $infosVol = $vols->index();
    if ($infosVol) {
        if (!$resultSearchQuery) {
            foreach ($infosVol as $row) {
    ?>
                <div class="container-block-fly-info">
                    <div class="block-fly-info">
                        <p class="fly-info-title">Numéro de Vol</p>
                    </div>
                    <div class="block-fly-info">
                        <p class="fly-info-title">Départ</p>
                    </div>
                    <div class="block-fly-info">
                        <p class="fly-info-title">Arriver</p>
                    </div>
                    <div class="block-fly-info">
                        <p class="fly-info-title">Aller</p>
                    </div>
                    <div class="block-fly-info">
                        <p class="fly-info-title">Retour</p>
                    </div>
                </div>

                <div class="container-block-fly-info">




                    <div class="block-fly-info">
                        <p class="text-fly-info"><?= $row['id_vol'] ?></p>
                    </div>
                    <div class="block-fly-info">
                        <p class="text-fly-info"><?= $row['depart'] ?></p>
                    </div>
                    <div class="block-fly-info">
                        <p class="text-fly-info"><?= $row['arriver'] ?></p>
                    </div>
                    <div class="block-fly-info">
                        <p class="text-fly-info"><?= $row['aller'] ?></p>
                    </div>
                    <div class="block-fly-info">
                        <p class="text-fly-info"><?= $row['retour'] ?></p>
                    </div>

                    <!-- Indique le nombre de passagers
                <div class="block-fly-info"><?= $row['passager'] ?> passengers</div>
        -->
                </div>

    <?php
            }
        }
    }
    ?>

    <?php
    include("./includes/footer.php");
    ?>

</body>

</html>