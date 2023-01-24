<?php
include('config/app.php');
include('codes/authentication_code.php');
include('./admin/controllers/VolController.php');

include('./includes/search.php');
include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'Safar - Reservation Vol</title>
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
    if (isset($_GET['adulte'])) {
        $totalPassenger = (int)$_GET['adulte'] + (int)$_GET['enfant'];
    }


    $infosSearch = new SearchCode;
    $getSearchinfo = $infosSearch->SelectedVolSearch();

    if (isset($getSearchinfo)) {


        foreach ($getSearchinfo as $value) {
        }
    }
    ?>



    <!--  start Recherche -->

    <h2>Reservation Vol</h2>
    <div class="container-search" id="search">
        <?php include('message.php'); ?>

        <form action="" method="get">
            <div class="search-container-input">
                <div class="input-line-top">

                    <div class="block-search">

                        <input class="input-login" type="text" name="depart" placeholder="Départ" required value="<?php if (isset($_GET['depart'])) {
                                                                                                                        echo $_GET['depart'];
                                                                                                                    } elseif (isset($_GET['SelectedFly'])) {
                                                                                                                        echo $value['depart'];
                                                                                                                    } else {
                                                                                                                        echo "";
                                                                                                                    }
                                                                                                                    ?>">
                    </div>
                    <div class="block-search">

                        <input type="text" name="arriver" placeholder="Arrivée" value="<?php if (isset($_GET['arriver'])) {
                                                                                            echo $_GET['arriver'];
                                                                                        } elseif (isset($_GET['SelectedFly'])) {
                                                                                            echo $value['arriver'];
                                                                                        } else {
                                                                                            echo "";
                                                                                        } ?>">
                    </div>
                    <div class="block-search">

                        <input type="date" name="aller" placeholder="Check-in-Date" id="color-date" value="<?php if (isset($_GET['aller'])) {
                                                                                                                echo $_GET['aller'];
                                                                                                            } elseif (isset($_GET['SelectedFly'])) {
                                                                                                                echo date('Y-m-d', strtotime($value['aller']));
                                                                                                            } else {
                                                                                                                echo "";
                                                                                                            } ?>">
                    </div>
                </div>
                <div class="input-line-bottom">
                    <div class="block-search">

                        <input type="date" name="retour" placeholder="Check-out-Date" value="<?php if (isset($_GET['retour'])) {
                                                                                                    echo $_GET['retour'];
                                                                                                } elseif (isset($_GET['SelectedFly'])) {
                                                                                                    echo date('Y-m-d', strtotime($value['retour']));
                                                                                                } else {
                                                                                                    echo "";
                                                                                                }
                                                                                                ?>" id="color-date">
                    </div>
                    <div class="block-search">


                        <input type="number" name="adulte" placeholder="Adultes" min="1" required value="<?php if (isset($_GET['adulte'])) {
                                                                                                                echo $_GET['adulte'];
                                                                                                            } ?>">
                    </div>
                    <div class="block-search">

                        <input type="number" name="enfant" placeholder="Enfants" value="<?php if (isset($_GET['enfant'])) {
                                                                                            echo $_GET['enfant'];
                                                                                        } ?>">
                    </div>
                </div>
                <!-- <a href="../admin/vol-view.php"> -->
                <div class="search">
                    <input type="submit" name="search_btn" class="button-rounded" value="Chercher un vol"></input>
                </div>

        </form>

    </div>


    </div>

    <!--  end Recherche -->



    <?php
    // Show All Flies start

    $parameterSearch = new SearchCode;
    $resultSearchQuery = $parameterSearch->detailVolSearch();

    if ($resultSearchQuery !== NULL) {



        foreach ($resultSearchQuery as $row) {


    ?>


            <div class="block-info">
                <div class="container-block-fly-info title-fly-info">
                    <p><?= $row['depart'] ?>-</p>
                    <p> <?= $row['arriver'] ?></p>
                </div>

                <div class="container-block-fly-info title-fly-info">
                    <p><?= date('d-m-Y', strtotime($row['aller'])) ?></p>
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
                    <div class="block-fly-info">
                        <p class="fly-info-title">Place Restantes</p>
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
                    <div class="block-fly-info">
                        <p class="text-fly-info"><?= $row['passager'] . "</br> Restantes" ?></p>
                    </div>

                </div>
                <form action="./reserveFly/SelectionFly.php" class="SubmitButton" method="get">
                    <input type="hidden" value="<?= $row['id_vol']; ?>" name="SelectedFly">
                    <input type="hidden" value="<?= $totalPassenger ?>" name="total">
                    <input type="submit" class="button-rounded" name="search_btn" value="Réserver"></input>
                </form>
            </div>



    <?php
        }
    }
    ?>









    <?php
    include("./includes/footer.php");
    ?>

</body>

</html>