<?php
include('config/app.php');
include('codes/authentication_code.php');
include('./admin/controllers/HotelController.php');

include('includes/header.php');
include('./includes/search.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'Safar</title>
</head>

<!-- Files CSS -->

<link rel="stylesheet" href="public/css/fly.css">

<!-- Global CSS -->

<link rel="stylesheet" href="./public/css/style-general.css">

<body>

    <?php
    include("./includes/navbar.php");
    ?>

    <div class="gap-header"></div>

    <div class="Banner">
        <div class="tagline-banner">

        </div>
    </div>

    <div>
        <p class="text-center-justify white-text">
            Envie de se reposer ?</br>
            Nous vous proposons les hotels de nos partenaires
        </p>
    </div>

    <?php
    $infosSearch = new SearchCode;
    $getSearchinfo = $infosSearch->SelectedHotelSearch();

    if (isset($getSearchinfo)) {


        foreach ($getSearchinfo as $value) {
        }
    }
    ?>
    <!--  start Recherche -->

    <h2>Reservation Hotel</h2>

    <div class="container-search" id="search">
        <?php include('message.php'); ?>

        <form action="" method="get">
            <div class="search-container-input">
                <div class="input-line-top">

                    <div class="block-search">

                        <input class="input-login" type="text" name="namehostel" placeholder="Nom Hotel" value="<?php if (isset($_GET['namehostel'])) {
                                                                                                                    echo $_GET['namehostel'];
                                                                                                                } elseif (isset($_GET['SelectedHotel'])) {
                                                                                                                    echo $value['namehostel'];
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                }
                                                                                                                ?>">
                    </div>
                    <div class="block-search">

                        <input type="text" placeholder="Ville" name="city">
                    </div>
                    <div class="block-search">

                        <input type="date" placeholder="Check-in-Date" id="color-date">
                    </div>
                </div>
                <div class="input-line-bottom">
                    <div class="block-search">

                        <input type="date" placeholder="Check-out-Date" value="" id="color-date">
                    </div>
                    <div class="block-search">

                        <input type="number" placeholder="Adultes">
                    </div>
                    <div class="block-search">

                        <input type="number" placeholder="Enfants">
                    </div>
                </div>
                <div class="search">
                    <input type="submit" name="search_btn" class="button-rounded" value="Chercher un Hotel"></input>
                </div>
        </form>
    </div>
    </div>

    <?php
    // Show All Flies start

    $parameterSearch = new SearchCode;
    $resultSearchQuery = $parameterSearch->detailHotelSearch();

    if ($resultSearchQuery !== NULL) {



        foreach ($resultSearchQuery as $row) {


    ?>

            <div>
                <div class="block-info">

                    <!--
                    <div class="container-block-fly-info title-fly-info">
                        <p><?= date('d-m-Y', strtotime($row['aller'])) ?></p>
                    </div>
        -->
                    <div class="container-block-fly-info">


                        <div class="block-fly-info">
                            <p class="fly-info-title">Heure Départ</p>
                        </div>
                        <div class="block-fly-info">
                            <p class="fly-info-title">Hotel</p>
                        </div>
                        <div class="block-fly-info">
                            <p class="fly-info-title">Ville</p>
                        </div>
                        <div class="block-fly-info">
                            <p class="fly-info-title">Prix</p>
                        </div>
                        <div class="block-fly-info">
                            <p class="fly-info-title">Place Restantes</p>
                        </div>


                    </div>

                    <div class="container-block-fly-info">


                        <div class="block-fly-info">
                            <p class="text-fly-info"><?= $row['namehostel'] ?></p>
                        </div>
                        <!--
                        <div class="block-fly-info">
                            <p class="text-fly-info"><?= date('H:m', strtotime($row['aller'])) ?></p>
                        </div>
                        <div class="block-fly-info">
                            <p class="text-fly-info"><?= date('H:m', strtotime($row['retour'])) ?></p>
                        </div>
        -->
                        <div class="block-fly-info">
                            <p class="text-fly-info"><?= $row['city'] ?></p>
                        </div>
                        <div class="block-fly-info">
                            <p class="text-fly-info"><?= $row['prix'] . " €" ?></p>
                        </div>


                    </div>
                    <form action="./reserveFly/SelectionHotel.php" class="SubmitButton" method="get">
                        <input type="hidden" value="<?= $row['id_hotel']; ?>" name="SelectedHotel">
                        <!--<input type="hidden" value="<?= $totalPassenger ?>" name="total">-->
                        <input type="submit" class="button-rounded" name="search_btn" value="Réserver"></input>
                    </form>
                </div>


        <?php
        }
    }
        ?>

            </div>

            <!--  end Recherche -->

            <?php
            include("./includes/footer.php");
            ?>

</body>

</html>