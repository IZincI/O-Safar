<?php


include('../config/app.php');

include('../Controllers/AuthenticationController.php');

include('../includes/search.php');
include('../includes/header.php');

?>

<?php

// if user is not connected he will be redirect to login page and get a pop up alert 

$auth = new AuthenticationController;
$connected = $auth->authDetail();

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

<link rel="stylesheet" href="./SelectionFly.css">

<!-- Global CSS -->

<link href="../public/css/navGeoffrey.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php base_url('public/css/style-general.css') ?>">
<link href="../public/css/footer.css" rel="stylesheet" type="text/css">

<body>

    <div class="gap-header"></div>

    <!--<form action="./SelectionFly.php" method="get">-->
    <?php
    include('../includes/navbar.php');
    ?>

    <!-- Vols start -->




    <?php

    $infosSearch = new SearchCode;
    $resultSelectedfly = $infosSearch->SelectedVolSearch();

    if ($resultSelectedfly) {
        foreach ($resultSelectedfly as $row) { ?>

            <h2>Vous avez Sélectionné le vol</h2>

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
                    <p class="fly-info-title">Numéro de Vol</p>
                </div>
                <div class="block-fly-info">
                    <p class="fly-info-title">Prix</p>
                </div>
                <div class="block-fly-info">
                    <p class="fly-info-title">Places Restantes</p>
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
            <a href=" <?php base_url('reserveFly.php?SelectedFly=' . $row["id_vol"] . '') ?>"><button class="button-rounded margin-auto">
                    <div>Modifier</div>
                </button></a>
    <?php
        }
    }
    ?>

    <h2>Tarifs</h2>
    <h3 class="text-center-justify">Choisissez l’un des tarifs pour votre voyage</h3>

    <p class="text-center-justify">Le type de tarif sélectionné s’applique à tous les passagers sur tous les vols
    </p>


    <form action="../recap/recap.php" method="get">

        <div class="container-price-choice">


            <!-- card 1 start -->


            <div class="card-option background-choice" id="img-card0">

                <h2 class="block-price-title">Eco</h2>
                <h2 class="block-price-title">Voyage léger</h2>

                <div class="block-price">
                    <iconify-icon icon="uil:check"></iconify-icon>
                    <p>Non-remboursable.</br>
                        Modification soumise à frais de gestion.</br>
                    </p>
                </div>
                <div class="block-price">
                    <iconify-icon icon="mdi:bag-carry-on"></iconify-icon>
                    <p>1 bagage de petite taille seulement</br>
                        Doit pourvoir être placé sous le siège</br>
                        (40cm x 20cm x 25cm)
                    </p>
                </div>

                <div>

                    <input class="button-rounded margin-auto button-option" type="button" name="option" value="eco">

                </div>
                <div><input class="input-check hidden" type="radio" id="check-0" name="mode" value="eco" checked></div>
            </div>


            <!-- card 1 end -->

            <!-- card 2 start -->


            <div class="card-option bg-grey" id="img-card1">
                <h2 class="block-price-title">Regular</h2>
                <h2 class="block-price-title">Parfait pour les séjours brefs</h2>
                <div class="block-info-option">
                    <div>
                        <div class="block-price">
                            <iconify-icon icon="uil:check"></iconify-icon>
                            <p>Non-remboursable.</br>
                                Modification soumise à frais de gestion.
                            </p>
                        </div>
                        <div class="block-price">
                            <iconify-icon icon="mdi:bag-carry-on"></iconify-icon>
                            <p>Priorité et 2 bagages en cabine
                                embarquement en premier, </br>1 bagage en cabine de 10 kg et 1 petit sac
                            </p>
                        </div>
                        <div class="block-price">
                            <iconify-icon icon="mdi:bag-carry-on"></iconify-icon>
                            <p>Siège réservé</br>
                                Rangées spécifiques disponibles
                            </p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <input class="button-rounded margin-auto button-option" type="button" name="option" value="regular">

                </div>
                <div><input class="input-check hidden" type="radio" id="check-1" name="mode" value="regular"></div>
            </div>

            <!-- card 2 end -->

            <!-- card 3 start -->

            <div class="card-option" id="img-card2">
                <h2 class="block-price-title">Premium</h2>
                <h2 class="block-price-title">Comprends un bagage en soute de 20 kg</h2>
                <div class="block-info-option">
                    <div>
                        <div class="block-price">
                            <iconify-icon icon="uil:check"></iconify-icon>
                            <p>Non-remboursable.</br>
                                Modification soumise à frais de gestion.
                            </p>
                        </div>
                        <div class="block-price">
                            <iconify-icon icon="mdi:bag-carry-on"></iconify-icon>
                            <p>1 bagage de petite taille seulement
                                Rangées spécifiques disponibles
                        </div>
                        <div class="block-price">
                            <iconify-icon icon="mdi:bag-carry-on"></iconify-icon>
                            <p>Siège réservé</br>
                                Rangées spécifiques disponibles
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <input class="button-rounded margin-auto button-option " type="button" name="option" id="regular_option" value="premium">
                </div>
                <div><input class="input-check hidden" type="radio" id="check-2" name="mode" value="premium"></div>
            </div>

            <!-- card 3 end -->

        </div>



        <input type="hidden" value="<?= $row['id_vol']; ?>" name="SelectedFly">
        <input type="hidden" value="<?php echo $_GET['SelectedFly'] ?>" name="SelectedFly">



        <!-- establishment of input according to the numbers of passenger -->

        <h2>Passager</h2>
        <p class="text-center-justify">Veuillez saisir les noms tels qu’ils figurent sur la documentation de voyage ou le passeport

            <?php
            $totalPassenger = $_GET['total'];
            $passengerBlock = new SearchCode;
            $blockCreationInfos = $passengerBlock->InfosPassenger($totalPassenger);
            ?>


            <!-- Vols end -->


            <!-- Bagages start -->


            <!-- infos start -->


        <h2>Veuilez sélectionner le type de bagages que vous souhaitez à bord</h2>
        <p class="text-center-justify">*Sélection obligatoire</p>


        <div class="container-bagages">
            <div class="top-info-bagage">
                <div class="left-side-container-bagages">
                    <div class="block-bagage">
                        <h2>Bagages à main</h2>
                    </div>

                    <div class="block-bagage">
                        <h3>Priorité et 2 bagages en cabine</h3>
                    </div>

                    <div class="block-bagage">

                        <div>
                            <iconify-icon icon="uil:check"></iconify-icon>
                        </div>
                        <div>
                            <p>Embarquement prioritaire</p>
                        </div>
                    </div>

                    <div class="block-bagage">

                        <div>
                            <iconify-icon icon="uil:check"></iconify-icon>
                        </div>
                        <div>
                            <p>10 kg bag. en soute </br>+ 1 petit sac</p>
                        </div>

                    </div>

                    <div class="block-bagage">
                        <h3>Un petit sac uniquement</h3>
                    </div>

                    <div class="block-bagage">

                        <iconify-icon icon="uil:check"></iconify-icon>
                        <p>File standard</p>

                    </div>
                    <div class="block-bagage">

                        <iconify-icon icon="uil:check"></iconify-icon>
                        <p>Doit pouvoir être placé sous le siège</p>

                    </div>

                </div>

                <div class="right-side-container-bagages">

                    <div id="background-image-bagage">
                        <img id="background-image-bagage" alt="">
                    </div>
                    <div class="block-infos-right-bagage">


                        <div class="valise-info">
                            <div>
                                <p class="little-information margin-none">40 x 20 x 25 cm
                                </p>
                            </div>
                            <div>
                                <p class="margin-none">1 bagage de petite taille</p>
                                <p class="little-information text-center-justify margin-none">s’insère sous vos sièges</p>

                            </div>
                        </div>
                        <div class="block-bagage">
                            <p>ou</p>
                        </div>
                        <div class="valise-info margin-none">
                            <div>
                                <p class="little-information margin-none">40 x 20 x 25 cm et 55 x 40 x 20 cm</p>
                            </div>
                            <div>
                                <p class="margin-none">Priorité et 2 Bagages en cabine</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <!-- infos end -->


            <!-- Destination start -->


            <div class="info-vol bg-grey">

                <p><?= $row['depart'] ?> Vers
                    <?= $row['arriver'] ?></p>


            </div>


            <!-- Destination end -->


            <!-- Choix Option Bagage start -->


            <div class="container-choix-nombre-bagage">
                <div class="choix-nombre-bagage">
                    <h3 class="info-bagage">
                        <?= $_SESSION['auth_user']['user_fname']; ?>
                        <?= $_SESSION['auth_user']['user_lname']; ?>
                    </h3>
                </div>
                <div class="choix-nombre-bagage background-choice" id="optionN1">
                    <div>
                        <p class="info-bagage margin-none">1 bagages de petite taille seulement</p>
                        <p class="little-information margin-none">inclus dans le tarif</p>
                    </div>
                    <input class="input-choice-nombre-bagage" type="radio" id="option1" checked name="bagage-a-main" value="1">
                </div>
                <div class="choix-nombre-bagage " id="optionN2">
                    <div>
                        <p class="info-bagage ">Ajouter pour 19,00 €</p>
                    </div>
                    <input class="input-choice-nombre-bagage" type="radio" id="option2" name="bagage-a-main" value="2">

                    </input>
                </div>
            </div>

        </div>

        <!-- Choix Option Bagage start -->

        <h2>Vous avez besoin de plus de bagages</h2>

        <div class="container-bagages">

        </div>

        <!-- Bagages start -->


        <!-- infos start -->




        <div class="container-bagages">
            <div class="top-info-bagage">
                <div class="left-side-container-bagages">
                    <div class="block-bagage">
                        <h2>Enregistrer des bagages</h2>
                    </div>

                    <div class="block-bagage">

                        <div>
                            <iconify-icon icon="uil:check"></iconify-icon>
                        </div>
                        <div>
                            <p>Embarquez les mains libres</p>
                        </div>
                    </div>

                    <div class="block-bagage">

                        <iconify-icon icon="uil:check"></iconify-icon>
                        <p>Meilleur offre si vous réservez</br> dès maintenant</p>

                    </div>
                    <div class="block-bagage">

                        <iconify-icon icon="uil:check"></iconify-icon>
                        <p>Doit pouvoir être placé sous le siège</p>

                    </div>

                </div>


                <!-- right-side-container-bagages start -->


                <div class="right-side-container-bagages">

                    <div id="background-image-bagage">
                        <img id="background-image-bagage2" alt="">
                    </div>
                    <div class="block-infos-right-bagage">


                        <div class="valise-info">
                            <div>
                                <p class="little-information margin-none">55 x 40 x 20 cm
                                </p>
                            </div>
                            <div>
                                <p class="margin-none">Bagage de 10 kg</p>
                                <p class="little-information text-center-justify margin-none">1 sac / passager</p>

                            </div>
                        </div>
                        <div></div>
                        <div class="valise-info margin-none">
                            <div>
                                <p class="little-information margin-none">119 x 119 x 81 cm </p>
                            </div>
                            <div>
                                <p class="text-center-justify margin-none">Bagage de 20 kg</p>
                                <p class="little-information text-center-justify margin-none">dans la limite de 3 sac / passager</p>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- right-side-container-bagages end -->


            </div>


            <!-- infos end -->


            <!-- Destination start -->


            <div class="info-vol bg-grey">

                <p><?= $row['depart'] ?> Vers
                    <?= $row['arriver'] ?></p>


            </div>


            <!-- Destination end -->


            <!-- Choix Option Bagage start -->


            <div class="container-choix-nombre-bagage">
                <div class="choix-nombre-bagage">
                    <h3 class="info-bagage">
                        <?= $_SESSION['auth_user']['user_fname']; ?>
                        <?= $_SESSION['auth_user']['user_lname']; ?>
                    </h3>
                </div>
                <div class="choix-nombre-bagage" id="optionN1">
                    <div>
                        <p class="info-bagage margin-none">1 bagages de petite taille seulement</p>

                    </div>

                </div>
                <div class="choix-nombre-bagage" id="optionN2">


                    <div>
                        <p class="info-bagage">Ajouter pour 19,00 €</p>
                    </div>
                    <p class="little-information margin-none">max 3 bagages</p>
                    <div class="compteur-bagage">
                        <input class="input-choice-nombre-bagage hidden" type="radio" id="option2">

                        <div>
                            <iconify-icon icon="fluent:subtract-circle-24-filled" width="30" id="sub"></iconify-icon>
                        </div>
                        <input type="number" name="bagage-supplementaire" id="compteurNbrValise" value="0">
                        <div>
                            <iconify-icon icon="akar-icons:circle-plus-fill" width="30" id="add"></iconify-icon>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- Bagages end -->


        <!-- Optional start -->

        <h2>Les meilleurs offres pour votre voyage</h2>

        <div id="osafar-pass">
            <div id="osafar-pass-top-container">
                <div id="osafar-left-pass-container" class="container-osafar-pass">
                    <h3>O'Safar Pass</h3>

                    <h2>Evitez l'attente aux contrôles de sécurité<br /> avec une file dédiée O'Safar Pass</h2>

                    <p>évitez toutes attentes</p>

                    <h3>Les avantages du O'Safar Pass</h3>

                    <div class="osafar-left-block-pass-container">
                        <iconify-icon icon="uil:check"></iconify-icon>
                        <p>Passez rapidement les contrôles pour évitez l'attente</p>
                    </div>

                    <div class="osafar-left-block-pass-container">
                        <iconify-icon icon="uil:check"></iconify-icon>
                        <p>Diminuer le stress de l'attente</p>
                    </div>

                </div>
                <div id="osafar-right-pass-container" class="container-osafar-pass">
                    <div id="background-image-osafar-pass">
                        <img alt="">
                    </div>
                </div>
            </div>


            <div id="osafar-pass-bottom-container" class="bg-grey">

                <div id="osafar-pass-top-block">
                    <p>O'Safar Pass</p>
                    <input type="checkbox" name="osafarpass">
                    <p class="little-information margin-none">7,00 € / personne</p>
                </div>

                <div>
                    <a href="<?php base_url('FAQ.php') ?>">
                        <p class="underline">Pour + d'informations</p>
                    </a>
                </div>

            </div>
        </div>


        <!-- Optional end -->


        <!-- insurance start -->


        <div id="container-assurance">
            <div id="container-top-assurance">
                <div>
                    <h3>Assurance</h3>
                    <h2>La tranquilité d'esprit n'a pas de prix</h2>
                    <p>Avec l'assurance SafeFly</p>
                    <p class="little-information margin-none">7,00 € / personne</p>
                </div>
                <div id="background-image-assurance">
                    <img alt="">
                </div>
            </div>

            <div class="container-assurance-choice">


                <!-- Inssurance card 1 start -->


                <div class="card-assurance bg-grey" id="card-option-assurance-0">
                    <p class="block-assurance-title">Assurance Standard</p>
                    <p>Couverture de base pour votre voyage</p>
                    <div class="block-info-option">
                        <div>
                            <div class="block-price">
                                <iconify-icon icon="uil:check"></iconify-icon>
                                <p>
                                    Frais médicaux jusqu'a 150 000 €
                                </p>
                            </div>
                            <div class="block-price">
                                <iconify-icon icon="mdi:bag-carry-on"></iconify-icon>
                                <p>Effets personnels jusqu'a 1 500 €
                                </p>
                            </div>
                            <div class="block-price">
                                <iconify-icon icon="mdi:bag-carry-on"></iconify-icon>
                                <p>Annulation inattendue jusqu'a 500€
                                </p>
                            </div>
                        </div>
                    </div>
                    <p class="info-bagage">15,99 €
                        <span class="little-information">/ personne
                    </p>
                    <div>
                        <input class="button-rounded button-option-assurance margin-auto" type="button" name="assurance" value="Standard">

                    </div>
                    <div><input class="input-assurance-check " type="radio" id="check-assurance-0" name="assurance-mode" value="Standard"></div>
                </div>


                <!-- Inssurance card 1 end -->


                <!-- Inssurance card 2 start -->


                <div class="card-assurance bg-grey" id="card-option-assurance-1">
                    <p class="block-assurance-title">Assurance Plus</p>
                    <p class="text-center-justify">L'essentiel plus une couverture supplémentaire</p>
                    <div class="block-info-option">
                        <div>
                            <div class="block-price">
                                <iconify-icon icon="uil:check"></iconify-icon>
                                <p>
                                    Tous les avantages de l'assurance standard
                                </p>
                            </div>
                            <div class="block-price">
                                <iconify-icon icon="mdi:bag-carry-on"></iconify-icon>
                                <p>
                                    Remboursement du billet
                                </p>
                            </div>

                        </div>
                    </div>
                    <p class="info-bagage">18,99 €
                        <span class="little-information">/ personne
                    </p>
                    <div>
                        <input class="button-rounded button-option-assurance margin-auto" type="button" name="assurance" value="Plus">

                    </div>
                    <div><input class="input-assurance-check " type="radio" id="check-assurance-1" name="assurance-mode" value="plus"></div>
                </div>


                <!-- Inssurance card 2 end -->

                <!-- Inssurance card 2 start -->


                <div class="card-assurance bg-grey" id="card-option-assurance-2">
                    <p class="block-assurance-title">Assurance Annuelle</p>
                    <p class="text-center-justify">L'essentiel pour tous vos voyages</br> pendant un an</p>
                    <div class="block-info-option">
                        <div>
                            <div class="block-price">
                                <iconify-icon icon="uil:check"></iconify-icon>

                                Tous les avantages de l'assurance standard
                                </p>
                            </div>

                            <div class="block-price">
                                <iconify-icon icon="mdi:bag-carry-on"></iconify-icon>
                                <p>
                                    Année complète d'assurance
                                </p>
                            </div>
                        </div>
                    </div>
                    <p class="info-bagage">34,99 €
                        <span class="little-information">/ personne
                    </p>
                    <div>
                        <input class="button-rounded button-option-assurance margin-auto" type="button" name="assurance" value="Annuelle">

                    </div>
                    <div><input class="input-assurance-check" type="radio" id="check-assurance-2" name="assurance-mode" value="annuelle"></div>
                </div>
                <div class="gap-header"></div>

                <!-- Inssurance card 2 end -->
            </div>
        </div>

        <!-- insurance end -->


        <!-- Summary Order start -->


        <h2>Coordonnées</h2>
        <p class="little-information text-center-justify margin-none">Nous utiliserons ces coordonnées pour les changements de vol et les confirmations de commande.(les champs marqués d'un *
            sont obligatoires)
        </p>

        <div id="container-info-passenger">
            <div id="container-info-passenger-top">
                <div>
                    <p class="info-bagage "><?= $connected['fname']; ?>
                        <?= $connected['lname'] ?></p>
                    <p class=""><b> Messagerie électronique :</b> <?= $connected['email'] ?></p>
                </div>

                <div>


                    <input type="tel" required pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" placeholder="N° de Telephone" name="telephone" value="<?php if (isset($_GET['telephone'])) {
                                                                                                                                                            echo $_GET['telephone'];
                                                                                                                                                        }  ?>" />


                </div>

            </div>
            <?php // if (empty($_GET['telephone'])) {
            ?>
            <!--<span class="warning-message margin-auto text-center-justify">Vous devez rentrer votre numéro de téléphone</span>
            <?php
            // }  
            ?>
            </span>-->
            <div class="block-info-passenger-top">

                <input type="checkbox" name="offre-e-mail" checked>
                <p class="margin-none">
                    Les abonnés O'Safar bénéficient d'un accés privilégié à des réductions exclusives sur nos vols et produits.</br>
                    De plus, ils sont informés en avant-première des nouvelles destinations désservies;</br> informations communiquées uniquement dans nos e-mails marketing.</br> Si vous ne souhaitez pas recevoir ces offres par e-mail, veuillez décocher la case.
                </p>
            </div>
            <div class="block-info-passenger-top">
                <input type="checkbox" name="info-par-sms">
                <p class="margin-none">

                    Envoyer mes informations de vol par SMS <b>2.99 €</b>
                </p>
            </div>


            <!-- Summary Order end -->


            <!-- Insurance Premium start  -->


        </div>
        <div class="container-premium">


            <div>
                <div class="block-premium">

                    <h3><input type="checkbox" name="assurance-premium" id="">Assurance Premium</h3>

                </div>
                <div class="block-premium little-information ">
                    <iconify-icon icon="uil:check"></iconify-icon>
                    <p class="margin-none">Frais médicaux couverts jusqu'a <b>150 000 €</b></p>
                </div>
                <div class="block-premium little-information">
                    <iconify-icon icon="uil:check"></iconify-icon>
                    <p class="margin-none">Effets personnels couverts jusqu'a <b>1 500 €</b></p>
                </div>
                <div class="block-premium little-information">
                    <iconify-icon icon="uil:check"></iconify-icon>
                    <p class="margin-none">Annulation pour des circonstances imprévues jusqu'a <b>500 €</b></p>
                </div>
                <div class="block-premium little-information">
                    <iconify-icon icon="uil:check"></iconify-icon>
                    <p class="margin-none">Remboursement du billet</p>
                </div>
            </div>

            <div class="margin-auto text-center-justify">
                <p class="info-bagage text-center-justify">18 €</p>


                <p class="margin-none text-center-justify">par personne</p>
            </div>
        </div>

        <input type="hidden" value="<?= $totalPassenger ?>" name="total">


        <input name="commande" type="submit" value="confirmer" class="margin-auto" />


    </form>



    <!-- Insurance Premium end  -->


    <div class="gap-header"></div>

    <?php include('../includes/footer.php'); ?>
</body>

<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
<script src=<?php base_url("public/js/nav.js") ?>></script>
<script src=<?php base_url("reserveFly/SelectionFly.js") ?>></script>


</html>