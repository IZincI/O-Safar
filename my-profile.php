<?php
include('config/app.php');
include_once('Controllers/AuthenticationController.php');

include("./admin/codes/user-code.php");

$authenticated = new AuthenticationController;
$data = $authenticated->authDetail();

include('includes/header.php');
include('includes/navbar.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'Safar - Profil</title>


</head>


<!-- Files CSS -->

<link rel="stylesheet" href="public/css/my-profile.css">

<!-- Global CSS -->

<link rel="stylesheet" href="public/css/style-general.css">

<script src="public/js/master.js" defer></script>

<body>

    <div class="gap-header"></div>

    <div class="py-5">
        <h2>Mon Profil</h2>


        <div class="information-block">

            <div class="container">



                <!-- Block Left Start -->

                <div class="block container-left">

                    <div>
                        <p><?= $data['fname'] ?> <?= $data['lname'] ?></p>
                    </div>
                    <div>
                        <h3>Mon compte</h3>
                        <ul class="Summary">

                            <li class="slider active" onmouseover="changementauclick()">
                                <p class="text-info"> Informations personnelles</p>
                            </li>

                            <li class="slider" onmouseover="changementauclick()" id="voyage">
                                <p class="text-info"> Documents de voyage</p>
                            </li>
                            <!--
                            <li class="slider" onmouseover="changementauclick()">
                                <p class="text-info"> Compagnons de voyage</p>
                            </li>
-->
                        </ul>

                    </div>
                </div>

                <!-- Block Left End -->

                <!-- Block Right Start -->

                <div class="block container-right Section">

                    <div id="personnal-infos0" class="test">
                        <div>
                            <div>


                                <h3>Informations personnelles</h3>
                                <p class="text-info">Ces informations seront utilisées pour remplir automatiquement
                                    vos informations personnelles afin de rendre la réservation plus rapide pour vous
                                    et vous tenir informé(e).</p>

                                <?php include('message.php'); ?>
                            </div>


                            <div class="panel-body">



                                <ul class="info" id="infoPersonnal">
                                    <li>
                                        <p class="text-info-title"><span>Prénom : </span></p>
                                        <p class="text-info"><?= $data['fname'] ?></p>
                                    </li>
                                    <li>
                                        <p class="text-info-title"><span>Nom : </span></p>
                                        <p class="text-info"><?= $data['lname'] ?></p>
                                    </li>
                                    <li>
                                        <p class="text-info-title"><span>Email : </span></p>
                                        <p class="text-info"><?= $data['email']; ?></p>
                                    </li>
                                    <li>
                                        <p class="text-info-title"><span>Mot de passe : </span></p>
                                        <p class="text-info"><?= $new = password_hash("$data[password]", PASSWORD_DEFAULT); ?></p>
                                    </li>
                                    <button type="text" class="button-rounded" id="ButtonPersonnalInfo">Modifier</button>
                                </ul>






                                <ul class="info" id="inputPersonnal">
                                    <form action="" method="post">
                                        <div class="form-contact">
                                            <div class="left-side-form-contact">
                                                <div class="mb-3">

                                                    <input type="text" name="fname" class="input-login" placeholder="Prenom" value="<?= $data['fname'] ?>" />
                                                </div>

                                                <div class="mb-3">

                                                    <input type="text" name="lname" class="input-login" placeholder="Nom" value="<?= $data['lname'] ?>" />
                                                </div>

                                                <div class="mb-3">

                                                    <input type="email" name="email" class="input-login" placeholder="E-mail" value="<?= $data['email'] ?>" />
                                                </div>

                                                <div class="mb-3">

                                                    <input type="text" name="password" class="input-login" placeholder="Mot de passe" value="<?= $data['password'] ?>" />
                                                </div>

                                                <div class="mb-3">

                                                    <input type="text" name="confirm_password" class="input-login" placeholder="Confirmez mot de passe" value="<?= $data['password'] ?>" />
                                                </div>
                                                <button type="submit" class="button-rounded" name="updateUser_btn" id="ButtonPersonnalInfo">Valider</button>
                                    </form>

                                </ul>

                            </div>
                        </div>
                    </div>

                    <div id="personnal-infos1" class="hidden test">
                        <div>
                            <div>


                                <h3>Documents de voyage</h3>
                                <p class="text-info">Ces informations seront utilisées pour remplir automatiquement vos informations de documents de voyage lors de l’enregistrement.</p>
                                <p class="text-info">Toutes les informations seront traitées conformément à la Politique de confidentialité de O'Safar.</p>
                            </div>


                            <div class="panel-body">
                                <form class="list-unstyled" action="" method="post">


                                    <ul class="info">

                                        <li>
                                            <p class="text-info-title"><span>Nouveau document de voyage :</span></p>
                                            <input type="file" name="identitycard">
                                        </li>
                                        <input type="submit" name="identitycard_btn" value="Ajoutez un document">




                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div id="personnal-infos2" class="hidden test">
                        <div>
                            <div>


                                <h3>Compagnons de voyage</h3>
                                <p class="text-info">Ajoutez vos amis et votre famille à votre compte O'Safar et vous pourrez facilement les ajouter à votre réservation.</p>
                                <p class="text-info">Toutes les informations seront traitées conformément à la Politique de confidentialité de O'Safar.</p>
                            </div>


                            <div class="panel-body">
                                <form class="list-unstyled" action="" method="post">


                                    <ul class="info">
                                        <li>
                                            <p>Nouveau document de voyage :</p>
                                        </li>
                                        <li>

                                            <input type="submit" placeholder="rentrer du texte" value="Ajouter"></input>
                                        </li>




                                    </ul>
                                    <button type="submit" name="identity_card" class="button-rounded">Créer le compte</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!--<a href="./user/user-edit.php"><button class="button-square" value="modifier">modifier</button></a>
-->
                    <!-- <button type="submit" class="button-square">Modifier</button>-->



                </div>

                <!-- Block Right Start -->

            </div>
        </div>
    </div>
    <div class="my-ads block">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">Mes vols</div>
                <ul class="list-unstyled">
                </ul>
            </div>
        </div>
    </div>
    <div class="my-ads block">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">Mes documents</div>
                <ul class="list-unstyled">
                </ul>
            </div>
        </div>
    </div>

    <script src="./public/js/my-profile.js"></script>



</body>



</html>