<?php
include('../config/app.php');

include('../includes/search.php');
include('../includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<!-- Global CSS -->

<link rel="stylesheet" href="<?php base_url('public/css/style-general.css') ?>">

<link rel="stylesheet" href="<?php base_url('recap/recap.css') ?>">

<body>



    <?php

    $commande = new InfosCommande;
    $infosSearch = new SearchCode;
    $getSearchinfo = $infosSearch->SelectedVolSearch();
    foreach ($getSearchinfo as $value)
        $totalprice = $value['prix'];
    var_dump($value);



    ?>




    <h2>Informations Vol Sélectionné</h2>
    <h3> Destination </h3>

    <p>
        <?= $value['depart']; ?> -
        <?= $value['arriver']; ?>
    </p>
    <p> Numéro de Vol :
        <?= $value['id_vol']; ?></br>

        Départ Prévu le :
        <?php echo date('d-m-Y', strtotime($value['aller'])); ?> </br>
        <?php echo date('H:s', strtotime($value['aller'])); ?> </br>


        Prix du billet:
        <?= $value['prix']; ?>€ / personne </br>


        Vous avez pris <?= $_GET['total']; ?> place </br>



    </p>

    <h2>Passager(s)</h2>
    <?= $infosPassagerCommande = $infosSearch->GetInfoPassenger(); ?>


    <h2>Le Vol</h2>

    <h3>La Classe Sélectionner</h3>
    <?php $modeClasse = $commande->modeClasse(); ?>
    <div></div>

    <h3>Bagages</h3>
    <?php
    $bagageAMainSupplementaire = $commande->bagageAMainSupplementaire();
    $bagageSupplementaire = $commande->bagageEnSouteSupplementaire();

    ?>

    <?php

    $offreEmail = $commande->offreEmail();
    ?>


    <h2>Montant A Payer</h2>
    <?php
    $prixBillet = $value['prix'];
    $totalPrice = $infosSearch->totalPrice($prixBillet);
    echo "<p>le prix total est de " . $totalPrice . " €</p>";
    ?>

    </p>
</body>

</html>